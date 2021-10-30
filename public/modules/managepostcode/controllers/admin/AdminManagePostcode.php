<?php


class AdminManagePostcodeController extends ModuleAdminController
{
   private  $tmp_params;

   public function __construct()
   {

      $this->all_languages = Language::getLanguages(false);
      $this->context = Context::getContext();
      $this->bootstrap = true;
      $this->module = Module::getInstanceByName('managepostcode');

      $this->tmp_params = [
         'labels' =>
            ['postalcode' => 'Postleitzahl',
             'cityname'   => 'Stadtname',
            ],
         'form'   => [
            'action' => 'submit' . $this->className,
            'submit' => 'Übernehmen',
            'formToken' => Tools::getAdminToken('AdminManagePostcode')
         ],
      ];
      parent::__construct();
   }

   /**
    * @throws SmartyException
    * @throws PrestaShopException
    */
   public function initContent()
   {

      $output = null;
      $postalcode_list = $this->getAll();
      $this->context->smarty->assign('actions', $this->context->link->getAdminLink('AdminManagePostcode'));
      $this->context->smarty->assign('tmp_params', $this->tmp_params);
      $this->context->smarty->assign('postalcode_list', $postalcode_list);

      $this->setTemplate($this->module->template_dir . 'index.tpl');
      parent::initContent();
   }


   public function postProcess()
   {

      if (Tools::isSubmit($this->tmp_params['form']['action']))
      {
         if(Tools::getAdminToken('AdminManagePostcode')!=Tools::getValue(('formToken'))): return; endif;
         $postalCode = pSQL(htmlentities(Tools::getValue('postalCode')));
         $cityName = pSQL(htmlentities(Tools::getValue('cityName')));

         $dataSubmit = ['postalCode' => $postalCode, 'cityName' => $cityName];
         $_POST = '';
         return $this->insert($dataSubmit);
      }
      else if (Tools::isSubmit('deletePostalCode') && Tools::getValue('id'))
      {
         if(Tools::getAdminToken('AdminManagePostcode')!=Tools::getValue(('formDeleteToken'))): return; endif;
         $getId = (int)Tools::getValue('id');
         $this->delete($getId);
      }
      parent::postProcess();
   }


   public function checkEx($value)
   {
      $sql = new DbQuery();
      $sql->select('*');
      $sql->from('postalcode_city');
      $sql->where('postalCode="' . $value['postalCode'] . '" and cityName="' . $value['cityName'] . '"');
      return Db::getInstance()->getRow($sql);
   }

   public function insert($value)
   {
      $value_postalCode = $value['postalCode'];
      $value_cityName = $value['cityName'];
      $db = Db::getInstance();

      if (!$this->checkEx($value) && !empty($value_cityName) && !empty($value_postalCode))
      {
         $dataInsert = [
            'postalCode'  => $value_postalCode,
            'cityName'    => $value_cityName,
            'create_date' => date('Y-m-d H:i:s'),
         ];
         $result = $db->insert(
            'postalcode_city', $dataInsert
         );
         $this->confirmations[] = $this->l("Erfolgreich");
      }
      else
      {
         $this->errors[] = $this->l('Daten existieren');
      }
   }

   public function getAll()
   {
      $sql = new DbQuery();
      $sql->select('*');
      $sql->from('postalcode_city');

      return Db::getInstance()->executeS($sql);
   }

   public  function delete($id)
   {
      $db = \Db::getInstance();
      if( $db->execute('DELETE  FROM `' . _DB_PREFIX_ . 'postalcode_city` WHERE id=' . $id)){
         $this->confirmations[] = $this->l("Erfolgreich löschen");
      }

   }


}