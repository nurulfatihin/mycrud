<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mycrudapp extends CI_Controller {

    //private $admin;
    //private $users;

    /**
     * Index page for the mycrudd controller
     */
    public function index(){
       /**$this->load->model('Users');
        * $this->Users->admin_id = '1';
        
        *$this->Users->firstname = 'Mohd';
        *$this->Users->lastname = 'Sahid';
        *$this->Users->username = 'sahid';
        *$this->Users->address = 'jalan setia jaya';
        *$this->Users->mobile_no = '102-3074774';
        *$this->Users->email = 'nurul@yahoo.com';
        *$this->Users->password = '51mohd';
        *$this->Users->datestart = '2013-09-15';
        *$this->Users->status = 'active';
        *$this->Users->save();
        *echo '<tt><pre>' . var_export($this->Users, TRUE) . '</tt></pre>';
        *
        *$this->load->model('Admin');
        *$this->Admin->admin_name = 'Jennifer';
        *$this->Admin->admin_username = 'jen';
        *$this->Admin->admin_password = '000000';       
        *$this->Admin->save();
        *echo '<tt><pre>'. var_export($this->admin, TRUE).'</tt></pre>';
        *
        *$this->load->view('mycrudapps') ;
         * 
         */
        $data = array();
        
        $this->load->model('Users');
        $users = new Users();
        $users->load(1);
        $data['users'] = $users;
        
        $this->load->model('Admin');
        $admin = new Admin();
        $admin->load(1);
        $data['admin'] = $admin;
        
        $this->load->view('mycrudapps');
        $this->load->view('mycrudapp', $data);
        
    }
}