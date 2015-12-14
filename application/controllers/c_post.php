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
        $this->load->helper('fungsi');
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
        ini_set('error_reporting', E_STRICT); 
       $this->data['konten'] = 'form_post';
         $this->data['listkategori'] = $this->M_post->list_category();
       $this->data ['formPost'] = "";    
      $this->load->view('dashboard', $this->data); 
    }
    
    public function save(){
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required|xss_clean');
        $this->form_validation->set_rules('editor1', 'Isi', 'trim|required|xss_clean');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required|xss_clean');
         if($this->form_validation->run() == false){
             redirect('post/add');
         }
         else{ 
             if($this->input->post('submit') == 'update'){
                 $id = $this->input->post('id');
                 $data = array(
                    'judul' => $this->input->post('judul') ,
                    'id_kategori' => $this->input->post('kategori') ,
                    'isi_berita' => $this->input->post('editor1'),
                    'tanggal' => date('Y-m-d H:i:s') 
                );
                 $result = $this->M_post->update($data, $id);
             }
             elseif($this->input->post('submit') == 'tambah'){
                 $data = array(
                    'id_berita' => generateId('berita'),
                    'id_kategori' => $this->input->post('kategori') ,
                    'judul' => $this->input->post('judul') ,
                    'isi_berita' => $this->input->post('editor1'),
                    'tanggal' => date('Y-m-d H:i:s') 
                );
                 $result = $this->M_post->save($data);
             }
             if($result){
                 redirect('post');
             }
             
         }
    }
    
    
     public function edit($id){
        $result = $this->M_post->get_by_id($id);
         $this->data['listkategori'] = $this->M_post->list_category();
        $this->data['konten'] = 'form_post';
        $this->data['formPost'] = $result;
         $this->load->view('dashboard', $this->data);
    }
    
    public function delete(){
        foreach($this->input->post('checkbox') as $result){
           $this->M_post->delete($result);
        }
        redirect('post');
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */