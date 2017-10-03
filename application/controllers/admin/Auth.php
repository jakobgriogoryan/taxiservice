<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login');
	}

//	public function registration(){
//        $this->form_validation->set_rules('name', 'Name', 'required');
//        $this->form_validation->set_rules('surname', 'Surname', 'required');
//        $this->form_validation->set_rules('login', 'Login', 'required');
//        $this->form_validation->set_rules('password', 'Password', 'required');
//        $this->form_validation->set_rules('email', 'Email', 'required');
//        $this->form_validation->set_rules('phone_number', 'Phone number', 'required');
//
//        if ($this->form_validation->run() === FALSE)
//        {
////            header("Location: " . base_url() . "/index.php/login");
//            $this->load->view('admin/login');
//        }else {
//            $data = array(
//                'name' => $this->input->post('name'),
//                'surname' => $this->input->post('surname'),
//                'email' => $this->input->post('email'),
//                'login' => $this->input->post('login'),
//                'password' => $this->input->post('password'),
//                'email' => $this->input->post('email'),
//                'phone_number' => $this->input->post('phone_number')
//            );
//            $this->load->model('admins_model');
//            $this->admins_model->registration($data);
//        }
//    }
    public function login(){
        $this->load->model('admins_model');

        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->template('login');
        }else{
            // $data = $this->input->post();

            $data = array(
                'login' => $this->input->post('login'),
                'password' => $this->input->post('password')
            );
            $user_data = $this->admins_model->get_data([ 'id','name', 'surname', 'login','email'], $data)->row();
            if($user_data){
                $newdata = array(
                    'id' => $user_data->id,
                    'name'  => $user_data->name,
                    'surname'   => $user_data->surname,
                    'email' => $user_data->email,
                    'login'  => $user_data->login,
                );
                $this->session->set_userdata($newdata);
                $this->load->helper('url');

                redirect(base_url().'admin/home');

//                header("Location: ". base_url()."index.php/login/home");
                $this->load->template('login');
            }
            else{
                redirect(base_url().'admin/login');
            }
        }
    }

    public function home(){
        $this->load->template('admin/home');
    }
}
    