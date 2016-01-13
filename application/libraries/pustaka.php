<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Pustaka {
    public function cek_auth()
	{
		$this->ci =& get_instance();
		$this->ci->load->model('M_login');
        
       $exception_uris = array ('admin_login/logout', 'admin/login', 'admin_login/proses_login');
        if (in_array(uri_string(), $exception_uris)== FALSE) {
            if ($this->ci->M_login->loggedin() == FALSE) {
                redirect('admin');
                exit();
            }
            /*elseif(uri_string()=='admin/beranda' && $this->ci->session->userdata('level') != 'admin'){
                redirect('login');
                exit();
            }*/
        }
		
	}
}
?>