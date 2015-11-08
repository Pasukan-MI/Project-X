<?php
if (!defined('BASEPATH')) exit ('Hacking Attempt : Keluar dari sistem');
$this->load->view('layout_login/header');
$this->load->view("komponen/$konten");
$this->load->view('layout_login/footer');
?>