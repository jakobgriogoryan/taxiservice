<?php
class Home extends  CI_Controller{

    protected $language;
    public function __construct()
    {
        parent::__construct();
        $language =& $this->config->config['language'];
        $this->language = $language;
        $this->load->model('order_type_model');
    }

    public function index(){
        $this->load->template('home');
    }

    public function cars(){

        $this->load->template('cars');
    }

    public function booking($data){

        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('location', 'Location ', 'required');
            $this->form_validation->set_rules('where_to', 'Where', 'required|integer');
            $this->form_validation->set_rules('phone', 'Phone', 'required|integer');
            $this->form_validation->set_rules('email', 'Email', 'required|integer');
            $this->form_validation->set_rules('datetime', 'Date', 'required|integer');
            $this->form_validation->set_rules('status', 'Status', 'required|integer');
            if ($this->form_validation->run() !== FALSE){

                $data = array(
                    'name' => $this->  input-> post('name'),
                    'location' => $this->input->post('location'),
                    'where_to' => $this->input->post('where_to'),
                    'phone' =>  $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'datetime' => $this->input->post('datetime'),
                    'status' => $this->input->post('status')
                );
                $this->load->model('booking_model');
                $booking_id = $this->booking_model->booking($data);

                $this->load->template('booking');
                redirect('/admin/booking');
            }
        }
    }

    public function services($page){
        $service = $this->order_type_model->getByUrl($page);

        $this->load->template('services',['service' => $service]);
    }

    public function contacts(){
        $this->load->template('contacts');
    }

}