<?php

class car_type_model extends CI_Model
{
    protected $table = 'car_type';

    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(['car_id' => $id]);
        $query = $this->db->get();
        return $query->result();
    }
    public function delete($id)
    {
        $this->db->delete($this->table, array('car_id' => $id));
    }
}