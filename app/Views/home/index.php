<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid bg-light">
  <section class="container">
    <div class="row">
      <div class="col mb-4">
        <h2>Ini Page Home</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate iure officiis minus laudantium consequuntur quas ea ab dolorem sapiente ipsa voluptatem ut magni a et possimus aspernatur, quod tenetur cumque neque atque cum eum dolor fugit asperiores. Molestiae eos deleniti modi excepturi voluptatum sit veritatis, amet quo quos, delectus nesciunt, iusto itaque ad doloremque adipisci at dolorum nam? Facilis, repellat.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <img src="<?= base_url(); ?>/img/create.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-dark">
            <h4 class="card-title text-success">CREATE</h4>
            <p class="text-light">Membuat Data Baru / Yang Sudah Ada</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="<?= base_url(); ?>/img/read.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-info">READ</h5>
            <p class="text-light">Membaca Data Baru / Yang Sudah Ada</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="<?= base_url(); ?>/img/update.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-danger">UPDATE</h5>
            <p class="text-light">Memperbarui Data Yang Sudah Ada</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="<?= base_url(); ?>/img/delete.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-warning">DELETE</h5>
            <p class="text-light">Menghapus Data Yang Sudah Ada</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="penerapan container">
    <div class="row my-4">
      <div class="col">
        <div class="row">
          <h2>Penerapan MVC</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="card">
          <img src="<?= base_url(); ?>/img/patchoulimodel2.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-primary">MODEL</h5>
            <p class="text-light">Menyediakan Data yang akan di olah
              Pengolahan Model Dengan Database SQL / API Server</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <img src="<?= base_url(); ?>/img/yukariranview.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-info">VIEW</h5>
            <p class="text-light">Membuat Tampian Dari Controller</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <img src="<?= base_url(); ?>/img/alicecontroller.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-warning">CONTROLLER</h5>
            <p class="text-light">Alur Dari Pengendali Web</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="db-manager">
    <div class="row">
      <div class="col"></div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>