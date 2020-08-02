<?= $this->extend('template/template') ?>

<?= $this->section('content') ?>

<div class="container">
  <div class="row">
    <div class="col mb-3">
      <h2>Detail Orang Tersangka</h2>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card" style="">
        <div class="card-body">
          <h5 class="card-title"><?= $orang['Nickname'] ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?= $orang['NamaAsli'] ?></h6>
          <p class="card-text">
            <b>Alamat : </b><?= $orang['Alamat'] ?><br>
            <b>Kesukaan : </b><?= $orang['Kesenangan'] ?><br>
            <b>SocialMedia : </b><?= $orang['SocialMedia'] ?><br>
            <b>Game : </b><?= $orang['Game'] ?><br>
          </p>
          <a href="<?= base_url() ?>/orang/" class="card-link">Kembali Ke Daftar Tersangka</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>