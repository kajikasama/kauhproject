<?= $this->extend('template/template') ?>

<?= $this->section('content') ?>

<div class="container">
  <div class="row mb-2">
    <h2>Kumpulan Komik</h2>
  </div>
  <div class="row mb-4">
    <a class="btn btn-success" href="<?= base_url() ?>/komik/create">Tambah Data Komik</a>
  </div>
  <div class="row">
    <div class="col">
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= session()->getFlashdata('pesan') ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="row">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Sampul</th>
          <th scope="col">Judul</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($komik as $k) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td>
              <img class="sampul" src="<?= base_url() ?>/img/komik/<?= $k['Sampul']; ?>">
            </td>
            <td><?= $k['JudulKomik'] ?></td>
            <td><a href="/komik/<?= $k['Slug']; ?>" class="btn btn-success">Detail</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?= $this->endSection(); ?>