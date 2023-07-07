<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Dashboard extends CI_Controller{

    function __construct(){
        parent :: __construct();
    }

    public function index(){
        $data['judul'] = "Beranda";
        $this->load->view('header', $data);
        $this->load->view('home', $data);
        $this->load->view('footer', $data);
    }
    public function produk(){
        $data['judul'] = "Produk";
        $this->load->view('header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('footer', $data);
    }
    public function kontak(){
        $data['judul'] = "Hubungi Kami";
        $this->load->view('header', $data);
        $this->load->view('kontak', $data);
        $this->load->view('footer', $data);
    }

    public function tentang(){
        $data['judul'] = "Tentang Kami";
        $this->load->view('header', $data);
        $this->load->view('tentang', $data);
        $this->load->view('footer', $data);
    }
}