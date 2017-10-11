<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function login()
    {
        $this->load->model('admins_model');

        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() !== FALSE) {
            // $data = $this->input->post();

            $data = array(
                'login' => $this->input->post('login'),
                'password' => sha1(md5($this->input->post('password')))
            );
            $user_data = $this->admins_model->get_data(['id', 'name', 'surname', 'login', 'email'], $data)->row();
            if ($user_data) {
                $newdata = array(
                    'id' => $user_data->id,
                    'name' => $user_data->name,
                    'surname' => $user_data->surname,
                    'email' => $user_data->email,
                    'login' => $user_data->login,
                );
                $this->session->set_userdata($newdata);
                $this->load->helper('url');
                redirect(base_url() . 'admin/home');
            } else {
                redirect(base_url() . 'admin/auth');
            }
        }
        $this->load->template('login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'admin/auth');
    }

}
    