<?php
class Services extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $session = $this->session->all_userdata();
        if(!isset($session['email'])){
            redirect(base_url().'admin/auth');
        }
    }

    public function index(){

        $this->load->model('services_model');
    }
}