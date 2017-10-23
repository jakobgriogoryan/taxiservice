<?php

class Orders_model extends CI_Model
{

    protected $table = 'orders';

    public $status = [1 => 'Запрошен', 'Одобрен', 'Отменен'];

    public function selectAll()
    {
        $this->db->select($this->table . '.*, order_type.name as order_type');
        $this->db->from($this->table)->join('order_type', 'order_type.id = ' . $this->table . '.order_type_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function unwatched_orders(){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('read',0);
        $query = $this->db->get();
        return $query->result();
    }

    public function updateStatus($id, $status){
        $this->db->where('id',$id);
        return $this->db->update($this->table,array(
            'status' => $status,
            'read' => 1
        ));
    }

}