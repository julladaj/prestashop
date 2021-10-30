<?php
/**
 * EU Legal - Better security for German and EU merchants.
 *
 * @version   : 1.0.2
 * @date      : 2014 08 26
 * @author    : Markus Engel/Chris Gurk @ Onlineshop-Module.de | George June/Alexey Dermenzhy @ Silbersaiten.de
 * @copyright : 2014 Onlineshop-Module.de | 2014 Silbersaiten.de
 * @contact   : info@onlineshop-module.de | info@silbersaiten.de
 * @homepage  : www.onlineshop-module.de | www.silbersaiten.de
 * @license   : http://opensource.org/licenses/osl-3.0.php
 * @changelog : see changelog.txt
 * @compatibility : PS == 1.6.0.11
 */

class Order extends OrderCore
{
    public function __construct($id = null, $id_lang = null)
    {
        // change validate method of discount fields for 'paymentfee' module
        parent::__construct($id, $id_lang);

        $this->fieldsValidate['total_discounts'] = 'isFloat';
        $this->fieldsValidate['total_discounts_tax_incl'] = 'isFloat';
        $this->fieldsValidate['total_discounts_tax_excl'] = 'isFloat';

        $this->def['fields']['total_discounts']['validate'] = 'isFloat';
        $this->def['fields']['total_discounts_tax_incl']['validate'] = 'isFloat';
        $this->def['fields']['total_discounts_tax_excl']['validate'] = 'isFloat';
    }

	/*
	 * Returns a list of all the taxes represented in the order and the percentage of each tax, e.g,
	 * an order with two products taxed with 9% and 17% accordingly would have 50% of 9% tax and
	 * 50% of 19% tax.
	 *
	 * @access public
	 *
	 * @param mixed $products - an array of products in the order (optional, the method will fetch
	 * them from the order if not provided)
	 *
	 * @param boolean $slip - when getting the data for an order slip set this to true
	 *
	 * @return mixed - array of taxes on success or boolean false if taxes weren't found
	 */
	public function getOrderTaxes($products = false, $slip = false)
	{
		if (!$products)
			$products = ($slip && Validate::isLoadedObject($slip)) ? $slip->getProducts() : $this->getProducts();

		$taxes = array();
		$id_order_details = array();
		$defTaxName = null;
		$defTaxRate = 0;

		if (is_array($products) && count($products))
		{
			foreach ($products as $product)
				array_push($id_order_details, (int)$product['id_order_detail']);
		}

		if (count($id_order_details))
		{
			$order_taxes = Db::getInstance()->ExecuteS('
				SELECT
					od.*,
					odt.*,
					t.`rate`,
					tl.`name`
				FROM
					`'._DB_PREFIX_.'order_detail` od
				LEFT JOIN
					`'._DB_PREFIX_.'order_detail_tax` odt ON
					(
						od.`id_order_detail` = odt.`id_order_detail`
					)
				LEFT JOIN
					`'._DB_PREFIX_.'tax` t ON
					(
						t.`id_tax` = odt.`id_tax`
					)
				LEFT JOIN
					`'._DB_PREFIX_.'tax_lang` tl ON
					(
						t.`id_tax` = tl.`id_tax` AND
						tl.`id_lang` = '.(int)$this->id_lang.'
					)
				WHERE odt.`id_order_detail` IN ('.(implode(',', $id_order_details)).')
			');

			if ($order_taxes && count($order_taxes))
			{
				foreach ($order_taxes as $order_tax)
				{
					if (!array_key_exists($order_tax['name'], $taxes))
					{
						$taxes[$order_tax['name']] = array(
							'total' => 0,
							'total_net' => 0,
							'total_vat' => 0,
							'rate' => (float)$order_tax['rate'],
							'percentage' => 0
						);
					}

					$taxes[$order_tax['name']]['total_net'] += (float)$order_tax['total_price_tax_excl'];
					$taxes[$order_tax['name']]['total_vat'] += (float)$order_tax['total_price_tax_incl'];
					$taxes[$order_tax['name']]['total'] += $order_tax['total_price_tax_incl'] - (float)$order_tax['total_price_tax_excl'];
				}
			}
		}

		if (count($taxes))
		{
			foreach ($taxes as &$tax)
				$tax['percentage'] = 100 / ($this->total_products_wt / $tax['total_vat']);

			return $taxes;
		}

		return false;
	}


	/*
	 * Calculates compound tax for prices that mustn't have a set tax, e.g., wrapping price
	 *
	 * @access public
	 *
	 * @scope static
	 *
	 * @param float $price - price to apply the tax to
	 *
	 * @param array $order_taxes - a list of taxes used in the order
	 *
	 * @return mixed - array of tax values on success or boolean false
	 */
	public static function calculateCompundTax($price, $order_taxes)
	{
		if (!is_array($order_taxes) || (!Validate::isPrice($price) && !Validate::isNegativePrice($price)))
			return false;

		$result = array();

		foreach ($order_taxes as $tax_name => $tax_details)
		{
			if (array_key_exists('percentage', $tax_details))
			{
				$rate = (float)$tax_details['rate'];
				$total_vat = $price * ($tax_details['percentage'] / 100);
				$total_net = $total_vat / (1 + $rate / 100);
				$total = $total_vat - $total_net;

				$result[$tax_name] = array(
					'total' => $total,
					'total_net' => $total_net,
					'total_vat' => $total_vat,
				);
			}
		}

		return count($result) ? $result : false;
	}

	/*
	 * Calculates compound tax price for prices that mustn't have a set tax, e.g., wrapping price
	 *
	 * @access public
	 *
	 * @scope static
	 *
	 *
	 * @param float $price - price to apply the tax to
	 *
	 * @param array $order_taxes - a list of taxes used in the order
	 *
	 * @param boolean $add_tax - when set to true the tax will be added to $price, otherwise it will be subtracted
	 *
	 * @return float - calculated value
	 */
	public static function calculateCompundTaxPrice($price, $order_taxes, $add_tax = false)
	{
		if ($taxes = self::calculateCompundTax($price, $order_taxes))
		{
			foreach ($taxes as $compound_tax)
			{
				if ($add_tax)
					$price += (float)$compound_tax['total'];
				else
					$price -= (float)$compound_tax['total'];
			}
		}

		return (float)$price;
	}

	/*
	 * Adds compund taxes to an array of order taxes
	 *
	 * @access public
	 *
	 * @scope static
	 *
	 *
	 * @param array $taxes - a reference to order taxes
	 *
	 * @param array $prices - a list of prices that use compund taxes
	 *
	 * @return void
	 */
	public static function addCompoundTaxesToTaxArray(&$taxes, $prices)
	{
		if (!is_array($taxes) || !is_array($prices))
			return false;

		$compound_taxes = array();

		foreach ($prices as $price)
		{
			if (!Validate::isPrice($price) && !Validate::isNegativePrice($price))
				continue;

			array_push($compound_taxes, self::calculateCompundTax($price, $taxes));
		}

		foreach ($compound_taxes as $price_compund)
		{
			if (!$price_compund)
				continue;

			foreach ($price_compund as $compound_tax_name => $compound_tax)
			{
				if (array_key_exists($compound_tax_name, $taxes))
				{
					foreach ($compound_tax as $k => $v)
					{
						if (array_key_exists($k, $taxes[$compound_tax_name]))
							$taxes[$compound_tax_name][$k] += $v;
					}
				}
			}
		}
	}

	/*
	 * Get tax details for an order, including compund taxes
	 *
	 * @access public
	 *
	 *
	 * @param mixed $products - an array of products in the order (optional, the method will fetch
	 * them from the order if not provided)
	 *
	 * @param boolean $slip - when getting the data for an order slip set this to true
	 *
	 * @return mixed - an array of taxes or boolean false
	 */
	public function getOrderTaxDetails($products = false, $slip = false)
	{
		if (!$products)
			$products = ($slip && Validate::isLoadedObject($slip)) ? $slip->getProducts() : $this->getProducts();

		$taxes = array();
		$defTaxName = null;
		$defTaxRate = 0;

		$order_taxes = $this->getOrderTaxes($products, $slip);

		if ($order_taxes)
		{
			if (!$slip)
			{
				$paymentNet = 0;
				$paymentVat = 0;
				$has_payments = false;

				$invoices = $this->getOrderPaymentCollection()->getResults();

				if ($invoices && count($invoices))
				{
					foreach ($invoices as $invoice)
					{
						$paymentNet += (float)$invoice->total_payment_tax_excl;
						$paymentVat += (float)$invoice->total_payment_tax_incl;

						if (!$has_payments)
							$has_payments = true;
					}
				}

				if (!$has_payments)
				{
					$paymentNet += (float)$this->total_payment_tax_excl;
					$paymentVat += (float)$this->total_payment_tax_incl;
				}

				self::addCompoundTaxesToTaxArray($order_taxes, array($this->total_shipping_tax_incl, $this->total_wrapping_tax_incl, ($this->total_discounts_tax_incl * -1), $paymentVat));
			}
		}

		return $order_taxes;
	}

}
