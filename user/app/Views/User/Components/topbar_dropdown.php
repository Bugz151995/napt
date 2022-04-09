<?php 

?>
<ul id="topbar-dropdown-menu" class="dropdown-menu dropdown-menu-end p-2 border-0 shadow" aria-labelledby="topbar-dropdown-btn">
  <li>
    <a class="dropdown-item p-2 rounded rounded-3 small" href="#">
      <div class="d-flex gap-3 align-items-center">
        <div class="flex-shrink-1">
          <img src="<?= base_url() ?>/assets/images/avatar.png" width="40" alt="">
        </div>
        <div class="row row-cols-1 g-1">
          <div class="h5 m-0">
            <span><?= session()->getTempdata('fname') ?></span>
            <span><?= session()->getTempdata('lname') ?></span>
          </div>
        </div>
      </div>
    </a>
  </li>

  <li>
    <hr class="dropdown-divider">
  </li>
  <li>
    <a class="dropdown-item p-2 rounded rounded-3 small position-relative" href="<?= base_url() ?>/account">
      <i class='bx bx-user-circle bx-fw'></i> <span class="me-5">My Bids</span>
    </a>
  </li>
  <li>
    <a class="dropdown-item p-2 rounded rounded-3 small position-relative" href="<?= base_url() ?>/notifications">
      <i class='bx bx-bell bx-fw'></i> <span class="me-5">My Watchlists</span>
      <div class="badge bg-danger position-absolute end-0 me-2">99+</div>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>
  <li>
    <a class="dropdown-item p-2 rounded rounded-3 small" href="<?= base_url() ?>/logout">
      <i class='bx bx-log-out-circle bx-fw'></i> Log-out
    </a>
  </li>
</ul>