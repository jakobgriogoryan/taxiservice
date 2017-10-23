<?php

class Services extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $session = $this->session->all_userdata();
        if (!isset($session['email'])) {
            redirect(base_url() . 'admin/auth');
        }
        $this->load->model('Order_type_model');
        $this->load->model('roles_model');

        if($session['role_id'] != $this->roles_model->ADMIN && $session['role_id'] != $this->roles_model->SUPERADMIN){
            redirect(base_url() . 'admin');
        }
    }

    public function index()
    {
        $services = $this->Order_type_model->selectAll();
        $this->load->template('admin/services/index', ['services' => $services]);
    }

    public function edit($id)
    {
        $service = $this->Order_type_model->getById($id);
        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('name', 'Заполните Имя (По Русский)', 'required');
            $this->form_validation->set_rules('name_en', 'Заполните Имя (English', 'required');
            $this->form_validation->set_rules('min_description', 'Заполните Краткое описание (По Русский)', 'required');
            $this->form_validation->set_rules('min_description_en', 'Заполните Краткое описание (English)', 'required');
            $this->form_validation->set_rules('description', 'Заполните Описание (По Русский)', 'required');
            $this->form_validation->set_rules('description_en', 'Заполните Описание (English)', 'required');
            if (empty($_FILES['image'])) {
                $this->form_validation->set_rules('image', 'Вы должны загрузить хотя бы одну картинку', 'required');
            }
            $this->form_validation->set_message('required', '%s');
            $this->form_validation->set_message('integer', '%s (Число)');

            if ($this->form_validation->run() !== FALSE) {

                $data = array(
                    'name' => $this->input->post('name'),
                    'name_en' => $this->input->post('name_en'),
                    'min_description' => $this->input->post('min_description'),
                    'min_description_en' => $this->input->post('min_description_en'),
                    'description' => $this->input->post('description'),
                    'description_en' => $this->input->post('description_en'),
                );
                $config['upload_path'] = 'assets/images/services/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['encrypt_name'] = TRUE;
//                $config['max_width']            = 1024;
//                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                if ($image = $this->upload->do_upload('image')) {
                    if (!empty($service[0]->image)) {
                        unlink('assets/images/services/' . $service[0]->image);
                    }
                    $data['image'] = $this->upload->data('file_name');

                }
                $this->Order_type_model->edit($data, $id);
                redirect('/admin/services');
            }
        }
        $this->load->template('admin/services/edit', ['service' => $service, 'id' => $id]);
    }
}