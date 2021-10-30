<?php

class AuthController extends AuthControllerCore
{

   public function initContent()
   {
      $should_redirect = false;

      if (Tools::isSubmit('submitCreate') || Tools::isSubmit('create_account'))
      {
         $register_form = $this
            ->makeCustomerForm()
            ->setGuestAllowed(false)
            ->fillWith(Tools::getAllValues());

         if (Tools::isSubmit('submitCreate'))
         {
            $hookResult = array_reduce(
               Hook::exec('actionSubmitAccountBefore', [], null, true),
               function($carry, $item){
                  return $carry && $item;
               },
               true
            );
            if ($hookResult && $register_form->submit())
            {

               if(Tools::getValue('controller')=='authentication' )
               {


                  # Custom form register
                  $customer = new Customer();
                  $customer = $customer->getByEmail($register_form->getCustomer()->email);

                  $address = new Address(
                     null,
                     $this->context->language->id
                  );

                  $the_address1 = (Tools::getValue('address1'));

                  $postcode_city = explode("_", Tools::getValue('postalcode'));
                  $the_postcode = $postcode_city[0];
                  $the_city = $postcode_city[1];


                  $address->id_country = (int)Tools::getCountry();
                  $address->address1 = $the_address1;
                  $address->postcode = $the_postcode;
                  $address->city = $the_city;

                  $address->firstname = $customer->firstname;
                  $address->lastname = $customer->lastname;
                  $address->id_customer = (int)$customer->id;
                  $address->id_state = 0;
                  $address->alias = $this->trans('My Address', [], 'Shop.Theme.Checkout');


                  if ($address->save())
                  {
                     $should_redirect = true;
                  }
                  else
                  {
                     $customer->delete();
                     $this->errors[] = $this->trans('Could not update your information, please check your data.', [], 'Shop.Notifications.Error');
                     $this->redirectWithNotifications($this->getCurrentURL());
                  }
               }else{
                  $should_redirect = true;
               }
            }
         }

         $this->context->smarty->assign([
            'register_form'           => $register_form->getProxy(),
            'hook_create_account_top' => Hook::exec('displayCustomerAccountFormTop'),
         ]);
         $this->setTemplate('customer/registration');
      }
      else
      {
         $login_form = $this->makeLoginForm()->fillWith(
            Tools::getAllValues()
         );

         if (Tools::isSubmit('submitLogin'))
         {
            if ($login_form->submit())
            {
               $should_redirect = true;
            }
         }

         $this->context->smarty->assign([
            'login_form' => $login_form->getProxy(),
         ]);
         $this->setTemplate('customer/authentication');
      }

      parent::initContent();

      if ($should_redirect && !$this->ajax)
      {
         $back = urldecode(Tools::getValue('back'));

         if (Tools::urlBelongsToShop($back))
         {
            // Checks to see if "back" is a fully qualified
            // URL that is on OUR domain, with the right protocol
            return $this->redirectWithNotifications($back);
         }

         // Well we're not redirecting to a URL,
         // so...
         if ($this->authRedirection)
         {
            // We may need to go there if defined
            return $this->redirectWithNotifications($this->authRedirection);
         }

         // go home
         return $this->redirectWithNotifications(__PS_BASE_URI__);
      }
   }

}
