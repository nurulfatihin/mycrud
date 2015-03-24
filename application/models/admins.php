<?php
class Admins extends MY_Model {
    
    const DB_TABLE = 'admin';
    const DB_TABLE_PK ='admin_id';
    //const DB_TABLE_PK ='admin_name';
    //const DB_TABLE_PK ='admin_username';
    //const DB_TABLE_PK ='admin_password';

    /**
    * Admin uniques identifier
    * @var int 
    */
   public $admin_id ;
   
   /**
    * Admin name
    * @var varchar 
    */
   public $admin_name;
   
   /**
    * Admin username
    * @var varchar 
    */
   public $admin_username;
   
   /**
    * Admin password
    * @var varchar 
    */
   public $admin_password;
   
}

