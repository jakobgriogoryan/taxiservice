<?php
class Home extends  CI_Controller{

    public function index(){
        $this->load->template('home');
    }

    public function cars(){
        $this->load->template('cars');
    }

}