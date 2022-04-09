<?= $this->extend('User/Layout/app') ?>

<?= $this->section('content') ?>

<div class="py-5 container">
  
  <?= $this->include('User/Partials/account/profile_picture') ?>
  
  <?= $this->include('User/Partials/account/bids') ?>

</div>

<?= $this->include('User/Partials/account/profile_pic_modal') ?>

<?= $this->endSection() ?>