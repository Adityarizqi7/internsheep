<title>Pengajuan Laporan</title>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/pengajuan.css" />

<main>
	<div class="headline mx-auto text-center">
		<h1 class="display-6 fw-bolder montserrat">Halo, kami sudah menunggumu</h1>
		<p class="mt-4 montserrat">Silahkan isi form di bawah ini dengan sebenar-benarnya dan jangan <br /> sampai ada yang terlewat ya</p>
	</div>

	<div class="content montserrat w-50 mx-auto">
		<form method="POST" action="<?= base_url('pengajuan/add') ?>" id="form-group" class="">
			<section class="mb-5 form-section">
				<div class="heading-data d-flex gap-4 mb-4">
					<h2 class="orange-base fw-bolder fs-5">01</h2>
					<h2 class="fw-bolder fs-5">Data Ketua Kelompok</h2>
				</div>
				<div class="form-data mb-3">
					<label for="npm1" class="form-label">NPM</label>
					<input type="number" class="form-control" name="npm1" id="npm1" placeholder="190817121" aria-describedby="npm1">
				</div>
				<div class="form-data mb-3">
					<label for="name1" class="form-label">Nama Lengkap</label>
					<input type="text" class="form-control" name="name1" id="name1" placeholder="" aria-describedby="name1">
				</div>
				<div class="form-data mb-3">
					<label for="email1" class="form-label">Email</label>
					<input type="email" class="form-control" name="email1" id="email1" placeholder="example@student" aria-describedby="email1">
				</div>
			</section>
			<section class="mb-5 form-section">
				<div class="heading-data d-flex gap-4 mb-4">
					<h2 class="orange-base fw-bolder fs-5">02</h2>
					<h2 class="fw-bolder fs-5">Data Anggota 1</h2>
				</div>
				<div class="form-data mb-3">
					<label for="npm2" class="form-label">NPM</label>
					<input type="number" class="form-control" name="npm2" id="npm2" placeholder="190817121" aria-describedby="npm2">
				</div>
				<div class="form-data mb-3">
					<label for="name2" class="form-label">Nama Lengkap</label>
					<input type="text" class="form-control" name="name2" id="name2" placeholder="" aria-describedby="name2">
				</div>
				<div class="form-data mb-3">
					<label for="email2" class="form-label">Email</label>
					<input type="email" class="form-control" name="email2" id="email2" placeholder="example@student" aria-describedby="email2">
				</div>
			</section>
			<section class="mb-3 form-section">
				<div class="heading-data d-flex gap-4 mb-4">
					<h2 class="orange-base fw-bolder fs-5">03</h2>
					<h2 class="fw-bolder fs-5">Data Anggota 2</h2>
				</div>
				<div class="form-data mb-3">
					<label for="npm3" class="form-label">NPM</label>
					<input type="number" class="form-control" name="npm3" id="npm3" placeholder="190817121" aria-describedby="npm3">
				</div>
				<div class="form-data mb-3">
					<label for="name3" class="form-label">Nama Lengkap</label>
					<input type="text" class="form-control" name="name3" id="name3" placeholder="" aria-describedby="name3">
				</div>
				<div class="form-data mb-3">
					<label for="email3" class="form-label">Email</label>
					<input type="email" class="form-control" name="email3" id="email3" placeholder="example@student" aria-describedby="email3">
				</div>
			</section>
			<section class="mb-3 form-section mt-5">
				<div class="heading-data d-flex gap-4 mb-4">
					<h2 class="orange-base fw-bolder fs-5">04</h2>
					<h2 class="fw-bolder fs-5">Nama Perusahaan</h2>
				</div>
				<div class="form-data mb-3">
					<label for="perusahaan" class="form-label">Perusahaan</label>
					<input type="text" class="form-control" name="perusahaan" id="perusahaan" placeholder="Angkasa Pura" aria-describedby="perusahaan">
				</div>
				<div class="form-data mb-3">
					<label for="files" class="form-label">Surat Penerimaan</label>
					<input type="file" size='20' class="form-control" name="files" id="files" placeholder="" aria-describedby="files">
				</div>
			</section>
			<div class="text-center">
				<button type="submit" value="upload" class="w-100 mt-2 mx-auto button-primary text-white bg-orange-base">Submit Laporan</button>
			</div>
		</form>
	</div>
</main>