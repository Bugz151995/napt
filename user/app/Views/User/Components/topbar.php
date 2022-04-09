<div class="sticky-top">
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a role="button" id="sidebar-toggle" class="link-secondary d-md-none d-block">
        <i id="sidebar-toggle-icon" class="bx bx-fw px-0 bx-menu animate__animated"></i>
      </a>

      <a id="navbar-brand" class="navbar-brand mx-auto mx-md-0 d-flex align-items-center" href="<?= base_url() ?>">
        <img src="<?= base_url() ?>/assets/images/logo.png" alt="" width="19" class="shadow-sm rounded-circle d-inline-block align-text-top me-2">

        <h1 class="navbar-brand-title pb-0 mb-0 d-inline-block">
          Numisworks Auction
        </h1>
      </a>

      <?php if (session()->get('is_logged_in')) : ?>

        <div class="btn-group">
          <a id="topbar-dropdown-btn" class="btn btn-sm" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?= base_url() ?>/assets/images/avatar.png" width="23" alt="">
          </a>
          <?= $this->include('User/Components/topbar_dropdown') ?>
        </div>

      <?php else : ?>

        <a href="<?= base_url() ?>/login" id="" class="btn btn-sm btn-primary text-decoration-none d-none d-md-block">Log-in
        </a>

      <?php endif ?>
    </div>
  </nav>

  <ul id="topbar-nav" class="nav small bg-dark d-md-flex d-none justify-content-center">
    <li class="nav-item">
      <a href="<?= base_url() ?>" class="nav-link <?= (end($page) === '') ? 'active' : null ?>">
        <span class="topbar-text">Home</span>
      </a>
    </li>

    <li class="nav-item">
      <a href="<?= base_url() ?>/auctions" class="nav-link <?= (end($page) === 'auctions') ? 'active' : null ?>">
        <span class="topbar-text">Auctions</span>
      </a>
    </li>

    <li class="nav-item">
      <a href="<?= base_url() ?>/about_us" class="nav-link <?= (end($page) === 'about_us') ? 'active' : null ?>">
        <span class="topbar-text">About Us</span>
      </a>
    </li>
  </ul>
</div>