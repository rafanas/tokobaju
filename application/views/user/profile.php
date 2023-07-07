<section class="container-fluid container-xxl py-6 mt-5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>"
                            class="custom-text-box-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                         <?= $this->session->flashdata('pesan'); ?>
                            <h2 class="mb-5 ms-5">Profil</h2>

                            <h5 class="mb-3 ms-5"><?= $user['nama']; ?></h5>

                            <p class="mb-3 ms-5">Email : <?= $user['email']; ?></p><br>
                            <p class="mb-3 ms-5">Jadi member sejak: <br><b><?= date('d F Y', $user['tanggal_input']); ?></b></p>
                            <br>
                            <a href="<?= base_url('user/ubahprofil'); ?>"class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill ms-5"> Ubah Profil</a>
                        </div>

                </div>
            </div>
</section>