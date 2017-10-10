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
                if(!empty($page)){
                    $vars['title'] = $ci->lang->line('header_'.$page.'_title');
                }else{
                    $vars['title'] = $ci->lang->line('header_home_title');
                }
                $vars['lang'] = $lang_prefix;

                $ci->load->model('order_type_model');
                $order_types = $ci->order_type_model->selectAll();
            }
            $vars['page'] = $page;
            $vars['error404'] = $error404;
            $this->view($template_path.'/header', $vars);
            $this->view($template_name, $vars);
            $this->view($template_path.'/footer', $vars);
        }
    }

}