<?= $this->extend('User/Layout/app') ?>

<?= $this->section('content') ?>

  <?= $this->include('User/Partials/bidding/hero') ?>

  <div class="container py-5">

    <?= $this->include('User/Partials/bidding/lot_info') ?>

  </div>

<?= $this->endSection() ?>