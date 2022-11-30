<?= $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-8">
      <h2 class="my-3">Tambah Menu</h2>
      <form action="/menu/save" method="post">
        <?= csrf_field(); ?>
        <div class="row mb-3">
          <label for="kd_menu" class="col-sm-2 col-form-label">Kode Menu</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="kd_menu" name="kd_menu" autofocus>
          </div>
        </div>
        <div class="row mb-3">
          <label for="nama_menu" class="col-sm-2 col-form-label">Nama Menu</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_menu" name="nama_menu">
          </div>
        </div>
        <div class="row mb-3">
          <label for="harga" class="col-sm-2 col-form-label">Harga Satuan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="harga" name="harga">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Menu</button>
      </form>

    </div>
  </div>
</div>
<?php $this->endSection(); ?>