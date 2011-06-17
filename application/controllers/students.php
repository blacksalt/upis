<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends MY_Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        //check if admin
        $this->data['content'] = 'yey';
        $this->render('admin/students/add');
    }

    # TODO: Add individual Student Profile
    function add() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('last','Last Name','required|alpha_dash');
        $this->form_validation->set_rules('given','Given Name','required|alpha_dash');
        $this->form_validation->set_rules('middle','Middle Name','required|alpha_dash');
        $this->form_validation->set_rules('nick','Nickname','alpha_dash');
        
        $this->form_validation->set_rules('address','Address','required');
        #TODO: date validation
        $this->form_validation->set_rules('birthday','Birthday','required');
        $this->form_validation->set_rules('mobile','Mobile','required|numeric|exact_length[10]');
        $this->form_validation->set_rules('landline','Landline','required|numeric');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        
        #TODO: validation for dropdown/radio inputs?
                
        $this->form_validation->set_rules('father','Father Name','required|alpha_dash');
        $this->form_validation->set_rules('foccupation','Father Occupation','');
        $this->form_validation->set_rules('foffice','Father Office','');
        $this->form_validation->set_rules('fcontact','Father Contct','required');

        $this->form_validation->set_rules('mother','Mother Name','required|alpha_dash');
        $this->form_validation->set_rules('moccupation','Mother Occupation','');
        $this->form_validation->set_rules('moffice','Mother Office','');
        $this->form_validation->set_rules('mcontact','Mother Contct','required');

        $this->form_validation->set_rules('guardian','Guardian Name','alpha_dash');
        #TODO: validation for following if guardian is avaliable
        $this->form_validation->set_rules('relationship','Relationship to Student','');
        $this->form_validation->set_rules('gaddress','Guardian Address','');
        $this->form_validation->set_rules('gcontact','Guardian Contct','');
        
        
        if ($this->form_validation->run()) {
            $name = $this->input->post('name');
            
        } else {
            $this->render('admin/students/add');
        }
    }
    # TODO: Upload CSV Student Profile
    # TODO: View Student Profile
    # TODO: Update Student Profile
    
    

}
