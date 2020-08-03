<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
  <div class="container">
    <a class="navbar-brand" href="/home">Kangin Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>/pages/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>/pages/services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>/pages/contact">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Komik
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?=base_url() ?>/komik/">Kumpulan Komik</a>
            <a class="dropdown-item" href="<?=base_url() ?>/komik/create/">Tambah Komik</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>/orang">Orang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>