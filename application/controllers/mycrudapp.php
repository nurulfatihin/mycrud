<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mycrudapp extends CI_Controller {

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

    public function edit($id)
    {
        echo $id;
        $users = $this->Users->getUsersID($id);
        if (!$users) {
            redirect("users");
        }
        if (@$_POST['update_user']) {
            $userdata = $_POST['users'];
            $this->users->update($userdata, $id);
            $this->session->set_flashdata('message', "Users updated succesfully");
            redirect("users");
        }
        $data['users'] = $users;
        $this->load->view("usersUpdate_byAdmin", $data);
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->user->delete($id);
        $this->session->set_flashdata('message', "Users deleted succesfully");
        redirect("users");
    }

}

?>
