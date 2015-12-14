<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function generateId($table){
    $ci=& get_instance();
    $ci->load->database();
    
    $id = rand(1,999);
    $query = $ci->db->query("select * from $table where id_$table='$id'");
    if($query->num_rows > 1){
        generateId();
    }
    else{return $id;}
}