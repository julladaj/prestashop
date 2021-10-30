<?php
class CustomerFormatter extends CustomerFormatterCore
{

   public $translator;
   public $language;
   public function __construct(
         $translator,
         $language
    ) {

      parent::__construct($translator,$language);
        $this->translator = $translator;
        $this->language = $language;
    }

   public function getFormat()
   {

   $format =   parent::getFormat();

      $pcs = $this->getPostalcode();
      $postalcode_type = 'select';
      if (!sizeof($pcs))
      {
         $postalcode_type = 'text';
      }
      if (Tools::getValue('controller') == 'authentication' )
      {


         $format['postalcode'] = (new FormField())
            ->setName('postalcode')
            ->setType('select')
            ->setLabel(
               $this->translator->trans(
                  'Postleitzahl Lieferadresse',
                  [],
                  'Shop.Forms.Labels'
               )
            )
            ->setRequired(true)
            ->addAvailableValue('comment',"ACHTUNG: Lieferungen sind nur in die genannten Postleitzahlengebiete möglich.");
         if ($postalcode_type == 'select')
         {
            foreach ($pcs as $postcode)
            {
               $format['postalcode']->addAvailableValue(
                  $postcode['postalCode'] . '_' . $postcode['cityName'],
                  $postcode['postalCode'] . ' - ' . html_entity_decode($postcode['cityName'])
               );
            }
         }
      }


      if(Tools::getValue('controller') == 'authentication' )
      {
         $format['address1'] = (new FormField())
            ->setName('address1')
            ->setLabel("Straße Lieferadresse")
            ->setRequired(true);
      }



      // ToDo, replace the hook exec with HookFinder when the associated PR will be merged
      $additionalCustomerFormFields = Hook::exec('additionalCustomerFormFields', ['fields' => &$format], null, true);

      if (is_array($additionalCustomerFormFields))
      {
         foreach ($additionalCustomerFormFields as $moduleName => $additionnalFormFields)
         {
            if (!is_array($additionnalFormFields))
            {
               continue;
            }

            foreach ($additionnalFormFields as $formField)
            {
               $formField->moduleName = $moduleName;
               $format[$moduleName . '_' . $formField->getName()] = $formField;
            }
         }
      }

      // TODO: TVA etc.?

      return $this->addConstraints($format);
   }

   private function getPostalcode()
   {
      $sql = new DbQuery();
      $sql->select('*');
      $sql->from('postalcode_city');

      return Db::getInstance()->executeS($sql);
   }

   private function addConstraints(array $format)
   {
      $constraints = Customer::$definition['fields'];

      foreach ($format as $field)
      {
         if (!empty($constraints[$field->getName()]['validate']))
         {
            $field->addConstraint(
               $constraints[$field->getName()]['validate']
            );
         }
      }

      return $format;
   }
}
