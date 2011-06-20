<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Students_model');
        $this->subnav = "admin/students/subnav";
    }
    
    function index() {
        //check if admin
        redirect('students/add');
    }

    # TODO: Add individual Student Profile
    function add() {
        $this->data['batch'] = $this->Students_model->get_all_batch();
        
        if($this->data['batch']!=NULL) {
        
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('last','Last Name','required');
            $this->form_validation->set_rules('given','Given Name','required');
            $this->form_validation->set_rules('middle','Middle Name','required');
            $this->form_validation->set_rules('nick','Nickname','');
            
            $this->form_validation->set_rules('address','Address','required');
            #TODO: date validation
            $this->form_validation->set_rules('birthday','Birthday','required');
            $this->form_validation->set_rules('mobile','Mobile','required|numeric|exact_length[10]');
            $this->form_validation->set_rules('landline','Landline','required|numeric');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            
            #TODO: validation for dropdown/radio inputs?
                    
            $this->form_validation->set_rules('father','Father Name','required');
            $this->form_validation->set_rules('foccupation','Father Occupation','');
            $this->form_validation->set_rules('foffice','Father Office','');
            $this->form_validation->set_rules('fcontact','Father Contct','required');

            $this->form_validation->set_rules('mother','Mother Name','required');
            $this->form_validation->set_rules('moccupation','Mother Occupation','');
            $this->form_validation->set_rules('moffice','Mother Office','');
            $this->form_validation->set_rules('mcontact','Mother Contct','required');

            #TODO: guardian field in db
            $this->form_validation->set_rules('guardian','Guardian Name','');
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
                    
                    'religion' => $this->input->post('religion'),
                    'entry' => $this->input->post('entry'),
                    'graduate' => $this->input->post('graduate'),
                    'upcat' => $this->input->post('upcat'),
                    'disciplinary' => $this->input->post('disciplinary'),
                    
                    'father' => $this->input->post('father'),
                    'foccupation' => $this->input->post('foccupation'),
                    'foffice' => $this->input->post('foffice'),
                    'fcontact' => $this->input->post('fcontact'),
                    
                    'mother' => $this->input->post('mother'),
                    'moccupation' => $this->input->post('moccupation'),
                    'moffice' => $this->input->post('moffice'),
                    'mcontact' => $this->input->post('mcontact'),
                    
                    #TODO: guardian field
                    
                    'batch_id' => $this->input->post('batch_id')
                    );
                    
                    #TODO: implement student number assignment
                    $id = $this->Students_model->insert_student($new);
                    $this->session->flashdata('success', 'Student successfully added');
                    redirect('students/view_student/'.$id);
                
            } else {
                $this->render('admin/students/add');
            }
        // a batch exists
        } else {
            $this->session->set_flashdata('error', 'Please create a batch first.');
            redirect('students/add_batch');
        }
        
    }
    
    function add_batch() {
        $this->load->library('form_validation');
        
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
    
    function view_all() {
        $this->data['batch'] = $this->Students_model->get_all_batch();
        $this->render('admin/students/batch/batch_list');
    }
    
    function view_batch( $batch_id = null ) {
        $this->data['students'] = $this->Students_model->get_students_by_batch($batch_id);
        $this->data['batch'] = $this->Students_model->get_batch_by_id($batch_id);
        $this->render('admin/students/student_list');
    }
    
    function view_student( $id = null) {
        $this->data['student'] = $this->Students_model->get_student($id);
        $this->render('admin/students/view');
    }
    # TODO: delete batch (if no student instance yet)
    # TODO: edit batch
    
    
    # TODO: Upload CSV Student Profile
    # TODO: View Student Profile
        #TODO: upload image
    # TODO: Update Student Profile
    
    # TODO: print pdf batch list
    # tODO: print pdf student profile
    
    

}
