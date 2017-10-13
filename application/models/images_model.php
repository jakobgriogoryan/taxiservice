<?php

class images_model extends CI_Model
{
    protected $table = 'cars_images';

    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function getById($id)
    {
        $this->db->select('cars.*,' . $this->table . '.name, ' . $this->table . '.id as image_id, ' . $this->table . '.main,' . $this->table . '.car_id');
        $this->db->from($this->table)->join('cars', 'cars.id = ' . $this->table . '.car_id');
        $this->db->where(['cars.id' => $id]);
        $query = $this->db->get();
        return $query->result();
    }

    public function getMainImage($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(['car_id' => $id]);
        $this->db->where(['main' => 1]);
        $query = $this->db->get();
        return $query->result();
    }

    public function edit($data, $id, $where = null)
    {
        if ($where) {
            $this->db->where($where, $id);
        } else {
            $this->db->where('car_id', $id);
        }
        return $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->delete($this->table, array('id' => $id));
    }

}