<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mycrudapp extends CI_Controller {

    private $view_data = array();

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Load this function when visit mycrud.local
     * the parameter in the bracket is refer to any files in view.
     */
    public function index()
    {
        $this->load->view('users_form');
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

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('users_form');
        } else {
            $this->Users->set_users();
            $this->load->view('users_form_success');
        }
    }

    public function getUsers()
    {

        $this->load->model('users');
        $data['records'] = $this->users->getAllUsers();
        $this->load->view("admin_dashboard", $data);
    }

    public function edit($id = FALSE)
    {

        /**
         * load single user record and assign to $user variable
         */
        $user = new Users();
        $user->load($id);


        if (!isset($user->id)) {
            redirect("mycrudapp/getUsers");
        }

        /**
         * check if button submit is triggered
         */
        if (isset($_POST['submit'])) {

            $this->form_validation->set_rules('firstname', 'First name', 'required');
            $this->form_validation->set_rules('lastname', 'Last name', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('mobile_no', 'Mobile no.', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', '');
            $this->form_validation->set_rules('datestart', 'atestart', 'required');
            if ($this->form_validation->run() === TRUE) {
                /**
                 * Update record
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

                $this->session->set_flashdata('message', "Users updated succesfully");
                redirect("mycrudapp/getUsers");
            }
        }


        /**
         * pass $user to view
         */
        $this->view_data['user'] = $user;
        $this->load->view("usersUpdate_byAdmin", $this->view_data);
    }

    public function delete($id = FALSE)
    {
        /**
         * load user
         */
        $user = new Users();
        $user->load($id);
        $user->delete();
        
        $this->session->set_flashdata('message', "Users deleted succesfully");
        redirect("mycrudapp/getUsers");
    }

}

?>
