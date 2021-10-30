<?php

class AddressController extends AddressControllerCore
{


   public function postProcess()
   {
      $this->context->smarty->assign('editing', false);
      $id_address = (int)Tools::getValue('id_address');
      // Initialize address if an id exists
      if ($id_address)
      {
         $this->address_form->loadAddressById($id_address);
      }

      // Fill the form with data
      $this->address_form->fillWith(Tools::getAllValues());

      // Submit the address, don't care if it's an edit or add
      if (Tools::isSubmit('submitAddress'))
      {


         # Custom validate postcode and city

         if (!$this->checkPostcodenCity('postalCode', Tools::getValue('postcode')))
         {
            $this->errors[] = 'Die Postleitzahl ist außerhalb des Liefergebiets.' . $this->getArea();

            return;
         }
         /* if (!$this->checkPostcodenCity('cityName', Tools::getValue('city')))
          {
             $this->errors[] = 'Die Stadt liegt außerhalb des Liefergebiets.';

             return;
          }*/


         if (!$this->address_form->submit())
         {
            $this->errors[] = $this->trans('Please fix the error below.', [], 'Shop.Notifications.Error');
         }
         else
         {
            if ($id_address)
            {
               $this->success[] = $this->trans('Address successfully updated!', [], 'Shop.Notifications.Success');
            }
            else
            {
               $this->success[] = $this->trans('Address successfully added!', [], 'Shop.Notifications.Success');
            }

            $this->should_redirect = true;
         }

         return;
      }

      // There is no id_adress, no need to continue
      if (!$id_address)
      {
         return;
      }

      if (Tools::getValue('delete'))
      {
         $ok = $this->makeAddressPersister()->delete(
            new Address($id_address, $this->context->language->id),
            Tools::getValue('token')
         );
         if ($ok)
         {
            $this->success[] = $this->trans('Address successfully deleted!', [], 'Shop.Notifications.Success');
            $this->should_redirect = true;
         }
         else
         {
            $this->errors[] = $this->trans('Could not delete address.', [], 'Shop.Notifications.Error');
         }
      }
      else
      {
         $this->context->smarty->assign('editing', true);
      }
   }


   private function checkPostcodenCity($field, $value)
   {
      if (empty($field) || empty($value)): return; endif;

      $sql = new DbQuery();
      $sql->select('*');
      $sql->from('postalcode_city');
      $sql->where($field . '="' . $value . '"');

      return Db::getInstance()->getRow($sql);
   }

   private function getArea()
   {
      $txt = " Wir liefern nur in diese PLZ-Bereiche:<br><ul>";
      $sql = new DbQuery();
      $sql->select('*');
      $sql->from('postalcode_city');
      $sql->orderBy('postalCode');
      $rs = Db::getInstance()->executeS($sql);

      foreach ($rs as $area){

         $txt.="<li>".$area['postalCode']."</li>";
      }
      $txt .= "</ul>";
      return $txt;
   }

}