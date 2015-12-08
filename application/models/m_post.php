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
    
}
?>