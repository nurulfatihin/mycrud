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

    /**
     * Login process
     */
    function check_database($password) {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

        //query the database
        $result = $this->user->login($username, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'admin_id' => $row->id,
                    'username' => $row->username
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

    public function getUsers() {

        $this->load->model('Users');
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
    
   /** public function user_login_process() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin_login');
        } else {
            $data = array(
                'admin_username' => $this->input->post('admin_username'),
                'admin_password' => $this->input->post('admin_password')
            );
            $result = $this->login_database->login($data);
            if ($result == TRUE) {
                $sess_array = array(
                    'admin_username' => $this->input->post('admin_username')
                );
            }$this->session->set_users('logged_in', $sess_array);
            $result = $this->login_database->getUsers($sess_array);
            if ($result != false) {
                $data = array(
                    'firstname' => $result[1]->firstname,
                    'lastname' => $result[0]->lastname,
                    'address' => $result[0]->address,
                    'mobile_no' => $result[0]->mobile_no,
                    'email' => $result[0]->email,
                    'username' => $result[0]->username,
                    'password' => $result[0]->password,
                    'datestart' => $result[0]->datestart,
                    'status' => $result[0]->status,
                );
                redirect('admin');
            } else {
                $data = array(
                    'error_message' => 'Invalid Usernane or Password'
                );
                $this->load->view('admin_login', $data);
            }
        }
    }

    // Logout from user page
    public function logout() {

    // Removing session data
        $sess_array = array(
            'admin_username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('admin_dashboard', $data);
    }*/


}

?>