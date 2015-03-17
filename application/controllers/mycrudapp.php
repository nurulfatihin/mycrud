<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mycrudapp extends CI_Controller {

    private $pictures;
    private $users;

    /**
     * Index page for the mycrudd controller
     */
    public function index(){
        $this->load->model('Users');
        $this->Users->username = 'nurul';
        $this->Users->save();
        echo '<tt><pre>' . var_export($this->Users, TRUE) . '</tt></pre>';
        
        $this->load->model('Pictures');
        $this->Pictures->caption = 'aku dah pening';
        $this->Pictures->save();
        echo '<tt><pre>'. var_export($this->pictures, TRUE).'</tt></pre>';
        
        $this->load->view('mycrudapps') ;
    }
}