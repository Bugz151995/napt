<?= $this->extend('User/Layout/app') ?>

<?= $this->section('content') ?>

  <?= $this->include('User/Partials/auctions/hero') ?>

  <div class="container py-5">

    <?= $this->include('User/Partials/auctions/lots') ?>

  </div>

<?= $this->endSection() ?>