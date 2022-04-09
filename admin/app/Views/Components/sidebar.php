<div id="sidebar" class="d-flex flex-column text-dark bg-light shadow">
  <a id="sidebar-brand" class="bg-white link-dark d-md-flex d-none navbar-brand me-0 px-3 d-flex align-items-center animate__animated animate__flipInX animated__faster" href="<?= base_url() ?>">
    <img src="<?= base_url() ?>/assets/images/logo.png" alt="" width="19" class="shadow-sm rounded-circle d-inline-block align-text-top me-2">
    <h1 class="navbar-brand-title fst-italic pb-0 mb-0 d-inline-block">
      Numisworks Auction
    </h1>
  </a>

  <ul class="p-3 nav nav-pills flex-column flex-nowrap h-100">
    <li>
      <a href="<?= base_url() ?>/inventory" class="nav-link small <?= (end($page) === 'inventory') ? 'active' : null ?>">
        <i class="bx bx-chevron-right bx-fw"></i>
        <span class="sidebar-text">Inventory</span>
      </a>
    </li>

    <li>
      <a href="<?= base_url() ?>/users" class="nav-link small <?= (end($page) === 'users') ? 'active' : null ?>">
        <i class="bx bx-chevron-right bx-fw"></i>
        <span class="sidebar-text">Users</span>
      </a>
    </li>

    <li class="mt-auto small">
      <hr>
      <a href="<?= base_url() ?>" class="text-center nav-link small">
        <i class="bx bx-copyright bx-fw"></i> 2021 <br>
        Numisworks Auction Product Trading
      </a>
    </li>
  </ul>
</div>