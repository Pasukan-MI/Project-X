<?php
if (!defined('BASEPATH')) exit ('Hacking Attempt : Keluar dari sistem');

class M_user extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function list_user()
    {
        $query = $this->db->query("select * from users order by nama_kategori ASC");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        else return false;
    }
    
    public function get_by_id($id)
    {
        $this->db->from('kategori');
        $this->db->where('id_kategori',$id);
        $query = $this->db->get();
 
        return $query->row();
    }
    
     public function save($data)
    {
       
        if($this->db->insert('kategori', $data)){
            return true;
        }
        else{
            return false;
        }
    }
    
    public function update($data, $id){
        $this->db->where('id_kategori', $id);
        if($this->db->update('kategori', $data)){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    public function delete($id){
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }
}
?>