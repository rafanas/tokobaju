<section class="container-fluid container-xxl py-6 mt-5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <?= form_open_multipart('user/ubahprofil'); ?>
                        
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="custom-text-box-image img-fluid"alt="">
                            <div class="custom-file mt-3">
                                <input type="file" class="form-control form-lg" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image"></label>
                            </div>
                        
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box" >
                            <h2 class="mb-2"> Ubah Profil</h2>
                            <p>
                                <label for="email" class="text-pad">Email</label>
                                <input type="text" class="form-control form-lg" value="<?= $user['email']; ?>" id="email" name="email" readonly>
                            </p>
                            <p>
                                <label for="nama" class="text-pad">Nama Lengkap</label>
                                <input type="text" class="form-control form-lg" value="<?= $user['nama']; ?>" id="nama" name="nama">
                                <?= form_error('nama', '<small class="alert-danger">', '</small>'); ?>
                            </p>
                            <p>
                                <input class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" type="submit" value="Ubah Profile" />
                          
                                <input class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" value="Kembali" onclick="window.history.go(-1)" style="text-align: center;">
                            </p>
                        </div>

                </div>
            </div>
</section>