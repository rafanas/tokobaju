<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown"><?php echo $judul; ?></h1>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
    <div class="container">
    <div class="row g-4">
         <?php foreach ($produk as $k) : ?>
        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="<?php echo base_url().'/assets/img/upload/'.$k->image ?>" alt="">
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href=""><?php echo $k->barang ?></a>
                                    <span class="text-primary me-1"><?php echo $k->keterangan ?> <br></span>
                                    <span class="text-body text-decoration"> Rp <?php echo number_format($k->harga, 0, ',', '.') ?></span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-100 text-center py-2" align="center">
                                        <?php echo anchor('user/keranjang/' .$k->id, '<div class="text-body"><i class="fa fa-shopping-bag text-primary me-2"></i>Tambah ke Keranjang</div>') ?>
                                    </small>
                                </div>
                            </div>
        </div>
        <?php endforeach ?>
    </div>
    </div>
</div>