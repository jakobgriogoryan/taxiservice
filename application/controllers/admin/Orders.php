<?php

class Orders extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $session = $this->session->all_userdata();
        if (!isset($session['email'])) {
            redirect(base_url() . 'admin/auth');
        }
    }

    public function index()
    {
        $this->load->model('orders_model');

        $orders = $this->orders_model->selectAll();
        $status = $this->orders_model->status;
        $this->load->template('admin/orders/index', ['orders' => $orders, 'status' => $status]);
    }
}