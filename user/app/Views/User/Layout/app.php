<?= $this->extend('User/Layout/main') ?>

<?= $this->section('root') ?>

<header class="sticky-top">

  <?= $this->include('User/Components/topbar') ?>

  <?= $this->include('User/Components/sidebar') ?>

</header>

<main>

    <?= $this->renderSection('content') ?> 

</main>

<footer>

  <?= $this->include('User/Components/footer') ?>

</footer>

<?php if (session()->getTempdata('success')) : ?>
  <?= view_cell('\App\Libraries\Toastify::success') ?>
<?php endif ?>

<?php if (session()->getTempdata('warning')) : ?>
  <?= view_cell('\App\Libraries\Toastify::warning') ?>
<?php endif ?>

<?php if (session()->getTempdata('error')) : ?>
  <?= view_cell('\App\Libraries\Toastify::error') ?>
<?php endif ?>

<?php if (session()->getTempdata('info')) : ?>
  <?= view_cell('\App\Libraries\Toastify::info') ?>
<?php endif ?>

<?= $this->endSection() ?>