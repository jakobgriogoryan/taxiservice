<?php

class Home extends CI_Controller
{

    protected $language;

    public function __construct()
    {

        parent::__construct();
        $language =& $this->config->config['language'];
        $this->language = $language;
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
        $this->load->model('Order_type_model');

        $this->load->template('cars', array('cars' => $cars));
    }


    public function booking()
    {
        $this->load->model('Order_type_model');

        $this->load->model('booking_model');

        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('order_type_id', 'Order type', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('where_to', 'Destination item', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required|integer');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('datetime', 'Date', 'required');

            if ($this->form_validation->run() !== FALSE) {
                $lang = $this->input->post('lang');
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
                redirect('/'.$lang.'/?booking=true');
            }
        }
        $this->load->template('booking');

    }

    public function services($page)
    {
        $this->load->model('Order_type_model');

        $service = $this->Order_type_model->getByUrl($page);

        $this->load->model('cars_model');
        $cars = $this->Order_type_model->getByCarId($service[0]['id']);

        $this->load->model('images_model');
        $this->load->model('car_type_model');

        $this->load->template('services', array('service'=> $service, 'cars' => $cars ));
    }


    public function contacts()
    {
        $this->load->model('Order_type_model');

        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone_number', 'Phone number', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');

            if ($this->form_validation->run() !== FALSE) {
                $lang = $this->input->post('lang');
                $data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'phone_number' => $this->input->post('phone_number'),
                    'message' => $this->input->post('message'));

                $this->load->model('contacts_model');
                $this->contacts_model->insert($data);
                redirect('/'.$lang.'/?contact=true');
            }
        }

        $this->load->template('contacts');
    }

    public function car_images(){
        $car_id = $this->input->post('id');
        $lang = $this->input->post('lang');
        $this->load->model('images_model');
        $this->load->model('cars_model');
        $this->load->model('Order_type_model');

        $images = $this->images_model->getById($car_id);
        $car_info = $this->cars_model->getById($car_id);
        $this->lang->load('main_lang', $this->language);
        $info = array();
        if($lang == 'ru'){
            $info['name'] = $car_info[0]->name;
            $info['description'] = $car_info[0]->description;
            $info['min_description'] = $car_info[0]->min_description;
        }else{
            $info['name'] = $car_info[0]->name_en;
            $info['description'] = $car_info[0]->description_en;
            $info['min_description'] = $car_info[0]->min_description_en;
        }
        $info['passengers_count'] = $car_info[0]->passengers_count;
        $info['minimum_order'] = $car_info[0]->minimum_order;
        $info['further'] = $car_info[0]->further;
        $info['for_mkad'] = $car_info[0]->for_mkad;
        $info['over_200km'] = $car_info[0]->over_200km;
        $info['create_at'] = $car_info[0]->create_at;
        $info['car_over_200km'] = $this->lang->line('car_over_200km');
        $info['car_for_mkad'] = $this->lang->line('car_for_mkad');
        $info['car_further'] = $this->lang->line('car_further');
        $info['car_minimum_order'] = $this->lang->line('car_minimum_order');
        $info['car_passengers_count'] = $this->lang->line('car_passengers_count');
        echo json_encode(array('images' => $images,'info' => $info));
    }
}