<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, shrink-to-fit=no,user-scalable=0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/root.css" />

    <title>Dashboard Admin</title>

</head>

<body>
    <div id="root">
        <nav class="navbar sticky-top navbar-expand-md bg-white shadow-sm py-4" style="padding-right: 17rem; padding-left: 17rem">
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
                            <button type="button" class="me-sm-4 mb-sm-0 mb-3 button-primary text-white bg-orange-base">Log out</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div class="content montserrat">
                <form action="<?= base_url('Home/update') ?>" id="form-group" class="w-50 mx-auto">
                    <section class="mb-5 form-section">
                        <div class="heading-data d-flex gap-4 mb-4">
                            <h2 class="orange-base fw-bolder fs-5">01</h2>
                            <h2 class="fw-bolder fs-5">Data Ketua Kelompok</h2>
                        </div>
                        <div class="form-data mb-3">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="number" class="form-control" name="npm" id="npm" placeholder="190817121" aria-describedby="npm">
                        </div>
                        <div class="form-data mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="" aria-describedby="nama">
                        </div>
                        <div class="form-data mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="example@student" aria-describedby="email">
                        </div>
                    </section>
                    <section class="mb-5 form-section">
                        <div class="heading-data d-flex gap-4 mb-4">
                            <h2 class="orange-base fw-bolder fs-5">02</h2>
                            <h2 class="fw-bolder fs-5">Data Anggota 1</h2>
                        </div>
                        <div class="form-data mb-3">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="number" class="form-control" name="npm" id="npm" placeholder="190817121" aria-describedby="npm">
                        </div>
                        <div class="form-data mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="" aria-describedby="nama">
                        </div>
                        <div class="form-data mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="example@student" aria-describedby="email">
                        </div>
                    </section>
                    <section class="mb-3 form-section">
                        <div class="heading-data d-flex gap-4 mb-4">
                            <h2 class="orange-base fw-bolder fs-5">03</h2>
                            <h2 class="fw-bolder fs-5">Data Anggota 2</h2>
                        </div>
                        <div class="form-data mb-3">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="number" class="form-control" name="npm" id="npm" placeholder="190817121" aria-describedby="npm">
                        </div>
                        <div class="form-data mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="" aria-describedby="nama">
                        </div>
                        <div class="form-data mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="example@student" aria-describedby="email">
                        </div>
                    </section>
                    <div class="text-center">
                        <button type="submit" class="w-100 mt-2 mx-auto button-primary text-white bg-orange-base">Simpan Laporan</button>
                    </div>
                </form>
            </div>
        </main>


        <footer class="w-100 py-4 flex-shrink-0 montserrat">
            <div class="container py-4">
                <div class="row gy-4 gx-5">
                    <div class="col-lg-4 col-md-6">
                        <a href="/" class="mb-3">
                            <img src="assets/image/icon.png" />
                        </a>
                        <p class="text-muted mt-3">&copy; 2022</p>
                    </div>
                    <div class="col-lg-2 col-md-6">

                    </div>
                    <div class="col-lg-2 col-md-6">

                    </div>
                    <div class="col-lg-4 col-md-6 text-end">
                        <h5>Layanan Kami</h5>
                        <ul class="nav flex-column mt-3">
                            <li class="nav-item mb-3"><a href="<?php echo base_url(); ?>" class="nav-link p-0 text-muted">Beranda</a></li>
                            <li class="nav-item mb-3"><a href="<?php echo base_url(); ?>" class="nav-link p-0 text-muted">Pengajuan</a></li>
                            <li class="nav-item mb-3"><a href="<?php echo base_url(); ?>cek-laporan" class="nav-link p-0 text-muted">Cek Laporan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>
<title>dashboard Admin</title>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/index.css" />