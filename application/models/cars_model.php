<?php
class Cars_model extends CI_Model{

    protected $table = 'cars';

    public function add($data){
        $this->db->insert($this->table,$data);

    }

    public function selectAll(){
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(['id' => $id]);
        $query = $this->db->get();
        return $query->result();
    }

    public function edit($data,$id){
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete($id){
        $this->db->delete($this->table, array('id' => $id));
    }
}