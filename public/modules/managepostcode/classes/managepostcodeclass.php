<?php


class Managepostcodeclass extends ObjectModelCore
{

   public $parameter;

   public static $definition = [
      'table'     => 'postalcode_city',
      'primary'   => 'id',
      'multilang' => false,
      'fields'    => [
         'id'         => ['type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'],
         'postalCode' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true],
         'cityName'   => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true],
      ],
   ];


   public function getAll()
   {
      $sql = new DbQuery();
      $sql->select('*');
      $sql->from('postalcode_city');

      return Db::getInstance()->executeS($sql);
   }


}