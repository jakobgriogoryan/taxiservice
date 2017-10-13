<?php

class Home extends CI_Controller
{

    protected $language;

    public function __construct()
    {
        parent::__construct();
        $language =& $this->config->config['language'];
        $this->language = $language;
        $this->load->model('order_type_model');
    }

    public function index()
    {
        $this->load->template('home');
    }

    public function cars()
    {
        $this->load->model('cars_model');
        $cars = $this->cars_model->selectAll();
        $this->load->model('images_model');
        $this->load->model('car_type_model');

        $this->load->template('cars', ['cars' => $cars]);
    }


    public function booking()
    {

        $this->load->model('booking_model');

        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('order_type_id', 'Order type', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('where_to', 'Destination item', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required|integer');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('datetime', 'Date', 'required');
            $this->form_validation->set_rules('notes', 'Notes');

            if ($this->form_validation->run() !== FALSE) {

                $data = array(
                    'order_type_id' => $this->input->post('order_type_id'),
                    'name' => $this->input->post('name'),
                    'location' => $this->input->post('location'),
                    'where_to' => $this->input->post('where_to'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'datetime' => $this->input->post('datetime'),
                    'status' => 1,
                    'notes' => $this->input->post('notes')
                );

                $this->booking_model->booking($data);
                redirect($this->load->template('booking'));
            }
        }
        $this->load->template('booking');

    }

    public function services($page)
    {
        $service = $this->order_type_model->getByUrl($page);

        $this->load->model('cars_model');
        $cars = $this->cars_model->selectAll();
//        echo '<pre>';
//            print_r($service);die;

//        $this->order_type_model->getByCarId();
        $this->load->model('images_model');
        $this->load->model('car_type_model');

        $this->load->template('services', [ 'service'=> $service, 'cars' => $cars ]);
    }


    public function contacts()
    {

        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone_number', 'Phone number', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');

            if ($this->form_validation->run() !== FALSE) {

                $data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'phone_number' => $this->input->post('phone_number'),
                    'message' => $this->input->post('message'));

                $this->load->model('contacts_model');
                $this->contacts_model->index($data);
            }
        }

        $this->load->template('contacts');
    }

}