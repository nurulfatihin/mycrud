<?php

class Pictures extends MY_Model {
    
    const DB_TABLE = 'pictures';
    const DB_TABLE_PK = 'pic_id';

    /**
     * Picture unique identifier
     * @var int
     */
    public $pic_id;
    
    /**
     * Users unifying reference
     * @var int
     */
    //public $id;
    
    /**
     * Picture's uploaded picture
     * Path to the file
     * @var longblob(string)
     */
    public $pic_pic;
    
    /**
     * Picture's caption
     * @var longtext 
     */
    public $caption;
            
      
}
