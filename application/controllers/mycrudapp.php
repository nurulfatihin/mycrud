<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mycrudapp extends CI_Controller {
    
    /**
     * Load this function when visit mycrud.local
     * the parameter in the bracket is refer to any files in view.
     */
    public function index() {
        $this->load->view('mycrudapps') ;
        $this->load->model('users');
    }
            
    /**
     * Insert a new data into table users in the database
     */        
    public function create()
    {
	$this->load->helper('form');
	$this->load->library('form_validation');
        
	$data['users'] = '$id';

	$this->form_validation->set_rules('firstname', 'First name', 'required');
	$this->form_validation->set_rules('lastname', 'Last name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('mobile_no', 'Mobile no.', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('datestart', 'atestart', 'required');
        
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('users_form');
		
	}
	else
	{
		$this->Users->set_users();
		$this->load->view('users_form_success');
	}
    }
    
    public function getUsers() {
        
        $this->load->model('users');
        $data['records'] = $this->users->getAllUsers();
        $this->load->view("admin_dashboard",$data);
        
    }
    
    function showUserID() {
        $id = $this->uri->segment(3);
        $data['users'] = $this->users->getAllUsers();
        $data['single_user'] = $this->users->showUserID($id);
        $this->load->view('userUpdate_byAdmin', $data);
    }
    
    public function updateUser() {
        
        $id = $this->input->post('id');
               
        $data = array(
        'firstname'=>$this->input->post('firstname'),
        'lastname'=>$this->input->post('lastname'),
        'address'=>$this->input->post('address'),
        'mobile_no'=>$this->input->post('mobile_no'),
        'email'=>$this->input->post('email'),
        'username'=>$this->input->post('username'),
        'password'=>$this->input->post('password'),
        'datestart'=>$this->input->post('datestart'),
        'status'=>$this->input->post('status'),
        );

    $this->users->updateUser($id, $data);
    $this->showUserID();
    }
}
?>
