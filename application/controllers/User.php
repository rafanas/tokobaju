<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Profil Saya';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('footer');
    }

    public function ubahProfil()
    {
        $data['judul'] = 'Ubah Profil';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', ['required' => 'Nama tidak Boleh Kosong']);

        if ($this->form_validation->run() == false) {
            $this->load->view('user/userheader', $data);
            $this->load->view('user/ubahprofile', $data);
            $this->load->view('footer');
            }
            else {
                $nama = $this->input->post('nama', true);
                $email = $this->input->post('email', true);
                //jika ada gambar yang akan diupload
                $upload_image = $_FILES['image']['name'];

                if ($upload_image) {
                    $config['upload_path'] = './assets/img/profile/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '300000';
                    $config['max_width'] = '10024';
                    $config['max_height'] = '10000';
                    $config['file_name'] = 'pro' . time();
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('image')) {$gambar_lama = $data['user']['image'];
                        if ($gambar_lama != 'default.jpg') {unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                        }       
                        $gambar_baru = $this->upload->data('file_name');
                        $this->db->set('image', $gambar_baru);
                    } 
                    else { }
                }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Profil Anda Berhasil di Ubah.
            </div>');
            redirect('user');
        }
    }
    public function home(){
        $data['judul'] = "Home";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('user/userhome', $data);
        $this->load->view('footer', $data);
    }
    public function produk(){
        $data['judul'] = "Produk";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('footer', $data);
    }
    public function kontak(){
        $data['judul'] = "Hubungi Kami";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('kontak', $data);
        $this->load->view('footer', $data);
    }
    public function tentang(){
        $data['judul'] = "Tentang Kami";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('Tentang', $data);
        $this->load->view('footer', $data);
    }
    public function seragam_sekolah(){
        $data['judul'] = "Seragam Sekolah";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->ModelBarang->dataPria()->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('produk/seragam_sekolah', $data);
        $this->load->view('footer', $data);
    }
    public function accesoriess_sekolah(){
        $data['judul'] = "Accesoriess Sekolah";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->ModelBarang->dataWanita()->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('produk/accesoriess_sekolah', $data);
        $this->load->view('footer', $data);
    }
    public function peralatan_pramuka(){
        $data['judul'] = "Peralatan Pramuka";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->ModelBarang->dataAnak()->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('produk/peralatan_pramuka', $data);
        $this->load->view('footer', $data);
    }
    public function keranjang($id){
        $produk = $this->ModelBarang->find($id);
        $data = array(
            'id' => $produk->id,
            'qty' => 1,
            'price' => $produk->harga,
            'name' => $produk->barang
        );
        $this->cart->insert($data);
        redirect('user/produk');
    }

    public function detailKeranjang(){
        $data['judul'] = "Keranjang";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('produk/cart', $data);
        $this->load->view('footer', $data);
    }
    public function hapusKeranjang(){
        $this->cart->destroy();
        redirect('user/produk');
    }

    public function pembayaran(){
        $data['judul'] = "Check Out Keranjang";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('produk/checkout', $data);
        $this->load->view('footer', $data);
    }
    public function proses(){
        $data['judul'] = "Proses Pemesanan";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $is_processed = $this->ModelFaktur->index();
        if($is_processed){
            $this->cart->destroy();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" align="center" role="alert">Selamat! Pesanan Anda berhasil di proses!.</div>');
            redirect('user/produk');
        }
        else{
            echo "Maaf, Pesanan Anda Gagal di Proses. Silahkan Coba Lagi Ya!!";
        }
    }
}