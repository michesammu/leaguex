<?php defined('BASEPATH') OR exit('No direct script access allowed');

// Check Session
function is_logged_in() {

    $CI =& get_instance();
    
    $user = $CI->session->userdata('userID');
    if (!isset($user)) { return false; } else { return true; }

}

// Check Permission
function is_admin() {

    $CI =& get_instance();
    
    $admin = $CI->session->userdata('permission');
    if ($admin != 1) { return false; } else { return true; }

}

// Set Timezone
date_default_timezone_set('Asia/Ho_Chi_Minh'); 

// Load site configuration
    
function load_options() {

    $ci=& get_instance();
    $ci->load->database(); 
    $ci->db->from('lex_config');
    $query = $ci->db->get();
    $options = $query->row(); 
    return $options;

}

// Check User Activity    
function user_activity() {

    $ci=& get_instance();
    $ci->load->database(); 
    $log = $ci->session->userdata('loggedin');
    
    if($log) {        
        $date = date('Y-m-d H:i:s');
        $uid = $ci->session->userdata('userID');                 
           
        $ci->db->set('la_time', $date);
        $ci->db->where('la_user_id', $uid);
        $ci->db->update('lex_last_activity');        
    }
}