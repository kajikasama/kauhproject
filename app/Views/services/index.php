<?=$this->extend('template/template'); ?>

<?=$this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h2>Ini Page Services</h2>
    </div>
  </div>
  <div class="row mb-5">
    <div class="col">
      <div class="card-group">
        <div class="card">
          <img src="<?= base_url(); ?>/img/alicecontroller.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Alice Margratroid</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img src="<?= base_url(); ?>/img/updatereimu.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Hakurei Reimu</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img src="<?= base_url(); ?>/img/satorikoishiview.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Komeiji Sisters</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins agoss</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?=$this->endSection(); ?>