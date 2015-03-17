<?php

class Users extends MY_Model {
    
    const DB_TABLE = 'users';
    const DB_TABLE_PK ='id';

    /**
    * Users uniques identifier
    * @var int 
    */
   public $id ;
   
   /**
    * Users username
    * @var varchar 
    */
   public $username;
   
}

