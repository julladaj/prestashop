<?php

class CustomerForm extends CustomerFormCore
{


   public function validate()
   {

      $is_valid = true;
      if (!empty(Tools::getValue('address1')))
      {
         $this->setTmp('tmp_address1', Tools::getValue('address1'));
      }
      if (!empty(Tools::getValue('postalcode')))
      {
         $postcode_city = explode("_", Tools::getValue('postalcode'));

         $the_postcode = strval($postcode_city[0]);
         $the_city = strval($postcode_city[1]);
         $this->setTmp('tmp_postcode', $the_postcode);
         $this->setTmp('tmp_city', $the_city);
      }

      return $is_valid && parent::validate();
   }

   private function setTmp($varName, $value)
   {
      setcookie($varName, $value, time() + 1800);
   }


}


