<?php
/**
 * Author by Razinal Rahmat
 * CMS Oprekan v1.0
 * under GNU/GPL license
 */
class Admin_Controller extends MY_Controller {
	
	function __construct() {
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');        
        $this->load->library('session');
        $this->load->model('M_login');
        
        //cek login
        $exception_uris = array ('C_login/proses_logout', 'login', 'C_login/proses_login');
        if (in_array(uri_string(), $exception_uris)== FALSE) {
            if ($this->M_login->loggedin() == FALSE) {
                redirect('login');
            }
            elseif(uri_string()=='admin/beranda' && $this->session->userdata('level') != 'admin'){
                redirect('login');
            }
        }
	}	
}
?>