<?php
if (!defined('BASEPATH')) exit ('Hacking Attempt : Keluar dari sistem');

class M_login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function login_admin($username, $password)
    {
        
        $query = $this->db->query("SELECT *
                                            from user
                                            WHERE nama = '$username' 
                                            and password = '$password'");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rows) {
                $newdata = array(
                    'username' => $rows->nama,
                    'email' => $rows->email,
                    //'level' => $rows->level,
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

}
?>