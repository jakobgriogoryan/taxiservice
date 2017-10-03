<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller{

    public function index(){
        $this->load->template('admin/admins/index');
    }

    public function create(){

        $this->load->template('admin/admins/create');
    }

}