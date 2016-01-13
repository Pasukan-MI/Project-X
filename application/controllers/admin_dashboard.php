<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct() {
        parent::__construct();
        $this->load->model('M_dashboard');
        $this->pustaka->cek_auth();
    }
    
	public function index()
	{
        $this->data['konten'] = 'beranda';
        //$this->data['latestpost'] = $this->M_dashboard->latestPost();
        //$this->data['latestcomment'] = $this->M_dashboard->latestComment();
		$this->data['username'] = $this->session->userdata['username'];
        $this->data['email'] = $this->session->userdata['email'];
        $this->load->view('dashboard', $this->data);
	}
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */