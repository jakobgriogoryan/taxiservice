<?php
class Home extends  CI_Controller{

    protected $language;
    public function __construct()
    {
        parent::__construct();
        $language =& $this->config->config['language'];
        $this->language = $language;
        $this->lang->load('main_lang', $language);
    }

    public function index(){
//        print_r($this->lang->line('main_email_missing'));die;
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