<?php


class Contacts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $session = $this->session->all_userdata();
        if (!isset($session['email'])) {
            redirect(base_url() . 'admin/auth');
        }
    }

    public function index(){

        $this->load->model('contacts_model');
        $this->contacts_model->watchAll();
        $contacts= $this->contacts_model->selectAll();
        $this->load->template('admin/user_message/index',['contacts' => $contacts]);
    }

    public function delete($id)
    {
        $this->load->model('message_model');
        $this->message_model->delete($id);
        echo json_encode(array('success' => true));
    }

}
