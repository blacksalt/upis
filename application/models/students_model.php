<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    # Batch functions
    
    function insert_batch( $batch ) {
        $this->db->insert('batch', $batch);
    }
    
    function get_all_batch() {
        return $this->db->get('batch')
                        ->result();
    }
    
    function get_batch_by_id( $id ) {
        return $this->db->where('batch_id', $id)
                        ->get('batch')->row();
    }
    
    function delete_batch( $id ) {
        $batch = $this->db->where( 'batch_id', $id )->get( 'batch' )->row();
        $students = $this->db->where ( 'batch_id', $id )->get( 'students' )->row();

        if( $batch == NULL ) {
            return 'FALSE';
        } else {
            if($students == NULL){
                return $this->db->delete('batch', array( 'batch_id'=>$id ));            
            } else {
                return 'there exists a student';                
            } 
        }
    }


    
    
    # Students function
    
    function insert_student( $student ) {
        $this->db->insert('students', $student);
        return $this->db->insert_id();
    }
    
    function get_students_by_batch( $batch_id ) {
        return $this->db->select('students.student_id, students.student_no')
                        ->select('students.last, students.given, students.middle')
                        ->where('students.batch_id', $batch_id)
                        ->get('students')->result();
    }
    
    function get_student( $id ) {
        return $this->db->where('students.student_id', $id)
                        ->get('students')->row();
    }
}
    
