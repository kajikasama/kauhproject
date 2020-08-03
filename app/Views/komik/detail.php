<?= $this->extend('template/template') ?>

<?= $this->section('content') ?>

<div class="container">
  <div class="row">
    <div class="col">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url() ?>/home/">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url() ?>/komik/">Komik</a></li>
          <li class="breadcrumb-item active" aria-current="page"> <?= $komik['JudulKomik']; ?></li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col mb-3">
      <h2>Detail Komik</h2>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="../img/komik/<?= $komik['Sampul']; ?>" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= $komik['JudulKomik']; ?></h5>
              <p class="card-text"><b>Penulis : </b> <?= $komik['Penulis'] ?></p>
              <p class="card-text"><small class="text-muted"><b>Penerbit: </b><?= $komik['Penerbit']; ?></small></p>
              <a href="" class="btn btn-warning">Edit</a>
              <a href="" class="btn btn-danger">Delete</a>
              <br><br>
              <a href="<?= base_url() ?>/komik/" class="">Kembali Ke Daftar Komik</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>