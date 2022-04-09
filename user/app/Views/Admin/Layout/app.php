<?= $this->extend('Admin/Layout/main') ?>

<?= $this->section('root') ?>

<header>

  <?= $this->include('Admin/Components/topbar') ?>

  <?= $this->include('Admin/Components/sidebar') ?>

</header>

<main id="app" class="d-block">

  <?= $this->include('Admin/Components/breadcrumbs') ?> 

  <?= $this->renderSection('content') ?>

</main>

<footer id="footer" class="d-block">

  <?= $this->include('Admin/Components/footer') ?>

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