<title>Cek Laporan</title>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/cekLaporan.css" />

<main>
	<div class="headline mx-auto text-center">
		<h1 class="display-6 fw-bolder montserrat">Mau cek data laporanmu?</h1>
		<p class="mt-4 montserrat">Silahkan masukkan NPM ketua kelompokmu untuk mengecek apakah <br /> data kelompok kalian sudah terdaftar</p>
	</div>

	<div class="content montserrat">
		<form get="GET" action="<?= base_url('pengajuan/searchnpm') ?>" id="form-group" class="w-50 mx-auto">
			<div class="mb-3">
				<label for="keyword" class="form-label">Masukkan NPM</label>
				<input type="search" class="form-control" name="keyword" id="keyword" placeholder="190817121" aria-describedby="keyword">
			</div>
			<div class="text-center">
				<button type="submit" class="mt-sm-4 mt-2 mx-auto button-primary text-white bg-orange-base">Cek Laporan</button>
			</div>
		</form>
	</div>

	<?php if (!empty($keyword)) { ?>
		<p class="mt-5 montserrat text-center" style="color:orange"><b>Menampilkan data dengan kata kunci : "<?= $keyword; ?>"</b></p>

		<div class="search-found-wrapper montserrat">
			<div class="card-data mx-auto w-50 py-4">
				<?php foreach ($data as $row) { ?>
					<h1 class='title-data text-center fs-3 fw-semibold'>Data Kelompok</h1>
					<div class='detail-data text-center w-75 mx-auto'>
						<div class="d-flex flex-wrap gap-1 justify-content-between column-data mb-3">
							<h3 class='fs-5 fw-semibold'>NPM Ketua :</h3>
							<h3 class='fs-5'><?= $row['npm1'] ?></h3>
						</div>
						<div class="d-flex flex-wrap gap-1 justify-content-between column-data mb-3">
							<h3 class='fs-5 fw-semibold'>Nama Ketua :</h3>
							<h3 class='fs-5'><?= $row['name1'] ?></h3>
						</div>
						<div class="d-flex flex-wrap gap-1 justify-content-between column-data mb-3">
							<h3 class='fs-5 fw-semibold'>Anggota 1 :</h3>
							<h3 class='fs-5'><?= $row['name2'] ?></h3>
						</div>
						<div class="d-flex flex-wrap gap-1 justify-content-between column-data mb-3">
							<h3 class='fs-5 fw-semibold'>Anggota 2 :</h3>
							<h3 class='fs-5'><?= $row['name3'] ?></h3>
						</div>
						<div class="d-flex flex-wrap gap-1 justify-content-between column-data mb-3">
							<h3 class='fs-5 fw-semibold'>Nama Perusahaan :</h3>
							<h3 class='fs-5'><?= $row['perusahaan'] ?></h3>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	<?php } else { ?>
		<?php if($data = NULL) { ?>
		<div class="search-not-found-wrapper montserrat mt-5">
			<h1 class='title-data text-center fs-3 fw-semibold'>Data tidak ditemukan...</h1>
		</div>
		<?php } ?>
	<?php } ?>

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
	<!-- <div class="search-not-found-wrapper montserrat mt-5">
		<h1 class='title-data text-center fs-3 fw-semibold'>Data tidak ditemukan...</h1>
	</div> -->
</main>