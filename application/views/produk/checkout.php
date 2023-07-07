<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown"><?php echo $judul; ?></h1>
    </div>
</div>
<!-- Page Header End -->
<section class="vh-100 mt-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="<?php echo base_url()?>assets/img/logo.png" class="img-fluid" alt="Sample image" style="margin-left:10rem; width:50%;">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <h2 class="mb-3">  
            <?php $grand_total = 0;
                            if ($keranjang = $this->cart->contents())
                            {
                                foreach ($keranjang as $item)
                                {
                                    $grand_total = $grand_total + $item['subtotal'];
                                }
                            echo "Total Belanja Anda : Rp. " .number_format($grand_total, 0, ',', '.');
                            ?></h2>
                    <h2 class="mt-3 mb-3">Form Pembayaran</h2>
                    <form method="post" action="<?= base_url('user/proses'); ?>">
                    <div class="form-outline mb-3 col-lg-10">
                        <input type="text" class="form-control form-lg" placeholder="Nama Lengkap" id="nama" name="nama">
                    </div>
                    <div class="form-outline mb-3 col-lg-10">
                        <input type="text"  class="form-control form-lg" placeholder="Alamat Lengkap" id="alamat" name="alamat">
                    </div>
                    <div class="form-outline mb-3 col-lg-10">
                        <input type="text"  class="form-control form-lg" placeholder="Nomor Telepon" id="no_telepon" name="no_telepon">
                    </div>
                    <div class="form-outline mb-3 col-lg-10">
                        <select class="form-control form-lg" placeholder="Pengiriman">
                            <option>Pengiriman</option>
                            <option>JNT</option>
                            <option>TIKI</option>
                            <option>Pos Indonesia</option>
                            <option>Gojek</option>
                            <option>Grab</option>
                        </select>
                    </div>
                    <div class="form-outline mb-3 col-lg-10">
                        <select class="form-control form-lg" placeholder="Pembayaran">
                            <option>Pembayaran</option>
                            <option>BCA</option>
                            <option>MANDIRI</option>
                            <option>BNI</option>
                            <option>GOPAY</option>
                            <option>OVO</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <input type="submit" class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" value="Pesan">
                    </div>
                    </form>
                    <?php }
                    else {
                        echo "Keranjang Belanja Anda Masih Kosong"; 
                    } ?>
                    </div>
                </div>
                </section>
