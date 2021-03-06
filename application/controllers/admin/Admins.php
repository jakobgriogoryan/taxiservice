<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller
{


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
        $this->load->model('admins_model');

        $admins = $this->admins_model->selectAll();
        $this->load->template('admin/admins/index', ['admins' => $admins]);
    }

    public function create()
    {
        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('name', 'Имя', 'required');
            $this->form_validation->set_rules('surname', 'Фамилия', 'required');
            $this->form_validation->set_rules('login', 'Логин', 'required|callback_login_exists');
            $this->form_validation->set_rules('password', 'Пароль', 'required');
            $this->form_validation->set_rules('rpassword', 'Повторите пароль', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Электронная почта', 'required|callback_email_exists');
            $this->form_validation->set_rules('phone_number', 'Номер телефона', 'required');
            $this->form_validation->set_message('email_exists', 'Такая электронная почта уже существует');
            $this->form_validation->set_message('login_exists', 'Такой логин уже существует');


            if ($this->form_validation->run() !== FALSE) {
                $data = array(
                    'role_id' => $this->input->post('role_id'),
                    'name' => $this->input->post('name'),
                    'surname' => $this->input->post('surname'),
                    'login' => $this->input->post('login'),
                    'password' => sha1(md5($this->input->post('password'))),
                    'email' => $this->input->post('email'),
                    'phone_number' => $this->input->post('phone_number')
                );
                $this->load->model('admins_model');
                $this->admins_model->registration($data);
                redirect('/admin/admins');
            }
        }
        $this->load->model('roles_model');

        $roles = $this->roles_model->selectAll();
        $this->load->template('admin/admins/create', ['roles' => $roles]);

    }

    public function edit($id)
    {
        $this->load->model('admins_model');
        if ($this->input->method() == 'post') {

            $this->form_validation->set_rules('name', 'Name', 'required|callback_email_exists');
            $this->form_validation->set_rules('role_id', 'Role', 'required');
            $this->form_validation->set_rules('surname', 'Surname', 'required');
            $this->form_validation->set_rules('login', 'Login', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone_number', 'Phone number', 'required');
            $this->form_validation->set_rules('create_at', 'Create_at');

            if ($this->form_validation->run() !== FALSE) {
                $data = array(
                    'role_id' => $this->input->post('role_id'),
                    'name' => $this->input->post('name'),
                    'surname' => $this->input->post('surname'),
                    'login' => $this->input->post('login'),
                    'email' => $this->input->post('email'),
                    'phone_number' => $this->input->post('phone_number'),
                );
                $this->admins_model->edit($data, $id);
                $this->load->model('admins_model');
            }
            redirect('/admin/admins');
        }
        $admin = $this->admins_model->getById($id);

        $this->load->model('roles_model');
        $roles = $this->roles_model->selectAll();
        $this->load->template('admin/admins/edit', ['roles' => $roles, 'id' => $id, 'admin' => $admin]);

    }

    public function changePassword($id)
    {
        $this->load->model('admins_model');
        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('rpassword', 'Re-type Password', 'required|matches[password]');

            if ($this->form_validation->run() !== FALSE) {
                $data = array(
                    'password' => sha1(md5($this->input->post('password')))
                );
                $this->admins_model->edit($data, $id);
                redirect('/admin/admins');
            }
        }
        $this->load->template('admin/admins/change_password', ['id' => $id]);
    }

    public function delete($id)
    {
        $this->load->model('admins_model');

        $this->admins_model->delete($id);
        echo json_encode(array('success' => true));
    }

    public function email_exists($key)
    {
        if (!$key) {
            return true;
        }
        $this->load->model('admins_model');
        return $this->admins_model->key_exists('email', $key);
    }

    public function login_exists($key)
    {
        if (!$key) {
            return true;
        }
        $this->load->model('admins_model');
        return $this->admins_model->key_exists('login', $key);
    }

}