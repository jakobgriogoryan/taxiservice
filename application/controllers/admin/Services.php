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
        $services = $this->order_type_model->selectAll();
        $this->load->template('admin/services/index',['services' => $services]);
    }

    public function edit($id){
        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('name', 'Заполните Имя', 'required');
            $this->form_validation->set_rules('min_description', 'Заполните Краткое описание (По Русский)', 'required');
            $this->form_validation->set_rules('min_description_en', 'Заполните Краткое описание (English)', 'required');
            $this->form_validation->set_rules('description', 'Заполните Описание (По Русский)', 'required');
            $this->form_validation->set_rules('description_en', 'Заполните Описание (English)', 'required');
            if (empty($_FILES['image']))
            {
                $this->form_validation->set_rules('image','Вы должны загрузить хотя бы одну картинку','required');
            }
            $this->form_validation->set_message('required','%s');
            $this->form_validation->set_message('integer','%s (Число)');

            if ($this->form_validation->run() !== FALSE){

            }
        }
        $service = $this->order_type_model->getById($id);
        $this->load->template('admin/services/edit',['service' => $service, 'id' => $id]);
    }
}