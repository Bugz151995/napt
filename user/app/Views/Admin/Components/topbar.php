<div id="topbar" class="fixed-top shadow">
  <nav class="navbar navbar-light bg-white">
    <div class="container-fluid">
      <a role="button" id="sidebar-toggle" class="btn btn-sm pb-0 px-0 bg-transparent border-0 d-flex">
        <i id="sidebar-toggle-icon" class="bx bx-fw px-0 bx-menu animate__animated"></i>
      </a>

      <a id="navbar-brand" class="d-md-none d-flex navbar-brand me-0 d-flex align-items-center animate__animated animate__flipInX animated__faster" href="<?= base_url() ?>">
        <img src="<?= base_url() ?>/assets/images/logo.png" alt="" width="19" class="shadow-sm rounded-circle d-inline-block align-text-top me-2">

        <h1 class="navbar-brand-title fst-italic pb-0 mb-0 d-inline-block">
          Numisworks Auction
        </h1>
      </a>

      <a id="navbar-brand" class="d-none d-md-flex navbar-brand me-0 d-flex align-items-center animate__animated animate__flipInX animated__faster" href="<?= base_url() ?>">
        <h1 class="navbar-brand-title fst-italic pb-0 mb-0 d-inline-block">
          Numisworks Auction Administrator
        </h1>
      </a>
      
      <div class="btn-group">
        <a id="topbar-dropdown-btn" class="btn btn-sm dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="<?= base_url() ?>/assets/images/avatar.png" width="23" alt="">
        </a>
        <?= $this->include('Admin/Components/topbar_dropdown') ?>
      </div>
    </div>
  </nav>
</div>