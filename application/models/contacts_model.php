<?php

class contacts_model extends CI_Model
{
    protected $table = 'contacts';

    public function index($data)
    {
        $this->db->insert($this->table, $data);
    }

}