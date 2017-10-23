<?php

class MY_Loader extends CI_Loader
{

    public function template($template_name, $vars = array(), $return = FALSE, $error404 = false)
    {

        $ci =& get_instance();
        $page = $ci->uri->segment(0);
        $language =& $ci->config->config['language'];
        $lang_prefix = $ci->config->config['language_abbr'];
        $languages = $ci->config->config['lang_uri_abbr'];

        $template_path = 'templates';
        if ($ci->uri->segment(1) == 'admin') {
            $page = $ci->uri->segment(2);
            $template_path = 'templates/backend';
            $language = '';
            $ci->load->model('roles_model');
            $ci->load->model('orders_model');
            $ci->load->model('contacts_model');
            $unwatched_orders = $ci->orders_model->unwatched_orders();
            $unwatched_contacts = $ci->contacts_model->unwatched_contacts();
            $vars['SUPERADMIN'] = $ci->roles_model->SUPERADMIN;
            $vars['ADMIN'] = $ci->roles_model->ADMIN;
            $vars['unwatched_orders'] = $unwatched_orders;
            $vars['unwatched_contacts'] = $unwatched_contacts;
        }
        if ($return) {
            $content = $this->view($template_path . '/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view($template_path . '/footer', $vars, $return);
            return $content;
        } else {
            if (!empty($language)) {

                $ci->lang->load('header_lang', $language);
                $ci->lang->load('main_lang', $language);
                if (!empty($page)) {
                    $vars['title'] = $ci->lang->line('header_' . $page . '_title');
                } else {
                    $vars['title'] = $ci->lang->line('header_home_title');
                }
                $vars['meta_description'] = $ci->lang->line('meta_description_content');
                $vars['lang'] = $lang_prefix;
                $vars['languages'] = $languages;
                $vars['booking_success'] = $ci->input->get('booking');
                $vars['contact_success'] = $ci->input->get('contact');


                $ci->load->model('Order_type_model');
                $services_urls = $ci->Order_type_model->urls;
                $order_types_data = $ci->Order_type_model->selectAll();
                $order_types = array();
                $prefix = '';
                if ($lang_prefix != 'ru') {
                    $prefix = "_" . $lang_prefix;
                }
                foreach ($order_types_data as $order_type) {
                    $name = 'name' . $prefix;
                    $min_description = 'min_description' . $prefix;
                    $description = 'description' . $prefix;
                    $order_types[] = array(
                        'name' => $order_type->$name,
                        'min_description' => $order_type->$min_description,
                        'description' => $order_type->$description,
                        'image' => $order_type->image,
                        'url' => $order_type->url,
                        'id' => $order_type->id
                    );
                }
                $vars['order_types'] = $order_types;
                $vars['services_urls'] = $services_urls;

            }
            $vars['page'] = $page;
            $vars['error404'] = $error404;
            $this->view($template_path . '/header', $vars);
            $this->view($template_name, $vars);
            $this->view($template_path . '/footer', $vars);
        }
    }

}