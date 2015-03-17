<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mycrudapp extends CI_Controller {
    /**
     * Index page for the mycrudd controller
     */
    public function index(){
        $this->load->view('mycrudapps') ;
    }
}