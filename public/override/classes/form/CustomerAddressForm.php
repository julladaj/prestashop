<?php


class CustomerAddressForm extends CustomerAddressFormCore
{


   public function validate()
   {
      parent::validate();
      $is_valid = true;

      if (($postcode = $this->getField('postcode')))
      {
         if (!$this->checkPostcodenCity('postalCode', $postcode->getValue()))
         {
            $postcode->addError('Die Postleitzahl ist außerhalb des Liefergebiets.'. $this->getArea());
            $is_valid = false;
         }
      }

      return  $is_valid && parent::validate();
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