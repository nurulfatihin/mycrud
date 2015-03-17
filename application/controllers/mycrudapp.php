<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mycrudapp extends CI_Controller {
    /**
     * Index page for the mycrudd controller
     */
    public function index(){
        $this->load->model('Users');
        $this->Users->username = 'nurul';
        $this->Users->save();
        echo '<tt><pre>' . var_expost($this->Users, TRUE) . '</tt></pre>';
        
        $this->load->model('Picture');
        $picture = new Picture();
        $picture->users_id = $this->Users->users_id;
        $picture->picture_caption = 'The new me'; 
        $users->save();
        echo '<tt><pre>' . var_expost($this->$picture, TRUE) . '</tt></pre>';
        
        $this->load->view('mycrudapps') ;
    }
}