<?php
class Home extends  CI_Controller{

    public function index(){
        $this->load->template('home');
    }

    public function cars(){
        $this->load->template('cars');
    }

    public function booking($data){

        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('name', 'Заполните Имя', 'required');
            $this->form_validation->set_rules('location', 'место нахождения ', 'required');
            $this->form_validation->set_rules('where_to', 'куда', 'required|integer');
            $this->form_validation->set_rules('phone', 'Телефон', 'required|integer');
            $this->form_validation->set_rules('email', 'Эл. адрес', 'required|integer');
            $this->form_validation->set_rules('datatime', 'время данных', 'required|integer');
            $this->form_validation->set_rules('status', 'статус', 'required|integer');

            if ($this->form_validation->run() !== FALSE){

                $data = array(
                    'name' => $this->input->post('name'),
                    'location' => $this->input->post('location'),
                    'where_to' => $this->input->post('where_to'),
                    'phone' =>($this->input->post('phone')),
                    'email' => $this->input->post('email'),
                    'datatime' => $this->input->post('datatime'),
                    'status' => $this->input->post('status')
                );
                $this->load->model('booking_model');
                $booking_id = $this->booking_model->booking($data);

                $this->load->template('booking');
                redirect('/admin/booking');
            }

        }
    }

    public function services(){
        $this->load->template('services');
    }

    public function contacts(){
        $this->load->template('contacts');
    }

}