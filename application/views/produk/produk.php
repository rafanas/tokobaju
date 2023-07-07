<div class="container-fluid bg-light bg-icon my-2 py-3">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <?= $this->session->flashdata('pesan'); ?>
                <h1 class="display-5 mb-3">Produk Kami</h1>
                <p>Berikut adalah beberapa kategori Produk yang ada di Toko Kami</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="<?php echo base_url()?>assets/img/ok.jpg" alt="">
                        <h4 class="mb-3">Seragam Sekolah</h4>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="<?php echo base_url().'user/seragam_sekolah'?>">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="<?php echo base_url()?>assets/img/topi.jpg" alt="">
                        <h4 class="mb-3">Accessoris Sekolah</h4>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="<?php echo base_url().'user/accesoriess_sekolah'?>">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="<?php echo base_url()?>assets/img/prm.jpg" alt="">
                        <h4 class="mb-3">Peralatan Pramuka</h4>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="<?php echo base_url().'user/peralatan_pramuka'?>">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>