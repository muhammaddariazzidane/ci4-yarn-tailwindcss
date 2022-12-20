<?= $this->extend('layouts/template') ?>
<?= $this->section('login') ?>

<form action="<?= base_url('auth/login') ?>" method="post">
  <div class="card flex-shrink-0 mx-auto justify-center mt-28 w-full max-w-sm shadow-2xl bg-base-100">
    <div class="card-body">
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
        <a href="/auth/register" class="label-text-alt link link-hover">belum punya akun? <span class="underline font-semibold">Register</span></a>
      </label>
    </div>
  </div>

</form>
<?= $this->endSection() ?>