<?php
class Message_model extends CI_Model{

    protected $table = 'contacts';

    public function index(){
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        return  $query -> result();
    }

    public function delete($id)
    {
        $this->db->delete($this->table, array('id' => $id));
    }

}