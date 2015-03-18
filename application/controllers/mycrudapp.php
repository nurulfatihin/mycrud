<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mycrudapp extends CI_Controller {
    
    public function create()
    {
	$this->load->helper('form');
	$this->load->library('form_validation');

	$data['id'] = '$id';

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
		$data = $this->Users->set_users();
		$this->load->view('user_form_success');
	}
    }
}
?>
