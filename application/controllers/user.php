<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    private $view_data = array();

    public function __constructs() {
        parent::__construct();
    }

    /**
     * Load this function when visit mycrud.local
     * the parameter in the bracket is refer to any files in view.
     */
    public function index() {
        $this->load->view('users_login');
    }

    /**
     * Insert a new data into table users in the database
     */
    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->model('Users');
        $data['users'] = '$id';

        $this->form_validation->set_rules('firstname', 'First name', 'required|alpha');
        $this->form_validation->set_rules('lastname', 'Last name', 'required|alpha');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('mobile_no', 'Mobile no.', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|alpha_numeric');
        $this->form_validation->set_rules('datestart', 'datestart', 'required');
        $this->form_validation->set_rules('status', 'status');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('users_form');
        } else {

            $users = new Users();
            $users->firstname = $this->input->post('firstname');
            $users->lastname = $this->input->post('lastname');
            $users->address = $this->input->post('address');
            $users->mobile_no = $this->input->post('mobile_no');
            $users->email = $this->input->post('email');
            $users->username = $this->input->post('username');
            $users->password = $this->input->post('password');
            $users->datestart = $this->input->post('datestart');
            $users->status = $this->input->post('status');

            $users->save();
            redirect('user/getUsers/' . $users->id);
        }
    }

    public function getUsers($id) {

        $this->load->model('Users');
        $data['users'] = $this->Users->getUserByID($id)->row();
        $this->load->view("user_dashboard", $data);
    }

    public function edit($id = FALSE) {

        /**
         * load single user record and assign to $user variable
         */
        $this->load->model('Users');
        $user = new Users();
        $user->load($id);

        if (!isset($user->id)) {
            redirect("user/getUsers/" . $user->id);
        }

        /**
         * check if button submit is triggered
         */
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('firstname', 'First name', 'required|alpha');
            $this->form_validation->set_rules('lastname', 'Last name', 'required|alpha');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('mobile_no', 'Mobile no.', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('datestart', 'datestart', 'required');
            $this->form_validation->set_rules('status', 'status');

            if ($this->form_validation->run() === TRUE) {
                /**
                 * Update the record
                 */
                $user->firstname = $this->input->post('firstname');
                $user->lastname = $this->input->post('lastname');
                $user->address = $this->input->post('address');
                $user->mobile_no = $this->input->post('mobile_no');
                $user->email = $this->input->post('email');
                $user->username = $this->input->post('username');
                $user->password = $this->input->post('password');
                $user->datestart = $this->input->post('datestart');
                
                $user->save();

                $this->session->set_flashdata('message', "Users information updated succesfully");
                redirect("user/getUsers/" . $user->id);
            }
        }

        /**
         * pass $user to view
         */
        $this->view_data['user'] = $user;
        $this->load->view("users_update_form", $this->view_data);
    }

    public function user_login_process() {

        
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('users');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            
            $this->load->view('users_login');
             
        } else {
            $user = $this->users->check_credential($this->input->post('username'), $this->input->post('password'));
            if ($user !== FALSE) {
                $sess_array = array(
                    'id' => $user->id,
                    'username' => $user->username
                );
                $this->session->set_userdata('logged_in', $sess_array);
                redirect('user/getUsers/' . $user->id);
            } else {
                //show invalid username/password
                $this->session->set_flashdata('message', "Wrong username or password");
                redirect('user');
            }
        }
    }

    public function user_dashboard() {
        //get session data
        $logged_in = $this->session->userdata('logged_in');

        //check if session data is not exist/user is not log in. redirect them to login page
        if ($logged_in === FALSE) {
            redirect('user');
        }

        //your rest of code here
    }

// Logout from user page
    public function logout() {

        // Removing session data
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $this->session->set_flashdata('message', "Sucessfully Logout");
        redirect("user");
    }

}

?>