<?= $this->extend('User/Layout/main') ?>

<?= $this->section('root') ?>

<div id="login-container">
  <div class="row g-0 h-100">

    <div class="col-lg-5 py-5 d-flex flex-column justify-content-center align-items-center">
      <div class="login-brand pb-3 px-5 text-center">
        <a class="text-decoration-none link-dark me-0 d-flex justify-content-center" href="<?= base_url() ?>">
          <img src="<?= base_url() ?>/assets/images/2_2021NAPT.png" alt="" width="100" class="d-flex justify-self-center">
        </a>
        <div class="min-width-300">
          <p class="mt-4 "><span class="text-success">Good Day</span>! Kindly Enter your User credentials to login to your account.</p>
        </div>
      </div>

      <?php
      $wasValidated    = (isset($validation)) ? 'was-validated' : null;
      $usernameError   = (isset($validation) && $validation->hasError('username')) ? $validation->getError('username') : null;
      $passwordError   = (isset($validation) && $validation->hasError('password')) ? $validation->getError('password') : null;
      $usernameInvalid = (isset($usernameError)) ? 'is-invalid' : false;
      $passwordInvalid = (isset($passwordError)) ? 'is-invalid' : false;

      $attribute = [
        'class' => 'text-center px-4 needs-validation ' . $wasValidated,
        'novalidate' => ''
      ];
      ?>

      <?= form_open('login', $attribute) ?>

      <div class="row row-cols-1 gap-3 px-5">

        <div class="col d-flex justify-content-center">
          <div class="min-width-300">
            <div class="input-group">
              <span class="input-group-text bg-white"><i class="fas fa-user"></i></span>
              <input value="<?= ($usernameInvalid) ? null : set_value('username') ?>" type="text" class="form-control <?= $usernameInvalid ?>" style="text-indent: 10px" id="username" name="username" placeholder="Username" required>
              <div class="invalid-feedback text-start ps-2">
                <i class="bx bx-error-alt bx-fw"></i>
                <?= ($usernameError) ? $usernameError : 'Please provide a username' ?>
              </div>
            </div>
          </div>
        </div>


        <div class="col d-flex justify-content-center">
          <div class="min-width-300">
            <div class="input-group">
              <span class="input-group-text bg-white"><i class="fas fa-lock"></i></span>
              <input type="password" class="form-control <?= $passwordInvalid ?>" style="text-indent: 10px" id="password" name="password" placeholder="Password" required>
              <div class="invalid-feedback text-start ps-2">
                <i class="bx bx-error-alt bx-fw"></i>
                <?= ($passwordError) ? $passwordError : 'Please provide a password' ?>
              </div>
            </div>
          </div>
        </div>


        <div class="col d-flex justify-content-center">
          <div class="min-width-300">
            <div class="form-check text-start small ms-2">
              <input class="form-check-input" type="checkbox" value="" id="password-visibility">
              <label class="form-check-label small" for="password-visibility">
                Show Password
              </label>
            </div>
          </div>
        </div>

      </div>

      <div class="row row-cols-1 g-3 justify-content-center align-items-center mt-4 px-lg-3 px-xl-5">
        <div class="col text-center">
          <input type="submit" value="Login" class="btn btn-primary bg-gradient px-5">
        </div>
        <div class="col text-center">
          <a href="<?= base_url() ?>/sign-up" class="small text-decoration-none">Dont have Account? Sign-up</a>
        </div>
      </div>

      <?= form_close() ?>
    </div>

    <div id="login-background-container" class="col-lg-7 d-none d-lg-block">
      <img src="<?= base_url() ?>/assets/images/1_2021NAPT.png" alt="" class="login-background">
    </div>


  </div>
</div>

<?= $this->endSection() ?>