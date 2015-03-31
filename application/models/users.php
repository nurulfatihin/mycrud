<?php

class Users extends MY_Model {

    const DB_TABLE = 'users';
    const DB_TABLE_PK = 'id';

    /**
     * Users uniques identifier
     * @var int 
     */
    public $id;

    /**
     * Users unifying reference
     * @var int
     */
    public $admin_id;

    /**
     * Users username
     * @var varchar 
     */
    public $firstname;

    /**
     * Users username
     * @var varchar 
     */
    public $lastname;

    /**
     * Users username
     * @var varchar 
     */
    public $address;

    /**
     * Users username
     * @var varchar 
     */
    public $mobile_no;

    /**
     * Users username
     * @var varchar 
     */
    public $email;

    /**
     * Users username
     * @var varchar 
     */
    public $username;

    /**
     * Users username
     * @var varchar 
     */
    public $password;

    /**
     * Users username
     * @var varchar 
     */
    public $datestart;

    /**
     * Users username
     * @var varchar 
     */
    public $status;

    /**
     * Users username
     * @var varchar 
     */
    public $modified;

    

    /**
     * Register and create data
     * @return type
     */
    public function set_users() {
        $this->load->helper('url');
        $slug = url_title($this->input->post('id'), 'dash', TRUE);
        $data = array(
            'id' => $this->input->post('id'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'address' => $this->input->post('address'),
            'mobile_no' => $this->input->post('mobile_no'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'datestart' => $this->input->post('datestart'),
            
        );
        return $this->db->insert('users', $data);
    }

    /**
     * retrieve data from database
     * @return type
     */
    function getAllUsers() {
        $this->load->model("users");
        $data = $this->db->get("users");
        if ($data->num_rows() > 0) {
            return $data->result();
        }
        return array();
    }

    /**
     * display data from selected id
     * @param type $data
     * @return type
     */
    function getUserByID($data) {

        $this->db->where('id', $data);
        $query = $this->db->get('users');
        return $query;
    }

    public function check_credential($username, $password) {
        $query = $this->db->get_where($this::DB_TABLE, array(
            'username' => $username,
            'password' => $password,
        ));
        $result = $query->row();
        if (isset($result->id)) {
            return $result;
        }
        return FALSE;
    }

    /**
     * Search function
    
    function getSearch() {
        $match = $this->input->post('search');
        $this->db->like(‘firstname ’,$match);
        $this->db->or_like(‘lastname ’,$match);
        $this->db->or_like(‘status ’,$match);
        $query = $this->db->get(‘users’);
    } */

}
