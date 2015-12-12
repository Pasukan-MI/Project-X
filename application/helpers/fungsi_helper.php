<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function generateId(){
    $ci=& get_instance();
    $ci->load->database();
    
    $id = rand(1,999);
    $query = $ci->db->query("select * from berita where id_berita='$id'");
    if($query->num_rows > 1){
        generateId();
    }
    else{return $id;}
}