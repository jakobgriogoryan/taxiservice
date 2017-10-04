<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller{



    public function index(){
        $this->load->model('admins_model');

        $admins = $this->admins_model->selectAll();
        $this->load->template('admin/admins/index',['admins' => $admins]);
    }

    public function create(){
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('surname', 'Surname', 'required');
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone number', 'required');
        $this->form_validation->set_rules('create_at', 'Create_at');

        $this->load->model('roles_model');

        $roles = $this->roles_model->selectAll();
        if ($this->form_validation->run() !== FALSE){
            $data = array(
                'name' => $this->input->post('name'),
                'surname' => $this->input->post('surname'),
                'login' => $this->input->post('login'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email'),
                'phone_number' => $this->input->post('phone_number')
            );
            $this->load->model('admins_model');
            $this->admins_model->registration($data);
            redirect('/admin/admins');
        }
        $this->load->template('admin/admins/create',['roles' => $roles]);

    }
    public function edit($id)
    {
        $this->load->model('admins_model');

        if ($this->input->method() == 'post') {

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('surname', 'Surname', 'required');
            $this->form_validation->set_rules('login', 'Login', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone_number', 'Phone number', 'required');
            $this->form_validation->set_rules('create_at', 'Create_at');


            if ($this->form_validation->run() !== FALSE) {
                $data = array(
                    'name' => $this->input->post('name'),
                    'surname' => $this->input->post('surname'),
                    'login' => $this->input->post('login'),
                    'email' => $this->input->post('email'),
                    'phone_number' => $this->input->post('phone_number'),
                    'create_at' => $this->input->post('create_at')
                );
                $this->admins_model->edit($data, $id);
                $this->load->model('admins_model');
                $this->admins_model->registration($data);
            }
            redirect('/admin/admins');
        }
            $admin = $this->admins_model->getById($id);

            $this->load->model('roles_model');
            $roles = $this->roles_model->selectAll();
            $this->load->template('admin/admins/edit', ['roles' => $roles, 'id' => $id, 'admin' => $admin]);

    }

    public function change_pass($id){
        $this->load->model('admins_model');

        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('rpassword', 'Re-type Password', 'required|matches[password]');

        if ($this->form_validation->run() !== FALSE) {
            $data = array(
                'password' => $this->input->post('password')
        );

            $admin = $this->admins_model->getById($id);
        }
        $this->load->template('admin/admins/change_password',[ 'id' => $id, 'admin' => $admin]);
        
    }
    public function delete($id){
        $this->load->model('admins_model');

        $this->admins_model->delete($id);
        echo json_encode(array('success' => true));
    }

}