<?php
class MY_Loader extends CI_Loader {

    public function template($template_name, $vars = array(), $return = FALSE)
    {
        $ci =& get_instance();
        if($return){
            $content  = $this->view('templates/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('templates/footer', $vars, $return);
            return $content;
        }else{
            $page = $ci->uri->segment(2);
            $vars['page'] = $page;
            $this->view('templates/header', $vars);
            $this->view($template_name, $vars);
            $this->view('templates/footer', $vars);
        }
    }

}