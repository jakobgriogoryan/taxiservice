<?php

class contacts_model extends CI_Model
{
    protected $table = 'contacts';

    public function selectAll(){
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        return  $query -> result();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function unwatched_contacts(){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('read',0);
        $query = $this->db->get();
        return $query->result();
    }

    public function watchAll(){
        return $this->db->update($this->table,array('read' => 1));
    }

}