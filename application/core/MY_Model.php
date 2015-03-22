<?php

class MY_Model extends CI_Model {

    const DB_TABLE = 'abstract';
    const DB_TABLE_PK = 'abstract';

    /**
     * Create record.
     */
    private function insert()
    {
        $this->db->insert($this::DB_TABLE, $this);
        $this->{$this::DB_TABLE_PK} = $this->db->insert_id();
    }

    /**
<<<<<<< HEAD
     * Update record
     */
    private function update() {
=======
     * Update record.
     */
    private function update()
    {
>>>>>>> e524837cb8ed96fa3ced288ad3af750fe6f7bf9f
        $this->db->update($this::DB_TABLE, $this, array($this::DB_TABLE_PK => $this->{$this::DB_TABLE_PK}));
    }

    /**
     * Populate from an array or standard class.
     * @param mixed $row
     */
<<<<<<< HEAD
    public function populate($row) {
=======
    public function populate($row)
    {
>>>>>>> e524837cb8ed96fa3ced288ad3af750fe6f7bf9f
        foreach ($row as $key => $value) {
            $this->$key = $value;
        }
    }

    /**
<<<<<<< HEAD
     * Load from the database
=======
     * Load from the database.
>>>>>>> e524837cb8ed96fa3ced288ad3af750fe6f7bf9f
     * @param int $id
     */
    public function load($id)
    {
        $query = $this->db->get_where($this::DB_TABLE, array(
            $this::DB_TABLE_PK => $id,
        ));
        $this->populate($query->row());
    }

    /**
<<<<<<< HEAD
     * Delete current record
     */
    public function delete() {
=======
     * Delete the current record.
     */
    public function delete()
    {
>>>>>>> e524837cb8ed96fa3ced288ad3af750fe6f7bf9f
        $this->db->delete($this::DB_TABLE, array(
            $this::DB_TABLE_PK => $this->{$this::DB_TABLE_PK},
        ));
        unset($this->{$this::DB_TABLE_PK});
    }

    /**
     * Save the record.
     */
    public function save()
    {
        if (isset($this->{$this::DB_TABLE_PK})) {
            $this->update();
        } else {
            $this->insert();
        }
    }

    /**
     * Get an array of Models with an optional limit, offset.
     * 
     * @param int $limit Optional.
     * @param int $offset Optional; if set, requires $limit.
     * @return array Models populated by database, keyed by PK.
     */
<<<<<<< HEAD
    public function get($limit = 0, $offset = 0) {
=======
    public function get($limit = 0, $offset = 0)
    {
>>>>>>> e524837cb8ed96fa3ced288ad3af750fe6f7bf9f
        if ($limit) {
            $query = $this->db->get($this::DB_TABLE, $limit, $offset);
        } else {
            $query = $this->db->get($this::DB_TABLE);
        }
        $ret_val = array();
        $class = get_class($this);
        foreach ($query->result() as $row) {
            $model = new $class;
            $model->populate($row);
            $ret_val[$row->{$this::DB_TABLE_PK}] = $model;
        }
        return $ret_val;
    }

}
