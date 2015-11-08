<?php
if (!defined('BASEPATH')) exit ('Hacking Attempt : Keluar dari sistem');

class M_data extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

   public function jumData($id){
    $query = $this->db->query("select * from data_prodi where kode_prodi='$id'");
    $jumlah = $query->num_rows();
    return $jumlah;   
   }
    
    public function inputDataProdi($data){
        $this->db->insert('data_prodi', $data);
        if($this->db->affected_rows > 0){
            return true;
        }    
        else{
            return false;
        }    
   }
    
    public function detailProdi($kode){
        $result = $this->db->query("select prodi.nama as prodi, fakultas.nama as fakultas from prodi, fakultas where prodi.kode_fakultas=fakultas.kode and prodi.kode='$kode'");
        
        if($result->num_rows() > 0){
            return $result->row();
        }
        else{
            return null;
        }
    }
    
    public function cekStatus($kode, $dokumen, $tabel){
        $result = $this->db->query("select * from $tabel where kode_prodi='$kode' and keterangan='$dokumen'");
        
          if($result->num_rows() > 0){
            return "<span style='color:green'>Dokumen telah di upload</span>";
        }
        else{
            return "<span style='color:red'>Dokumen belum di upload</span>";
        }
    }
}
?>