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
        $this->load->model('admins');
        $this->load->model('users');
    }


    public function getUsers() {

        $this->load->model('users');
        $data['users'] = $this->Users->get();
        $this->load->view("admin_dashboard", $data);
    }

    public function edit($id = FALSE) {

        /**
         * load single user record and assign to $user variable
         */
        $user = new Users();
        $user->load($id);

        if (!isset($user->id)) {
            redirect("admin/getUsers");
        }

        /**
         * check if button submit is triggered
         */
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('firstname', 'First name', 'required');
            $this->form_validation->set_rules('lastname', 'Last name', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('mobile_no', 'Mobile Phone No.', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('datestart', 'datestart', 'required');

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
        $user = new Users();
        $user->load($id);
        $user->delete();

        $this->session->set_flashdata('message', "Users infromation is successfully deleted");
        redirect("admin/getUsers");
    }

}
?>