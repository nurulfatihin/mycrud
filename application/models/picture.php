<?php

class Picture extends MY_Model {
    
    const DB_TABLE = 'picture';
    const DB_TABLE_PK = 'picture_id';

    /**
     * Picture unique identifier
     * @var int
     */
    public $picture_id;
    
    /**
     * Users unifying reference
     * @var int
     */
    public $users_id;
    
    /**
     * Picture's uploaded picture
     * Path to the file
     * @var longblob(string)
     */
    public $picture_pic;
    
    /**
     * Picture's caption
     * @var longtext 
     */
    public $picture_caption;
            
      
}
