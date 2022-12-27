<title>Login Admin</title>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/index.css" />

<main class="px-4 bg-orange-base">
    <div class="content d-flex align-items-center justify-content-center montserrat">
        <div class="right-content me-5">
            <h1 class="mb-3 display-3 fw-bold montserrat text-white">Selamat Datang <br/> admin Internsheep</h1>
            <p class="text-white">Silahkan masukkan Username dan Password untuk masuk <br/> ke halaman dashboard website Internsheep</p>
        </div>
        <div class="left-content ms-5 d-lg-block d-none">
            <div class="card" style="width: 35rem;">
                <div class="card-body p-5">
                    <form action="" id="form-group" class="w-150 mx-auto">
                        <section class="mb-5 form-section">
                            <div class="form-data mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="number" class="form-control" name="password" id="username" placeholder="" aria-describedby="username">
                            </div>
                            <div class="form-data mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" id="password" placeholder="" aria-describedby="password">
                            </div>
                        </section>
                        <div>
                            <button type="submit" class="mt-2 button-primary text-white bg-orange-base">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>