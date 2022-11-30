<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <h2 class="mt-2">Tabel Pelanggan</h2>
      <br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Id</th>
            <th scope="col">Nama Pelanggan</th>

          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($pelanggan as $p) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <th scope="row"><?= $p['id_pelanggan']; ?></th>
              <td><?= $p['nama_pelanggan']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>