<?php 
$fname = session()->get('fname');
$lname = session()->get('lname');
?>
<ul id="topbar-dropdown-menu" class="dropdown-menu dropdown-menu-end p-2 border-0 shadow" aria-labelledby="topbar-dropdown-btn">
  <li>
    <a class="dropdown-item p-2 rounded rounded-3 small" href="#">
      <div class="d-flex gap-3 align-items-center">
        <div class="flex-shrink-1">
          <img src="<?= base_url() ?>/assets/images/avatar.png" width="80" alt="">
        </div>
        <div class="ro row-cols-1 g-1">
          <div>
            <span><?= $fname ?></span>
            <span><?= $lname ?></span>
          </div>
          <span class="col-auto badge bg-success">
            <i class="bx bx-check-shield me-1"></i>Administrator
          </span>
        </div>
      </div>
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