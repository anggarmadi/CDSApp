<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <a href="/menu/create" class="btn btn-success mt-3">Tambah Menu</a>
      <h2 class="mt-2">Tabel Menu</h2>
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>
      <br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Menu</th>
            <th scope="col">Nama Menu</th>
            <th scope="col">Harga Satuan</th>
            <th scope="col">Aksi</th>

          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($menu as $p) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <th scope="row"><?= $p['kd_menu']; ?></th>
              <td><?= $p['nama_menu']; ?></td>
              <td><?= $p['harga']; ?></td>
              <td>
                <a href="" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>