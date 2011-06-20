<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    function insert_batch($batch) {
        $this->db->insert('batch', $batch);
    }
    
    function get_all_batch() {
        return TRUE;
    }
}
    
