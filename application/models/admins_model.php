<?php

class Admins_model extends CI_Model {
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

    public function selectAll(){
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }

    public function edit($data,$id){
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(['id' => $id]);
        $query = $this->db->get();
        return $query->result();
    }

    public function delete($id){
        $this->db->delete($this->table, array('id' => $id));
    }
}