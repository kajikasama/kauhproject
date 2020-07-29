<?=$this->extend('template/template'); ?>

<?=$this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h2>Ini Page About</h2>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card my-4">
        <div class="row no-gutters">
          <div class="col-md-3">
            <img src="<?= base_url(); ?>/img/deletejacket.jpg" class="card-img" alt="...">
          </div>
          <div class="col-md-9">
            <div class="card-body">
              <h5 class="card-title">Agus "Chandra" <br /> (アグスチャンドラ)</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi amet veniam ex accusantium tenetur tempore expedita. Qui ab fugiat iusto!
                <br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, libero voluptates fugit sequi voluptate mollitia. Obcaecati saepe sunt corrupti, voluptatibus alias quia, illo aperiam ad nemo fugiat, expedita consectetur. Officia.
              </p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h2>About Touhou Project</h2>
    </div>
  </div>
</div>
<?=$this->endSection(); ?>