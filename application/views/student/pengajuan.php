<title>Pengajuan Laporan</title>
<link rel="stylesheet" href="<?= base_url();?>assets/css/pengajuan.css" />

<main>
	<div class="headline mx-auto text-center">
		<h1 class="display-6 fw-bolder montserrat">Halo, kami sudah menunggumu</h1>
		<p class="mt-4 montserrat">Silahkan isi form di bawah ini dengan sebenar-benarnya dan jangan <br /> sampai ada yang terlewat ya</p>
	</div>

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
				<button type="submit" class="w-100 mt-2 mx-auto button-primary text-white bg-orange-base">Submit Laporan</button>
			</div>
		</form>
	</div>
</main>