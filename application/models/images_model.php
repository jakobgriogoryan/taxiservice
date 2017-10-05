<?php

class images_model extends CI_Model
{
    protected $table= 'cars_images';

    public function image($dataimage){
        $this->db->insert($this->table,$dataImage);

    }

}