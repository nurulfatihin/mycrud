<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    private $view_data = array();

    public function __constructs() {
        parent::__construct();
    }

    /**
     * Load this function when visit mycrud.local
     * the parameter in the bracket is refer to any files in view.
     */
    public function index() {
        $this->load->view('admin_login');
    }

    /**
     * search function

      public function searchUser() {
      $data['query'] = $this->Users->getSearch();
      $this->load->view('users', $data);
      } */
    public function getUsers() {

        $this->load->model('Users');
        $data['users'] = $this->Users->get();
        $this->load->view("admin_dashboard", $data);
    }
    
    function alpha_dash_space($str)
{
    return ( ! preg_match("/^([-a-z_ ])+$/i", $str)) ? FALSE : TRUE;
} 

    public function edit($id = FALSE) {

        /**
         * load single user record and assign to $user variable
         */
        $this->load->model('Users');
        $user = new Users();
        $user->load($id);

        if (!isset($user->id)) {
            redirect("admin/getUsers");
        }

        /**
         * check if button submit is triggered
         */
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('admin_id', 'Admin ID', 'required');
            $this->form_validation->set_rules('firstname', 'First name', 'required|callback__alpha_dash_space');
            $this->form_validation->set_rules('lastname', 'Last name', 'required|callback__alpha_dash_space');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('mobile_no', 'Mobile no.', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('datestart', 'datestart', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');

            if ($this->form_validation->run() === TRUE) {
                /**
                 * Update the record
                 */
                $user->admin_id = $this->input->post('admin_id');
                $user->firstname = $this->input->post('firstname');
                $user->lastname = $this->input->post('lastname');
                $user->address = $this->input->post('address');
                $user->mobile_no = $this->input->post('mobile_no');
                $user->email = $this->input->post('email');
                $user->username = $this->input->post('username');
                $user->password = $this->input->post('password');
                $user->datestart = $this->input->post('datestart');
                $user->status = $this->input->post('status');
                $user->save();

                $this->session->set_flashdata('message', "Users information updated succesfully");
                redirect("admin/getUsers");
            }
        }

        /**
         * pass $user to view
         */
        $this->view_data['user'] = $user;
        $this->load->view("userupdate_admin", $this->view_data);
    }

    public function delete($id = FALSE) {
        /**
         * load user
         */
        $this->load->model('Users');
        $user = new Users();
        $user->load($id);
        $user->delete();

        $this->session->set_flashdata('message', "Users infromation is successfully deleted");
        redirect("admin/getUsers");
    }

    public function admin_login_process() {

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('admins');
        $this->form_validation->set_rules('admin_username', 'Username', 'required');
        $this->form_validation->set_rules('admin_password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin_login');
        } else {
            $admin = $this->admins->check_credential($this->input->post('admin_username'), $this->input->post('admin_password'));
            if ($admin !== FALSE) {
                $sess_array = array(
                    'admin_id' => $admin->admin_id,
                    'admin_username' => $admin->admin_username
                );
                $this->session->set_userdata('logged_in', $sess_array);
                redirect('admin/getUsers');
            } else {
                //show invalid username/password
                $this->session->set_flashdata('message', "Wrong username or password");
                redirect('admin');
            }
        }
    }

    public function admin_dashboard() {
        //get session data
        $logged_in = $this->session->userdata('logged_in');

        //check if session data is not exist/admin is not log in. redirect them to login page
        if ($logged_in == FALSE) {
            redirect('admin');
        }
    }

    // Logout from user page
    public function logout() {

        // Removing session data
        $sess_array = array(
            'admin_username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $this->session->set_flashdata('message', "Sucessfully Logout");
        redirect("admin");
        //$data['message_display'] = 'Successfully Logout';
        //$this->load->view('admin_login', $data);
    }

}

?>