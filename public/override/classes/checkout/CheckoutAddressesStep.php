<?php

use Symfony\Component\Translation\TranslatorInterface;


class CheckoutAddressesStep extends CheckoutAddressesStepCore
{

   private $addressForm;

   public function __construct(
      $context,
      $translator,
      $addressForm
   )
   {
      parent::__construct($context, $translator, $addressForm);
      $this->addressForm = $addressForm;

   }

   private function getTmp($varName)
   {
      if (isset($_COOKIE[$varName]))
      {
         return $_COOKIE[$varName];
      }
      else
      {
         return '';
      }
   }

}