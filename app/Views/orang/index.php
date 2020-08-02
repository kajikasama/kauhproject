<!-- nyambungin ke template -->
<?= $this->extend('template/template'); ?>

<!-- nama section yg akan disambungin di tamplate -->
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <h2>Kumpulan Data Orang Random</h2>
  </div>
  <div class="row">
    <div class="col">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nickname</th>
            <th scope="col">Alamat</th>
            <th scope="col">Game</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1; foreach ($orang as $o) : ?>
            <tr>
              <td scope="col"><?=$i++; ?></td>
              <td scope="col">
                <?php 
                $nickname = $o['Nickname'];
                  if($nickname == 'Kajikasama')
                  {
                    echo "<b class='text-success'>$nickname</b>";
                  }
                  else
                  {
                    echo $o['Nickname'];
                  }
                ?>
              </td>
              <td scope="col"><?=$o['Alamat'] ?></td>
              <td scope="col"><?=$o['Game'] ?></td>
              <td scope="col"><a href="<?=base_url(); ?>/orang/detail/<?=$o['Slug'] ?>" class="btn btn-success">Lihat</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection(); //aklhir section yg di tambal ?>