<?= $this->extend('template/template') ?>

<?= $this->section('content') ?>

<div class="container">
  <div class="row">
    <div class="col">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url() ?>/home/">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url() ?>/komik/">Komik</a></li>
          <li class="breadcrumb-item active" aria-current="page">Tambah Data Komik</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col-10">
      <h2 class="mb-4">Form Tambah Data</h2>
      <form action="/komik/save" method="post">
        <?= csrf_field(); ?>
        <div class="form-group row">
          <label for="Judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input autocomplete="off" autofocus type="text" class="form-control <?= ($validation->hasError('JudulKomik') ? 'is-invalid' : '') ?>" id="Judul" name="JudulKomik">
            <div class="invalid-feedback" value="<?= old('JudulKomik'); ?>">
              <?= $validation->getError('JudulKomik'); ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="Penulis" class="col-sm-2 col-form-label">Penulis</label>
          <div class="col-sm-10">
            <input autocomplete="off" type="text" class="form-control <?= ($validation->hasError('Penulis') ? 'is-invalid' : '') ?>" id="Penulis" name="Penulis" value="<?= old('Penulis'); ?>">
            <div class="invalid-feedback" value="<?= old('Penulis'); ?>">
              <?= $validation->getError('Penulis'); ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="Penerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-10">
            <input autocomplete="off" type="text" class="form-control <?= ($validation->hasError('Penerbit') ? 'is-invalid' : '') ?>" id="Penerbit" name="Penerbit" value="<?= old('Penerbit'); ?>">
            <div class="invalid-feedback" value="<?= old('Penerbit'); ?>">
              <?= $validation->getError('Penerbit'); ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="Sampul" class="col-sm-2 col-form-label">Sampul</label>
          <div class="col-sm-10">
            <input autocomplete="off" type="text" class="form-control <?= ($validation->hasError('Sampul') ? 'is-invalid' : '') ?>" id="Sampul" name="Sampul" value="<?= old('Sampul'); ?>">
            <div class="invalid-feedback" value="<?= old('Sampul'); ?>">
              <?= $validation->getError('Sampul'); ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>