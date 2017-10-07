<?php
class Home extends  CI_Controller{

    public function index(){
        $this->load->template('home');
    }

    public function cars(){
        $this->load->template('cars');
    }

    public function booking(){
        $this->load->template('booking');
    }

    public function services(){
        $this->load->template('services');
    }

    public function contacts(){
        $this->load->template('contacts');
    }

}