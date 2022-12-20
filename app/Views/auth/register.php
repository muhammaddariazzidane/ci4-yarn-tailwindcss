<?= $this->extend('layouts/template') ?>
<?= $this->section('register') ?>

<form action="<?php echo base_url('auth/register') ?>" method="post">
  <div class="card flex-shrink-0 mx-auto justify-center mt-20 w-full max-w-sm shadow-2xl bg-base-100">
    <div class="card-body">
      <div class="form-control">
        <label class="label">
          <span class="label-text">Name</span>
        </label>
        <input type="text" name="name" id="name" placeholder="email" class="input input-bordered" />
      </div>
      <div class="form-control">
        <label class="label">
          <span class="label-text">Email</span>
        </label>
        <input type="email" name="email" id="email" placeholder="email" class="input input-bordered" />
      </div>
      <div class="form-control">
        <label class="label">
          <span class="label-text">Password</span>
        </label>
        <input type="password" name="password" id="password" placeholder="password" class="input input-bordered" />
      </div>
      <div class="form-control mt-6">
        <button class="btn" type="submit">Login</button>
      </div>
      <label class="label mt-2">
        <a href="/auth/login" class="label-text-alt link link-hover">Sudah punya akun? <span class="underline font-semibold">Login</span></a>
      </label>
    </div>
  </div>

</form>
<?= $this->endSection() ?>