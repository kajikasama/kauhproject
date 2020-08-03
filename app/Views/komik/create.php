<?= $this->extend('template/template') ?>

<?= $this->section('content') ?>

<div class="container">
  <div class="row">
    <div class="col-8">
      <h2 class="my-3">Form Tambah Data</h2>
      <form action="/komik/save" method="post">
        <?= csrf_field(); ?>
        <div class="form-group row">
          <label for="Judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input autofocus type="text" class="form-control" id="Judul" name="JudulKomik">
          </div>
        </div>
        <div class="form-group row">
          <label for="Penulis" class="col-sm-2 col-form-label">Penulis</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Penulis" name="Penulis">
          </div>
        </div>
        <div class="form-group row">
          <label for="Penerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Penerbit" name="Penerbit">
          </div>
        </div>
        <div class="form-group row">
          <label for="Sampul" class="col-sm-2 col-form-label">Sampul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Sampul" name="Sampul">
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