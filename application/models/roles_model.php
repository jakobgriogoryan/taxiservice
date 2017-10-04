<?php

class Roles_model extends CI_Model {
    protected $table = 'role';


    public function selectAll(){
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }
}