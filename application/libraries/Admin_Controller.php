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
        $exception_uris = array ('C_prodi/proses_logout', 'C_admin/proses_logout', 'prodi', 'admin', 'C_prodi/proses_login', 'C_admin/proses_login');
        if (in_array(uri_string(), $exception_uris)== FALSE) {
            if ($this->M_login->loggedin() == FALSE) {
                redirect('admin');
            }
            elseif(uri_string()=='admin/beranda' && $this->session->userdata('level') != 'admin'){
                redirect('admin');
            }
        }
	}	
}
?>