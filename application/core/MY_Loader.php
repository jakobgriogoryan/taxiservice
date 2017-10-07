<?php
class MY_Loader extends CI_Loader {

    public function template($template_name, $vars = array(), $return = FALSE)
    {
        $ci =& get_instance();
        $page = $ci->uri->segment(2);
        $template_path = 'templates';
        if($ci->uri->segment(1) == 'admin'){
            $template_path = 'templates/admin';
        }
        if($return){
            $content  = $this->view($template_path.'/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view($template_path.'/footer', $vars, $return);
            return $content;
        }else{

            $vars['page'] = $page;
            $this->view($template_path.'/header', $vars);
            $this->view($template_name, $vars);
            $this->view($template_path.'/footer', $vars);
        }
    }

}