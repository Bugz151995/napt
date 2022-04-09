<div id="sidebar" class="d-flex flex-column p-3 text-light bg-dark d-block d-md-none"> 
  <ul class="nav nav-pills flex-column flex-nowrap h-100">
    <li class="nav-item">
      <a href="<?= base_url() ?>" class="nav-link small <?= (end($page) == '') ? 'active' : null ?>" aria-current="page">
        <i class="bx bx-chevron-right bx-fw"></i>
        <span class="sidebar-text">Home</span>
      </a>
    </li>

    <li>
      <a href="<?= base_url() ?>/auctions" class="nav-link small <?= (end($page) == 'auctions') ? 'active' : null ?>">
        <i class="bx bx-chevron-right bx-fw"></i>
        <span class="sidebar-text">Auctions</span>
      </a>
    </li>

    <li>
      <a href="<?= base_url() ?>/about_us" class="nav-link small <?= (end($page) == 'about_us') ? 'active' : null ?>">
        <i class="bx bx-chevron-right bx-fw"></i>
        <span class="sidebar-text">About Us</span>
      </a>
    </li>

    <li>
      <?php if(!session()->get('is_logged_in')) : ?>

      <a href="<?= base_url() ?>/sign-up" class="small text-start nav-link">
        <i class="bx bx-chevron-right bx-fw"></i> <span class="sidebar-text">Register Now</span>
      </a>

      <?php endif ?>
    </li>

    <li>
      <?php if(!session()->get('is_logged_in')) : ?>

      <a href="<?= base_url() ?>/login" class="small text-start nav-link">
        <i class="bx bx-chevron-right bx-fw"></i> <span class="sidebar-text">Login</span>
      </a>

      <?php else : ?>

      <a href="<?= base_url() ?>/logout" class="small text-start nav-link">
        <i class="bx bx-chevron-right bx-fw"></i> <span class="sidebar-text">Log out</span>
      </a>

      <?php endif ?>
    </li>
  </ul>
</div>

<div id="sidebar-backdrop"></div>