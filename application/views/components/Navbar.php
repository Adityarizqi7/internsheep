<nav class="navbar sticky-top navbar-expand-md bg-white shadow-sm px-2 py-3">
  <div class="container-fluid">
    <a href="<?php echo base_url(); ?>" class="d-flex align-items-center text-dark text-decoration-none">
        <img src="assets/image/icon.png" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation_bar" aria-controls="navigation_bar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse montserrat mt-3 mt-md-0" id="navigation_bar">
      <ul class="navbar-nav ms-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>pengajuan">Pengajuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>cek-laporan">Cek Laporan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>