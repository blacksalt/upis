<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    # Batch functions
    
    function insert_batch($batch) {
        $this->db->insert('batch', $batch);
    }
    
    function get_all_batch() {
        return $this->db->get('batch')
                        ->result();
    }
    
    # Students function
    
    function insert_student($student) {
        $this->db->insert('students', $student);
    }
    
}
    
