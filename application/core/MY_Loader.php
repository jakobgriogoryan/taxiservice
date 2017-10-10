<?php
class MY_Loader extends CI_Loader {

    public function template($template_name, $vars = array(), $return = FALSE, $error404 = false)
    {
        $ci =& get_instance();
        $page = $ci->uri->segment(0);
        $language =& $ci->config->config['language'];
        $lang_prefix = $ci->config->config['language_abbr'];
        $template_path = 'templates';
        if($ci->uri->segment(1) == 'admin'){
            $page = $ci->uri->segment(2);
            $template_path = 'templates/backend';
            $language = '';
        }
        if($return){
            $content  = $this->view($template_path.'/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view($template_path.'/footer', $vars, $return);
            return $content;
        }else{
            if(!empty($language)){
                $ci->lang->load('header_lang', $language);
                $ci->lang->load('main_lang', $language);
                if(!empty($page)){
                    $vars['title'] = $ci->lang->line('header_'.$page.'_title');
                }else{
                    $vars['title'] = $ci->lang->line('header_home_title');
                }
                $vars['lang'] = $lang_prefix;

                $ci->load->model('order_type_model');
                $services_urls = $ci->order_type_model->urls;
                $order_types_data = $ci->order_type_model->selectAll();
                $order_types = array();
                $prefix = '';
                if($lang_prefix != 'ru'){
                    $prefix = "_".$lang_prefix;
                }
                foreach($order_types_data as $order_type){
                    $name = 'name'.$prefix;
                    $min_description = 'min_description'.$prefix;
                    $description = 'description'.$prefix;
                    $order_types[] = array(
                        'name' => $order_type->$name,
                        'min_description' => $order_type->$min_description,
                        'description' => $order_type->$description,
                        'image' => $order_type->image,
                        'url' => $order_type->url
                    );
                }
                $vars['order_types'] = $order_types;
                $vars['services_urls'] = $services_urls;

            }
            $vars['page'] = $page;
            $vars['error404'] = $error404;
            $this->view($template_path.'/header', $vars);
            $this->view($template_name, $vars);
            $this->view($template_path.'/footer', $vars);
        }
    }

}