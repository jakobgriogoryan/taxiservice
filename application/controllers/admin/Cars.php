<?php


class Cars extends CI_Controller
{
    protected $passengers_count = array(
        '4',
        '5',
        '5-6',
        '6-7',
        '7-8',
        '9-11',
        '12-17',
        '18-20',
    );

    public function __construct()
    {
        parent::__construct();
        $session = $this->session->all_userdata();
        if (!isset($session['email'])) {
            redirect(base_url() . 'admin/auth');
        }
        $this->load->model('roles_model');

        if($session['role_id'] != $this->roles_model->ADMIN && $session['role_id'] != $this->roles_model->SUPERADMIN){
            redirect(base_url() . 'admin');
        }
    }

    public function index()
    {
        $this->load->model('cars_model');
        $cars = $this->cars_model->selectAll();
        $this->load->template('admin/cars/index', ['cars' => $cars]);

    }

    public function create()
    {
        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('name', 'Заполните Имя (По Русский)', 'required');
            $this->form_validation->set_rules('name_en', 'Заполните Имя (English)', 'required');
            $this->form_validation->set_rules('min_description', 'Заполните краткое описание (По Русский)', 'required');
            $this->form_validation->set_rules('min_description_en', 'Заполните краткое описание (English)', 'required');
            $this->form_validation->set_rules('description', 'Заполните описание (По Русский)', 'required');
            $this->form_validation->set_rules('description_en', 'Заполните описание (English)', 'required');
            $this->form_validation->set_rules('passengers_count', 'Заполните Посадочные места ', 'required');
            $this->form_validation->set_rules('minimum_order', 'Заполните Минимальный заказ ', 'required|integer');
            $this->form_validation->set_rules('further', 'Заполните Далее', 'required|integer');
            $this->form_validation->set_rules('for_mkad', 'Заполните За МКАД', 'required|integer');
            $this->form_validation->set_rules('over_200km', 'Заполните Свыше 200км от МКАД', 'required|integer');
//            if (empty($_FILES['image_1'])) {
//                $this->form_validation->set_rules('image_1', 'Вы должны загрузить хотя бы одну картинку', 'required');
//            }
            $this->form_validation->set_message('required', '%s');
            $this->form_validation->set_message('integer', '%s (Число)');

            if ($this->form_validation->run() !== FALSE) {

                $data = array(
                    'name' => $this->input->post('name'),
                    'name_en' => $this->input->post('name_en'),
                    'min_description' => $this->input->post('min_description'),
                    'passengers_count' => $this->input->post('passengers_count'),
                    'min_description_en' => $this->input->post('min_description_en'),
                    'description' => $this->input->post('description'),
                    'description_en' => $this->input->post('description_en'),
                    'minimum_order' => $this->input->post('minimum_order'),
                    'further' => ($this->input->post('further')),
                    'for_mkad' => $this->input->post('for_mkad'),
                    'over_200km' => $this->input->post('over_200km')
                );
                $car_types = $this->input->post('car_type');
                $this->load->model('cars_model');
                $this->load->model('car_type_model');

                $car_id = $this->cars_model->add($data);
                foreach ($car_types as $car_type) {
                    $this->car_type_model->add(array('car_id' => $car_id, 'order_type_id' => $car_type));
                }
                $this->load->model('images_model');
                $config['upload_path'] = 'assets/images/cars/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['encrypt_name'] = TRUE;
//                $config['max_width']            = 1024;
//                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                for ($i = 1; $i <= 10; $i++) {
                    if (!$image = $this->upload->do_upload('image_' . $i)) {
                        continue;
                    } else {
                        $main = 0;
                        if ($this->input->post('main_image_' . $i) == 'on') {
                            $main = 1;
                        }
                        $insert_data = array(
                            'name' => $this->upload->data('file_name'),
                            'car_id' => $car_id,
                            'main' => $main
                        );
                        $this->images_model->add($insert_data);
                    }
                }
                redirect('/admin/cars');
            }

        }
        $this->load->model('Order_type_model');
        $car_types = $this->Order_type_model->selectAll();
        $this->load->template('admin/cars/create', ['passengers_count' => $this->passengers_count, 'car_types' => $car_types]);

    }

    public function edit($id)
    {
        $this->load->model('cars_model');
        $this->load->model('images_model');
        $this->load->model('Order_type_model');
        $this->load->model('car_type_model');
        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('name', 'Заполните Имя', 'required');
            $this->form_validation->set_rules('name_en', 'Заполните Имя (English)', 'required');
            $this->form_validation->set_rules('min_description', 'Заполните краткое описание (По Русский)', 'required');
            $this->form_validation->set_rules('min_description_en', 'Заполните краткое описание (English)', 'required');
            $this->form_validation->set_rules('description', 'Заполните описание (По Русский)', 'required');
            $this->form_validation->set_rules('description_en', 'Заполните описание (English)', 'required');
            $this->form_validation->set_rules('passengers_count', 'Заполните Посадочные места ', 'required');
            $this->form_validation->set_rules('minimum_order', 'Заполните Минимальный заказ ', 'required|integer');
            $this->form_validation->set_rules('further', 'Заполните Далее', 'required|integer');
            $this->form_validation->set_rules('for_mkad', 'Заполните За МКАД', 'required|integer');
            $this->form_validation->set_rules('over_200km', 'Заполните Свыше 200км от МКАД', 'required|integer');
//            $uploaded_image = false;
//            for ($i = 1; $i <= 10; $i++) {
//                $image = $this->input->post('exist_image_' . $i);
//                if (isset($image)) {
//                    $uploaded_image = true;
//                }
//            }
//            if (!$uploaded_image) {
//                if (empty($_FILES['image_1'])) {
//                    $this->form_validation->set_rules('image_1', 'Вы должны загрузить хотя бы одну картинку', 'required');
//                }
//            }
            if ($this->form_validation->run() !== FALSE) {
                $data = array(
                    'name' => $this->input->post('name'),
                    'name_en' => $this->input->post('name_en'),
                    'min_description' => $this->input->post('min_description'),
                    'min_description_en' => $this->input->post('min_description_en'),
                    'description' => $this->input->post('description'),
                    'description_en' => $this->input->post('description_en'),
                    'passengers_count' => $this->input->post('passengers_count'),
                    'minimum_order' => $this->input->post('minimum_order'),
                    'further' => ($this->input->post('further')),
                    'for_mkad' => $this->input->post('for_mkad'),
                    'over_200km' => $this->input->post('over_200km')
                );
                $car_types = $this->input->post('car_type');
                $this->cars_model->edit($data, $id);
                $this->car_type_model->delete($id);
                foreach ($car_types as $car_type) {
                    $this->car_type_model->add(array('car_id' => $id, 'order_type_id' => $car_type));
                }
                $config['upload_path'] = 'assets/images/cars/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['encrypt_name'] = TRUE;
//                $config['max_width']            = 1024;
//                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                for ($i = 1; $i <= 10; $i++) {
                    if (!$image = $this->upload->do_upload('image_' . $i)) {
                        continue;
                    } else {
                        $main = 0;
                        if ($this->input->post('main_image_' . $i) == 'on') {
                            $main = 1;
                            $this->images_model->edit(array('main' => 0), $id);
                        }
                        $insert_data = array(
                            'name' => $this->upload->data('file_name'),
                            'car_id' => $id,
                            'main' => $main
                        );
                        $this->images_model->add($insert_data);
                    }
                }

                redirect('/admin/cars');
            }

        }
        $car = $this->cars_model->getById($id);
        $images = $this->images_model->getById($id);
        $all_car_types = $this->Order_type_model->selectAll();
        $car_types_data = $this->car_type_model->getById($id);
        $car_types = array();
        foreach ($car_types_data as $car_type) {
            $car_types[] = $car_type->order_type_id;
        }

        $this->load->template('admin/cars/edit', ['id' => $id, 'car' => $car, 'passengers_count' => $this->passengers_count, 'images' => $images, 'all_car_types' => $all_car_types, 'car_types' => $car_types]);

    }

    public function getImages()
    {
        $id = $this->input->get('id');
        $this->load->model('images_model');
        $cars = $this->images_model->getById($id);
        echo json_encode($cars);
    }

    public function deleteImage()
    {
        $id = $this->input->get('id');
        $image = $this->input->get('image');
        $this->load->model('images_model');
        unlink('assets/images/cars/' . $image);
        $cars = $this->images_model->delete($id);
        echo json_encode(true);
    }

    public function delete($id)
    {
        $this->load->model('cars_model');
        $this->cars_model->delete($id);
        echo json_encode(array('success' => true));
    }

    public function changeMainPicture()
    {
        $id = $this->input->post('id');
        $car_id = $this->input->post('car_id');
        $this->load->model('images_model');
        $this->images_model->edit(array('main' => 0), $car_id);
        $this->images_model->edit(array('main' => 1), $id, 'id');
        echo json_encode(array('success' => true));
    }
}