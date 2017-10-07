<?php

class images_model extends CI_Model
{
    protected $table= 'cars_images';

    public function add($data){
        $this->db->insert($this->table,$data);
        return $this->db->insert_id();
    }

    public function getById($id){
        $this->db->select('cars.*,'.$this->table.'.name, '.$this->table.'.id as image_id');
        $this->db->from($this->table)->join('cars', 'cars.id = '.$this->table.'.car_id');
        $this->db->where(['cars.id' => $id]);
        $query = $this->db->get();
        return $query->result();
    }

    public function delete($id){
        $this->db->delete($this->table, array('id' => $id));
    }

}