<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h2>Ini Page Contact</h2>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="row">
        <div class="card" style="width: 18rem;">
          <img src="<?=base_url() ?>/img/chandra.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?=$nama; ?></h5>
            <p class="card-text">Alamat : <?=$alamat ?>
            Umur : <?=$umur ?></p>
            <a href="#" class="btn btn-success">Go somewhere</a>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>