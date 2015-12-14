<?php
if (!defined('BASEPATH')) exit ('Hacking Attempt : Keluar dari sistem');

class M_post extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function list_post()
    {
        $query = $this->db->query("select * from berita order by tanggal DESC");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        else return false;
    }
    
    public function get_by_id($id)
    {
        $this->db->from('berita');
        $this->db->where('id_berita',$id);
        $query = $this->db->get();
 
        return $query->row();
    }
    
     public function save($data)
    {
       
        if($this->db->insert('berita', $data)){
            return true;
        }
        else{
            return false;
        }
    }
    
    public function update($data, $id){
        $this->db->where('id_berita', $id);
        if($this->db->update('berita', $data)){
            return true;
        }
        else{
            return false;
        }
        
    }
    
    public function delete($id){
        $this->db->where('id_berita', $id);
        $this->db->delete('berita');
    }
    
     public function list_category()
    {
         $result = array();
        $query = $this->db->query("select * from kategori order by nama_kategori ASC");
        if ($query->num_rows() > 0) {
            $result[0] = "--Pilih Kategori--";
            foreach($query->result() as $r){
                $result[$r->id_kategori] = $r->nama_kategori;
            }
            return $result;
        }
        else return false;
    }
}
?>