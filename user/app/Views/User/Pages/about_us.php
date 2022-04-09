<?= $this->extend('User/Layout/app') ?>

<?= $this->section('content') ?>

  <?= $this->include('User/Partials/about_us/hero') ?>

  <?= $this->include('User/Partials/about_us/team') ?>

  <?= $this->include('User/Partials/about_us/intro') ?>

  <?= $this->include('User/Partials/about_us/mission') ?>

  <?= $this->include('User/Partials/about_us/vision') ?>

<?= $this->endSection() ?>