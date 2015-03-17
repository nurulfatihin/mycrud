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
     * Users unifying reference
     * @var int
     */
    public $admin_id;
   
   /**
    * Users username
    * @var varchar 
    */
   public $firstname;
   
   /**
    * Users username
    * @var varchar 
    */
   public $lastname;
   
   /**
    * Users username
    * @var varchar 
    */
   public $address;
   
   /**
    * Users username
    * @var varchar 
    */
   public $mobile_no;
   
   /**
    * Users username
    * @var varchar 
    */
   public $home_no;
   
   /**
    * Users username
    * @var varchar 
    */
   public $email;
   
   /**
    * Users username
    * @var varchar 
    */
   public $username;
   
   /**
    * Users username
    * @var varchar 
    */
   public $password;
   
   /**
    * Users username
    * @var varchar 
    */
   public $datestart;
   
   /**
    * Users username
    * @var varchar 
    */
   public $status;
   
   /**
    * Users username
    * @var varchar 
    */
   public $modified;
   
   /**
    * Users username
    * @var varchar 
    */
   public $remarks;
   
   /**
    * Users username
    * @var varchar 
    */
   public $picture;
   
}

