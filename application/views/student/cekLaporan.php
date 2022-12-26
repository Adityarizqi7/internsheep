<title>Cek Laporan</title>
<link rel="stylesheet" href="<?= base_url();?>assets/css/cekLaporan.css" />

<main>
	<div class="headline mx-auto text-center">
		<h1 class="display-6 fw-bolder montserrat">Mau cek data laporanmu?</h1>
		<p class="mt-4 montserrat">Silahkan masukkan NPM ketua kelompokmu untuk mengecek apakah <br /> data kelompok kalian sudah terdaftar</p>
	</div>

	<div class="content montserrat">
		<form action="<?= base_url('Home/update') ?>" id="form-group" class="w-50 mx-auto">
			<div class="mb-3">
				<label for="npm" class="form-label">Masukkan NPM</label>
				<input type="email" class="form-control" id="npm" placeholder="190817121" aria-describedby="npm">
			</div>
			<div class="text-center">
				<button type="submit" class="mt-sm-4 mt-2 mx-auto button-primary text-white bg-orange-base">Cek Laporan</button>
			</div>
		</form>
	</div>

	<!-- Tampilan ketika pencarian ditemukan -->
	<!-- <div class="search-found-wrapper montserrat">
		<div class="card-data mx-auto w-50 py-4">
			<h1 class='title-data text-center fs-3 fw-semibold'>Data Kelompok</h1>
			<div class='detail-data text-center w-75 mx-auto'>
				<div class="d-flex flex-wrap gap-1 justify-content-between column-data mb-3">
					<h3 class='fs-5 fw-semibold'>Nama Ketua:</h3>
					<h3 class='fs-5'>Agung Kucecwara</h3>
				</div>
				<div class="d-flex flex-wrap gap-1 justify-content-between column-data mb-3">
					<h3 class='fs-5 fw-semibold'>Nama Ketua:</h3>
					<h3 class='fs-5'>Agung Kucecwara</h3>
				</div>
				<div class="d-flex flex-wrap gap-1 justify-content-between column-data mb-3">
					<h3 class='fs-5 fw-semibold'>Nama Ketua:</h3>
					<h3 class='fs-5'>Agung Kucecwara</h3>
				</div>
				<h3></h3>
			</div>
		</div>
	</div> -->


	<!-- Tampilan ketika pencarian tidak ditemukan -->
	<div class="search-not-found-wrapper montserrat mt-5">
		<h1 class='title-data text-center fs-3 fw-semibold'>Data tidak ditemukan...</h1>
	</div>
</main>