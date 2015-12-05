<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends CI_Controller {

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
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }
    
	public function index()
	{
       if($this->M_login->loggedin() == true){
            redirect('dashboard', 'location');
        }
		$this->load->view('login_admin');
	}
    
    public function proses_login()
	{
		$username = addslashes($this->input->post('username'));
        $password = md5(addslashes($this->input->post('password')));
        
        if(empty($username) || empty($password)){
            $this->session->set_flashdata('pesan', 'Username/Password kosong');
            redirect('login', 'location');
        }
        
        $login = $this->M_login->login_admin($username, $password);
        if($this->M_login->loggedin() == true){
            redirect('dashboard', 'location');
        }
        else{
            $this->session->set_flashdata('pesan', 'Username/Password Salah');
            redirect('login', 'location');
        }
             
	}
    
    public function logout()
	{
		$this->session->sess_destroy();
        redirect('login');
             
	}
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */