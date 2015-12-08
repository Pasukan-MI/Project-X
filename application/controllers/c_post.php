<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_post extends Admin_Controller {

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
        $this->load->model('M_post');
    }
    
	public function index()
	{
        $this->data['konten'] = 'post';
        $this->data['listpost'] = $this->M_post->list_post();
		$this->data['username'] = $this->session->userdata['username'];
        $this->data['email'] = $this->session->userdata['email'];
        $this->load->view('dashboard', $this->data);
	}
    
     public function add(){
        $this->_validate();
        $data = array(
                'judul' => $this->input->post('judul'),
                'isi_berita' => $this->input->post('editor1'),
            );
        $insert = $this->person->save($data);
        echo json_encode(array("status" => TRUE));
    }
    
     public function edit($id){
        $result = $this->M_post->get_by_id($id);
        echo json_encode($result); 
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */