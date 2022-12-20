<?= $this->extend('layouts/template') ?>
<?= $this->section('login') ?>
<form action="<?php echo base_url('auth/login') ?>" method="post" class="mx-auto flex justify-center">
  <label for="email">Email</label>
  <input class="input input-bordered input-primary w-full max-w-xs" type="email" name="email" id="email">
  <br>
  <label for="password">Password</label>
  <input class="input input-bordered input-primary w-full max-w-xs" type="password" name="password" id="password">
  <br>
  <button type="submit" class="btn">Login</button>
</form>
<?= $this->endSection() ?>