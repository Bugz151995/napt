<?= $this->extend('User/Layout/app') ?>

<?= $this->section('content') ?>

  <?= $this->include('User/Partials/home/hero') ?>

  <?= $this->include('User/Partials/home/features') ?>

  <?= $this->include('User/Partials/home/services') ?>

<?= $this->endSection() ?>