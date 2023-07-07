<section class="vh-120 mt-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="<?php echo base_url()?>assets/img/men.jpg" class="img-fluid" alt="Sample image" style="margin-left:6rem; width:100%;">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <h2 class="mb-3"> Daftar Member Baru</h2>
        <form method="post" action="<?= base_url('auth/registrasi'); ?>">
            <div class="form-outline mb-4">
                <input type="text" class="form-control form-lg" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>" id="nama" name="nama">
                <?= form_error('nama', '<small class="alert-danger">', '</small>'); ?>
            </div>
            <div class="form-outline mb-4">
                    <input type="text" class="form-control form-lg" placeholder="Email" value="<?= set_value('email'); ?>" id="email" name="email">
                    <?= form_error('email', '<small class="alert-danger">', '</small>'); ?>
            </div>

            <div class="form-outline mb-3">
                    <input type="password"  class="form-control form-lg" placeholder="Password" id="password1" name="password1">
                    <?= form_error('password1', '<small class="alert-danger">', '<small>'); ?>
            </div>

            <div class="form-outline mb-3">
                    <input type="password"  class="form-control form-lg" placeholder="Ulangi Password" id="password2" name="password2">
                    <?= form_error('password2', '<small class="alert-danger">', '<small>'); ?>
            </div>

            <div class="d-flex justify-content-between align-items-center">

            <div class="text-center text-lg-start mt-4 pt-2">
                <input type="submit" class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Daftar">
                <p class="small fw-bold mt-5 pt-1 mb-0">Sudah Punya Akun? <a href="<?php echo base_url().'auth'?>" class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill">Login</a></p>
            </div>

        </form>
      </div>
    </div>
  </div>
</section>