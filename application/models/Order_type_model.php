<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_type_model extends CI_Model
{
    protected $table = 'order_type';

    public $urls = array(
        'fromAirport',
        'toTheAirport',
        'toTheWedding',
        'aroundTown'
    );

    public function __construct()
    {
        parent::__construct();
    }

    public function selectAll()
    {
        $this->db->select("*");
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }

    public function edit($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(array('id' => $id));
        $query = $this->db->get();
        return $query->result();
    }

    public function getByUrl($url)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(array('url' => $url));
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getByCarId($id){
        $this->db->select('cars.id,cars.name,cars.name_en');
        $this->db->from('cars');
        $this->db->join('car_type','car_type.car_id = cars.id');
        $this->db->where('order_type_id',$id);
        $query = $this->db->get();
        return $query->result();
    }

}