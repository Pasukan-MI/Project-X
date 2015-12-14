<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_user extends Admin_Controller {

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
        $this->load->model('M_user');
        $this->load->helper('fungsi');
    }
    
	public function index()
	{
        $this->data['konten'] = 'kategori';
        $this->data['listuser'] = $this->M_kategori->list_user();
        $this->load->view('dashboard', $this->data);
	}
    
     public function add(){
        ini_set('error_reporting', E_STRICT); 
       $this->data['konten'] = 'form_kategori';
       $this->data ['formKategori'] = "";    
      $this->load->view('dashboard', $this->data); 
    }
    
    public function save(){
         $this->form_validation->set_rules('nm_kategori', 'KategoriS', 'trim|required|xss_clean');
         if($this->form_validation->run() == false){
             redirect('kategori/add');
         }
         else{ 
             if($this->input->post('submit') == 'update'){
                 $id = $this->input->post('id');
                 $data = array(
                   'nama_kategori' => $this->input->post('nm_kategori') ,
                   'kategori_seo' => strtolower($this->input->post('nm_kategori'))
                );
                 $result = $this->M_kategori->update($data, $id);
             }
             elseif($this->input->post('submit') == 'tambah'){
                 $data = array(
                  'id_kategori' => generateId('kategori'),
                   'nama_kategori' => $this->input->post('nm_kategori') ,
                   'kategori_seo' => strtolower($this->input->post('nm_kategori'))
                );
                 $result = $this->M_kategori->save($data);
             }
             if($result){
                 redirect('kategori');
             }
             
         }
    }
    
    
     public function edit($id){
        $result = $this->M_kategori->get_by_id($id);
        $this->data['konten'] = 'form_kategori';
        $this->data['formKategori'] = $result;
         $this->load->view('dashboard', $this->data);
    }
    
    public function delete(){
        foreach($this->input->post('checkbox') as $result){
           $this->M_kategori->delete($result);
        }
        redirect('kategori');
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */