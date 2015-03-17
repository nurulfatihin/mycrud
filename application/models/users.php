<?php

class Users extends MY_Model {
    
    const DB_TABLE = 'users';
    const DB_TABLE_PK ='users_id';

    /**
    * Users uniques identifier
    * @var int 
    */
   public $users_id ;
   
   /**
    * Users username
    * @var varchar 
    */
   public $users_username;
   
}

