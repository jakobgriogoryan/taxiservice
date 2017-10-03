<?php

class Roles_model extends CI_Model {
    protected $table = 'admins';

    public function registration($data){

        $this->db->insert('admins', $data);
    }

    public function get_data(array $select = ['*'], array $where){
        return $this->db
            ->select($select)
            ->where($where)
            ->get($this->table);
    }
}