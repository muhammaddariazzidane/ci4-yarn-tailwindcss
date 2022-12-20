<?= $this->extend('layouts/template') ?>
<?= $this->section('register') ?>

<form action="<?php echo base_url('auth/register') ?>" method="post" class="w-full px-6 flex-wrap mt-20">
  <label for="name">Name</label>
  <input class="input input-bordered input-primary w-full max-w-xs" type="text" name="name" id="name">
  <label for="email">Email</label>
  <input class="input input-bordered input-primary w-full max-w-xs" type="email" name="email" id="email">
  <label for="password">Password</label>
  <input class="input input-bordered input-primary w-full max-w-xs" type="password" name="password" id="password">
  <button type="submit" class="btn">Register</button>
</form>
<?= $this->endSection() ?>