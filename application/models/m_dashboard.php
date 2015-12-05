<?php
if (!defined('BASEPATH')) exit ('Hacking Attempt : Keluar dari sistem');

class M_dashboard extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function latestPost()
    {
        
        $query = $this->db->query("select * from berita order by tanggal DESC limit 3 ");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        else return false;
        
    }
    
    public function latestComment()
    {
        
        $query = $this->db->query("select * from komentar order by tgl DESC limit 3 ");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        else return false;
        
    }
}
?>