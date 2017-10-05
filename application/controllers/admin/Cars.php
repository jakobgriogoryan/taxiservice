<?php
/**
 * Created by PhpStorm.
 * User: Hakob
 * Date: 10/4/2017
 * Time: 5:44 PM
 */

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
        if(!isset($session['email'])){
            redirect(base_url().'admin/auth');
        }
    }

    public function index(){
        $this->load->model('cars_model');
        $cars = $this->cars_model->selectAll();
        $this->load->template('admin/cars/index',['cars'=> $cars]);

    }

    public function create(){
        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('name', 'Имя', 'required');
            $this->form_validation->set_rules('passengers_count', 'Посадочные места ', 'required');
            $this->form_validation->set_rules('minimum_order', 'Минимальный заказ ', 'required');
            $this->form_validation->set_rules('further', 'Далее', 'required');
            $this->form_validation->set_rules('for_mkad', 'За МКАД', 'required');
            $this->form_validation->set_rules('over_200km', 'Свыше 200км от МКАД', 'required');
            $this->form_validation->set_rules('image','Cars image','required');


            if ($this->form_validation->run() !== FALSE){

                $data = array(
                    'name' => $this->input->post('name'),
                    'passengers_count' => $this->input->post('passengers_count'),
                    'minimum_order' => $this->input->post('minimum_order'),
                    'further' =>($this->input->post('further')),
                    'for_mkad' => $this->input->post('for_mkad'),
                    'over_200km' => $this->input->post('over_200km')
                );
                $this->load->model('cars_model');
                $this->cars_model->add($data);

                $this->load->model('images_model');

                $dataImage = $this->input->post('image');

                $config['upload_path']          = './img/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['encrypt_name'] = TRUE;
//                $config['max_width']            = 1024;
//                $config['max_height']           = 768;

//                print_r($config);die;
                $this->load->library('upload', $config);
                if ( ! $image = $this->upload->do_upload('image'))
                    {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->template('admin/cars/edit', $error);

                        echo 'Image is not uploaded ';

                    }else{
                    $insert_data = array(
//                            'upload_data'=> $this->upload->insert_data(''),
                            $this->upload->data('name'),
//                            'cars_id' =>$this->session->data('id')
                        );
                    $this->images_model->image($insert_data);
                    $this->load->template('admin/cars');
                }


                redirect('/admin/cars/create');
            }

        }
        $this->load->template('admin/cars/create',['passengers_count' => $this->passengers_count]);

    }

    public function edit($id)
    {

        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('name', 'Имя', 'required');
            $this->form_validation->set_rules('passengers_count', 'Посадочные места ', 'required' | 'selected');
            $this->form_validation->set_rules('minimum_order', 'Минимальный заказ ', 'required');
            $this->form_validation->set_rules('further	', 'Далее', 'required');
            $this->form_validation->set_rules('for_mkad', 'За МКАД', 'required');
            $this->form_validation->set_rules('Over_200km', 'Свыше 200км от МКАД', 'required');


            if ($this->form_validation->run() !== FALSE) {

                $data = array(
                    'name' => $this->input->post('name'),
                    'passengers_count' => $this->input->post('passengers_count'),
                    'minimum_order' => $this->input->post('minimum_order'),
                    'further' => ($this->input->post('further')),
                    'for_mkad' => $this->input->post('for_mkad'),
                    'Over_200km' => $this->input->post('Over_200km')
                );
                $this->load->model('cars_model');
                $this->cars_model->add($data);
                $this->load->template('admin/cars/add');

                redirect('/admin/cars/add');
            }

        }
        $admin = $this->cars_model->getById($id);

        $this->load->template('admin/cars/edit', [ 'id' => $id, 'admin' => $admin]);
        $this->load->template('admin/cars/add');


    }

}