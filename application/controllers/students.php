<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->subnav = "admin/students/subnav";
    }
    
    function index() {
        //check if admin
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

        #TODO: guardian field in db
        $this->form_validation->set_rules('guardian','Guardian Name','alpha_dash');
        #TODO: validation for following if guardian is avaliable
        $this->form_validation->set_rules('relationship','Relationship to Student','');
        $this->form_validation->set_rules('gaddress','Guardian Address','');
        $this->form_validation->set_rules('gcontact','Guardian Contct','');
        
        
        if ($this->form_validation->run()) {
            $new = array(
                'last' => $this->input->post('last'),
                'given' => $this->input->post('given'),
                'middle' => $this->input->post('middle'),
                'nick' => $this->input->post('nick'),
                
                'address' => $this->input->post('address'),
                'birthday' => $this->input->post('birthday'),
                'mobile' => $this->input->post('mobile'),
                'landline' => $this->input->post('landline'),
                'email' => $this->input->post('email'),
                
                'father' => $this->input->post('father'),
                'foccupation' => $this->input->post('foccupation'),
                'foffice' => $this->input->post('foffice'),
                'fcontact' => $this->input->post('fcontact'),
                
                'mother' => $this->input->post('mother'),
                'moccupation' => $this->input->post('moccupation'),
                'moffice' => $this->input->post('moffice'),
                'mcontact' => $this->input->post('mcontact'),
                
                #TODO: guardian field
                );
            
            
        } else {
            $this->render('admin/students/add');
        }
    }
    
    function add_batch() {
        $this->load->library('form_validation');
        $this->load->model('Students_model');
        
        #TODO: additional validation? 
        $this->form_validation->set_rules('year','Year','required|numeric|exact_length[4]|callback_check_year');
        $this->form_validation->set_rules('remarks','Remarks','');
        
        if ($this->form_validation->run()) {
            $batch = array ( 'year' => $this->input->post('year'),
                             'remarks' => $this->input->post('remarks'));
            
            $this->Students_model->insert_batch($batch);
            $this->session->set_flashdata('success','Batch successfully added.');            
            redirect('students/add_batch');

        }
        $this->data['batch'] = $this->Students_model->get_all_batch();
        $this->render('admin/students/batch/add');
    }
    
    function check_year($yr) {
        //check for multiple instance
        return TRUE;
    }
    
    # TODO: delete batch (if no student instance yet)
    # TODO: edit batch
    
    # TODO: Upload CSV Student Profile
    # TODO: View Student Profile
    # TODO: Update Student Profile
    
    

}
