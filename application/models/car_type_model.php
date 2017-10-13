<?php

class Car_type_model extends CI_Model
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
    public function getTypesByString($id){
        $data = $this->getById($id);
        $car_types = '';
        foreach ($data as $car_type) {
            $car_types = " isotope-filter".$car_type->order_type_id;
        }

        return $car_types;
    }

    public function delete($id)
    {
        $this->db->delete($this->table, array('car_id' => $id));
    }
}