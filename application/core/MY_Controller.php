<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MY_Controller extends CI_Controller {
    var $title = 'Home';
    var $view = 'default_view';
    var $subnav = null;
    var $data = null;
    var $subtitle = null;
    var $user_id = null;

    function __construct() {
        parent::__construct();
    }

    function render($view_file = null, $view_data = null,
                    $region_name = 'content',  $overwrite = FALSE) {
        if (empty($view_file)) $view_file = $this->view;
        if (empty($view_data)) $view_data = $this->data;
        
        $this->subnav = ($this->subnav)? $this->load->view($this->subnav,'',TRUE) : null;
        
        $this->template->write('title',$this->title);
        $this->template->write('subnav',$this->subnav);
        $this->template->write_view($region_name, $view_file, $view_data, $overwrite);
        $this->template->render();
    }

    function admin_check() {
        if (!$this->tank_auth->is_admin())  {
            $this->session->set_flashdata('notice','Woops. You\'re no admin.');
            redirect('auth');
        }
    }

    function logged_in_check() {
        if ( !$this->tank_auth->is_logged_in() ) {
            $this->session->set_flashdata('notice','Your session may have expired, please login again');
            redirect('auth');
        }
        else
        {
            $this->user_id = $this->tank_auth->get_user_id();
        }
    }

}
