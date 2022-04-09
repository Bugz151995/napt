<?= $this->extend('User/Layout/main') ?>

<?= $this->section('root') ?>

<div id="login-container">
  <div class="row g-0 h-100">

    <div id="login-background-container" class="col-lg-7 d-none d-lg-block">
      <img src="<?= base_url() ?>/assets/images/1_2021NAPT.png" alt="" class="login-background">
    </div>

    <div class="col-lg-5 py-5 d-flex flex-column justify-content-center align-items-center px-4">
      <div class="login-brand mb-5 pb-4 px-4 text-center">
        <a class="text-decoration-none d-flex justify-content-center link-dark me-0" href="<?= base_url() ?>">
          <img src="<?= base_url() ?>/assets/images/2_2021NAPT.png" alt="" width="100" class="d-flex justify-self-center">
        </a>
      </div>

      <div class="alert alert-success border-0 shadow" role="alert">
        <h4 class="alert-heading">Yey! Good Job!</h4>
        <p>You have successfully submitted your registration, you are one step away at connecting with us, login to your account now to view any auctioned lot.</p>

        <hr>

        <a href="<?= base_url() ?>/login" class="btn btn-sm btn-outline-success">
          <i class="bx bx-fw bx-chevron-right"></i> Go to login page
        </a>
        <a href="<?= base_url() ?>" class="btn btn-sm float-end btn-outline-secondary border-0">
          <i class="bx bx-fw bx-chevron-right"></i> Sign in later
        </a>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>