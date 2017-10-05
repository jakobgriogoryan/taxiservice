<?php
class Home extends  CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $session = $this->session->all_userdata();
        if(!isset($session['email'])){
            redirect(base_url().'admin/auth');
        }
    }

    public function index(){
        $this->load->model('cars_model');
        $cars = $this->cars_model->selectAll();


        $this->load->template('admin/home',['cars'=> $cars]);

    }


}