<section class="vh-120 mt-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="<?php echo base_url()?>assets/img/men.jpg" class="img-fluid" alt="Sample image" style="margin-left:8rem; width:80;">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <h2 class="mb-3"> Login </h2>
        <?= $this->session->flashdata('pesan'); ?>
        <form method="post" action="<?= base_url('auth'); ?>">
          <!-- Email input -->
          <div class="form-outline mb-4">
                <input type="text" class="form-control form-lg" placeholder="Email" value="<?= set_value('email'); ?>" id="email" name="email">
                <?= form_error('email', '<small class="alert-danger">', '</small>'); ?>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
                <input type="password"  class="form-control form-lg" placeholder="Password" id="password" name="password">
                <?= form_error('password', '<small class="alert-danger">', '<small>'); ?>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->

          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Login">
            <p class="small fw-bold mt-5 pt-1 mb-0">Belum Punya Akun? <a href="<?php echo base_url().'auth/registrasi'?>" class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill">Daftar Sekarang</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>