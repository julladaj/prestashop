<?php


/**
 * Module: Manage a list of postal codes
 * Author: Data Horizon
 */

if (!defined('_PS_VERSION_'))
{
   exit;
}

require('classes/managepostcodeclass.php');

class Managepostcode extends Module
{

   public $databaseName;

   public function __construct()
   {
      $this->name = 'managepostcode';
      $this->tab = 'administration';
      $this->version = '1.0.1';
      $this->author = 'Data Horizon';
      $this->need_instance = 0;
      $this->ps_versions_compliancy = [
         'min' => '1.6',
         'max' => _PS_VERSION_,
      ];
      $this->databaseName = _DB_PREFIX_ . 'postalcode_city';
      $this->template_dir = '../../../../modules/' . $this->name . '/views/templates/admin/';
      $this->is_configurable = true;
      $this->bootstrap = true;
      parent::__construct();
      $this->displayName = $this->l('PLZ Liefergebiete', 'managepostcode');
      $this->description = $this->l('Manage the list of postcode.', 'managepostcode');
      $this->confirmUninstall = $this->l('Are you sure you want to uninstall?', 'managepostcode');

      if (!Configuration::get('managepostcode'))
      {
         $this->warning = $this->l('No name provided.');
      }

   }

   /**
    * @throws PrestaShopDatabaseException
    * @throws PrestaShopException
    */
   public function install()
   {
      if (Shop::isFeatureActive())
      {
         Shop::setContext(Shop::CONTEXT_ALL);
      }

      $sql = 'CREATE TABLE IF NOT EXISTS  `' . $this->databaseName . '` (
               `id` int(11) NOT NULL AUTO_INCREMENT,
               `postalCode` varchar(10) NOT NULL,
               `cityName` varchar(255) NOT NULL,
               `create_date` datetime NOT NULL,
               PRIMARY KEY (`id`)
               ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ';
      Db::getInstance()->execute($sql);



      if (!parent::install() ||
         !$this->installTab('SELL', 'AdminManagePostcode', $this->displayName) ||
         !$this->registerHook('backOfficeHeader')
      )
      {
         return false;
      }

      /*$sql_import = "INSERT INTO `' . $this->databaseName . '` (`id`, `postalCode`, `cityName`, `create_date`) VALUES
                     (1, '91090', 'Effeltrich', '2021-06-01 13:09:10'),
                     (2, '91099', 'Poxdorf', '2021-06-01 13:09:23'),
                     (3, '91094', 'Langensendelbach', '2021-06-02 09:05:11')";

      Db::getInstance()->execute($sql_import);*/

      return true;
   }


   /**
    * @return bool
    */
   public function uninstall()
   {

      if (!parent::uninstall())
      {
         return false;
      }

      $sql = 'DROP TABLE IF EXISTS `' . $this->databaseName . '`';
      Db::getInstance()->execute($sql);

      return true;
   }

   /**
    * @return bool
    */
   public function reset()
   {
      return true;
   }


   public function installTab($parent, $class_name, $name)
   {
      $tab = new Tab();
      $tab->id_parent = (int)Tab::getIdFromClassName($parent);
      $tab->name = [];
      foreach (Language::getLanguages(true) as $lang)
      {
         $tab->name[$lang['id_lang']] = $name;
      }
      $tab->class_name = $class_name;
      $tab->module = $this->name;
      $tab->active = 1;

      return $tab->add();
   }


   public static function getPostcode()
   {
      $result = new Managepostcodeclass();
      return $result->getAll();

   }




}
