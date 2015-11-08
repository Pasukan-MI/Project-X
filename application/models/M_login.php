<?php
if (!defined('BASEPATH')) exit ('Hacking Attempt : Keluar dari sistem');

class M_login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login_prodi($username, $password)
    {
        
        $query = $this->db->query("SELECT *
                                            from prodi 
                                            WHERE kode = '$username' 
                                            and password = '$password'");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rows) {
                $newdata = array(
                    'username' => $rows->kode,
                    'level' => 'prodi',
                    'Logged' => TRUE
                );
            }
            $this->session->set_userdata($newdata);
            return true;
        }
        return false;
    }
    
    public function login_admin($username, $password)
    {
        
        $query = $this->db->query("SELECT *
                                            from admin 
                                            WHERE username = '$username' 
                                            and password = '$password'");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rows) {
                $newdata = array(
                    'username' => $rows->user_name,
                    'email' => $rows->user_email,
                    'level' => 'admin',
                    'Logged' => TRUE
                );
            }
            $this->session->set_userdata($newdata);
            return true;
        }
        return false;
    }

    public function loggedin(){
        return (bool) $this->session->userdata('Logged');
    }


    public function getProdi(){
        $hasil = array();
        $this->db->select('*');
        $this->db->from('prodi');
        $this->db->order_by('nama', 'ASC');
        $array_keys_value = $this->db->get();
        foreach($array_keys_value->result() as $row){
            $hasil[0] = "--- Pilih Prodi ---";
            $hasil[$row->kode] = $row->nama;
        }
        return $hasil;
    }
}
?>