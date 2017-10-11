<?php

class Booking_model extends CI_Model
{
    protected $table = 'orders';

    public function booking($data)
    {

        $this->db->insert($this->table, $data);

    }
}
