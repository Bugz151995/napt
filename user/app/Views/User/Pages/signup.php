<?= $this->extend('User/Layout/main') ?>

<?= $this->section('root') ?>

<div id="sign-up-container">
  <div class="row g-0 h-100">

    <div class="col-lg-5 py-5 d-flex flex-column justify-content-center align-items-center">
      <div class="login-brand mb-3 pb-4 px-4 text-center">
        <a class="text-decoration-none link-dark me-0 d-flex justify-content-center" href="<?= base_url() ?>">
          <img src="<?= base_url() ?>/assets/images/2_2021NAPT.png" alt="" width="100">
        </a>
        <p class="mt-4">Kindly fill up the form to connect with us.</p>
      </div>

      <?php
      $wasValidated    = (isset($validation)) ? 'was-validated' : null;
      $usernameError   = (isset($validation) && $validation->hasError('username')) ? $validation->getError('username') : null;
      $passwordError   = (isset($validation) && $validation->hasError('password')) ? $validation->getError('password') : null;
      $usernameInvalid = (isset($usernameError)) ? 'is-invalid' : null;
      $passwordInvalid = (isset($passwordError)) ? 'is-invalid' : null;
      $attribute = [
        'class' => 'text-center px-4 needs-validation ' . $wasValidated,
        'novalidate' => ''
      ];
      ?>

      <?= form_open('sign-up', $attribute) ?>

      <div class="row row-cols-1 gap-3">
        <div class="col d-flex justify-content-center">
          <div class="min-width-300">
            <input value="<?= set_value('fname') ?>" type="text" class="form-control" style="text-indent: 10px" id="fname" name="fname" placeholder="First name" required>
            <div class="invalid-feedback text-start ps-2">
              <i class="bx bx-error-alt bx-fw"></i>
              Please provide a first name.
            </div>
          </div>
        </div>

        <div class="col d-flex justify-content-center">
          <div class="min-width-300">
            <input value="<?= set_value('lname') ?>" type="text" class="form-control" style="text-indent: 10px" id="lname" name="lname" placeholder="Last name" required>
            <div class="invalid-feedback text-start ps-2">
              <i class="bx bx-error-alt bx-fw"></i>
              Please provide a last name.
            </div>
          </div>
        </div>

        <div class="col d-flex justify-content-center">
          <div class="min-width-300">
            <input value="<?= set_value('street') ?>" type="text" class="form-control" style="text-indent: 10px" id="street" name="street" placeholder="House #, Block #, Street...">
          </div>
        </div>

        <div class="col d-flex justify-content-center">
          <div class="min-width-300">
            <input value="<?= set_value('city_mun') ?>" type="text" class="form-control" style="text-indent: 10px" id="city_mun" name="city_mun" placeholder="City/Municipality" required>
            <div class="invalid-feedback text-start ps-2">
              <i class="bx bx-error-alt bx-fw"></i>
              Please provide your City/Municipality.
            </div>
          </div>
        </div>

        <div class="col d-flex justify-content-center">
          <div class="min-width-300">
            <input value="<?= set_value('province') ?>" type="text" class="form-control" style="text-indent: 10px" id="province" name="province" placeholder="Province">
          </div>
        </div>

        <div class="col d-flex justify-content-center">
          <div class="min-width-300">
            <input value="<?= ($usernameError) ? null : set_value('username') ?>" type="text" class="form-control <?= $usernameInvalid ?>" style="text-indent: 10px" id="username" name="username" placeholder="Username" required>
            <div class="invalid-feedback text-start ps-2">
              <i class="bx bx-error-alt bx-fw"></i>
              <?= ($usernameError) ? $usernameError : 'Please provide a username' ?>
            </div>
          </div>
        </div>

        <div class="col d-flex justify-content-center">
          <div class="min-width-300">
            <input type="password" class="form-control <?= $passwordInvalid ?>" style="text-indent: 10px" id="password" name="password" placeholder="Password" required>
            <div class="invalid-feedback text-start ps-2">
              <i class="bx bx-error-alt bx-fw"></i>
              <?= ($passwordError) ? $passwordError : 'Please provide a password' ?>
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

      <div class="row row-cols-1 g-3 mt-3">
        <div class="col text-center">
          <input type="submit" value="Sign Up" tabindex="0" class="btn btn-primary bg-gradient px-4">
        </div>
        <div class="col text-center">
          <a href="<?= base_url() ?>/login" class="small text-decoration-none">Already have Account? Log-in</a>
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