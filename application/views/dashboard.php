<?php
if (!defined('BASEPATH')) exit ('Hacking Attempt : Keluar dari sistem');
$this->load->view('dashboard/header');
$this->load->view('dashboard/sidebar');
$this->load->view("komponen/$konten");
$this->load->view('dashboard/footer');
?>