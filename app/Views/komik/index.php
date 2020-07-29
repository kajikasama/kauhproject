<?= $this->extend('template/template') ?>

<?= $this->section('content') ?>

<div class="container">
  <div class="row mb-3">
    <h2>Kumpulan Komik</h2>
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
            <td><a href="" class="btn btn-success">Detail</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?= $this->endSection(); ?>