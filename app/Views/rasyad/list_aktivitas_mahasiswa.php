<?= $this->extend('layout/admin/layout') ?>

<?= $this->section('content') ?>

<main class="main-content position-relative border-radius-lg ">
	<!-- Navbar -->
	<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
		<div class="container-fluid py-1 px-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
					<li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
					<li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
				</ol>
				<h3 class="font-weight-bolder text-white mb-0">Tables</h3>
			</nav>
			<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
				</div>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->
	<div class="container-fluid py-4">
		<div class="row">
			<div class="col-12">
				<div class="card mb-0">
					<div class="card-header pb-0">
						<div class="d-flex justify-content-between mb-2">
							<div>
								<h5>Table list aktivitas mahasiswa</h5>
								<p>By. 230631013 - Mochamad Rasyad</p>
							</div>
							<form action="<?= base_url('table/list-aktivitas-mahasiswa') ?>">
								<input type="search" name="search" class="form-control" placeholder="Cari..." value="<?= $search ?>" />
							</form>
						</div>
						<hr>
						<div class="d-flex justify-content-end">
							<button type="button" class="btn btn-primary btn-block mb-3" id="btn-add">
								Tambah Data
							</button>
						</div>
						<?php if (session('success')): ?>
							<div class="alert alert-success" role="alert">
								<?= session('success') ?>
							</div>
						<?php endif; ?>
						<?php if (! empty($errors)): ?>
							<div class="alert alert-danger" role="alert">
								<ul>
									<?php foreach ($errors as $error): ?>
										<li><?= esc($error) ?></li>
									<?php endforeach ?>
								</ul>
							</div>
						<?php endif ?>
						<br>
					</div>
					<div class="card-body px-0 pt-0 pb-2">
						<div class="table-responsive p-0">
							<table class="table table-hover align-items-center mb-0">
								<thead>
									<tr>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">No</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Nama asal data</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Asal data</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">ID aktivitas</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Program MBKM</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Nama program MBKM</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Jenis anggota</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Nama jenis anggota</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">ID jenis aktivitas</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Nama jenis aktivitas</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">ID prodi</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Nama prodi</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Id semester</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Nama semester</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Judul</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Keterangan</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Lokasi</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">SK Tugas</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Sumber data</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Tanggal SK tugas</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Tanggal mulai</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Tanggal selesai</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Untuk kampus merdeka</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Status sync</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($list_aktivitas_mahasiswa as $row): ?>
										<tr>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $no; ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['nm_asaldata'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['asal_data'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['id_aktivitas'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['program_mbkm'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['nama_program_mbkm'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['jenis_anggota'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['nama_jenis_anggota'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['id_jenis_aktivitas'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['nama_jenis_aktivitas'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['id_prodi'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['nama_prodi'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['id_semester'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['nama_semester'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['judul'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['keterangan'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['lokasi'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['sk_tugas'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['sumber_data'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['tanggal_sk_tugas'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['tanggal_mulai'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['tanggal_selesai'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['untuk_kampus_merdeka'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['status_sync'] ?></p>
											</td>
											<td class="text-center">
												<a href="#" onclick="handleEdit(this)" data-row='<?php echo json_encode($row) ?>' class="btn btn-success btn-block">
													Edit
												</a>
												<a href="#" data-href="<?= base_url('table/list-aktivitas-mahasiswa/' . $row['id_aktivitas'] . '/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-danger btn-block" data-bs-toggle="modal" data-bs-target="#confirm-dialog">Hapus</a>
											</td>
										</tr>
									<?php $no++;
									endforeach ?>
								</tbody>
							</table>

							<!-- js message data tidak ditemukan  -->
							<div id="resultMessage" class="result-message text-center"></div>

							<!-- modal delete -->
							<div class="modal fade" id="confirm-dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											Apakah Anda yakin ingin menghapus data ini?
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
											<button type="button" class="btn btn-danger" onclick="deleteData()">Hapus</button>
										</div>
									</div>
								</div>
							</div>

							<!-- js delete -->
							<script>
								function confirmToDelete(element) {
									var deleteButton = document.getElementById('confirm-dialog').querySelector('.btn-danger');
									deleteButton.setAttribute('data-href', element.getAttribute('data-href'));
								}

								function deleteData() {
									var deleteUrl = document.getElementById('confirm-dialog').querySelector('.btn-danger').getAttribute('data-href');

									window.location.href = deleteUrl;
								}
							</script>

							<!-- modal tambah data -->
							<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card card-plain">
												<div class="card-header pb-0 text-left">
													<h3 class="font-weight-bolder">Form list aktivitas mahasiswa</h3>
												</div>
												<div class="card-body pb-3">
													<form action="<?= base_url('table/list-aktivitas-mahasiswa/save') ?>" method="post" role="form text-left">
														<input type="hidden" value="" name="id_aktivitas">
														<div class="row mb-2">
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>Nama asal data</label>
																<div class="input-group mb-3">
																	<select name="nm_asaldata" id="nm_asaldata" class="form-control">
																		<option value="internal">Internal</option>
																		<option value="eksternal">Eksternal</option>
																	</select>
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>Asal Data</label>
																<div class="input-group mb-3">
																	<input type="text" class="form-control" name="asal_data" placeholder="asal_data" aria-label="asal_data" aria-describedby="asal_data-addon">
																</div>
															</div>
														</div>
														<div class="row mb-2">
															<div class="col-lg-6 col-md-6 col-12">
																<label>Program MBKM</label>
																<div class="input-group mb-3">
																	<input type="text" class="form-control" name="program_mbkm" placeholder="program_mbkm" aria-label="program_mbkm" aria-describedby="program_mbkm-addon">
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-12">
																<label>Nama Program MBKM</label>
																<div class="input-group mb-3">
																	<select name="nama_program_mbkm" id="" class="form-control">
																		<option value="Mandiri">Mandiri</option>
																		<option value="Lain-lain">Lain-lain</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="row mb-2">
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>Jenis Anggota</label>
																<div class="input-group mb-3">
																	<input type="text" class="form-control" name="jenis_anggota" placeholder="jenis_anggota" aria-label="jenis_anggota" aria-describedby="jenis_anggota-addon">
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>Nama Jenis Anggota</label>
																<div class="input-group mb-3">
																	<select name="nama_jenis_anggota" id="" class="form-control">
																		<option value="Personal">Personal</option>
																		<option value="Organisasi">Organisasi</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="row mb-2">
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>ID Jenis aktivitas</label>
																<div class="input-group mb-3">
																	<input type="text" class="form-control" name="id_jenis_aktivitas" placeholder="id_jenis_aktivitas" aria-label="id_jenis_aktivitas" aria-describedby="id_jenis_aktivitas-addon">
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>Nama jenis aktivitas</label>
																<div class="input-group mb-3">
																	<input type="text" class="form-control" name="nama_jenis_aktivitas" placeholder="nama_jenis_aktivitas" aria-label="nama_jenis_aktivitas" aria-describedby="nama_jenis_aktivitas-addon">
																</div>
															</div>
														</div>
														<div class="row mb-2">
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>ID Prodi</label>
																<div class="input-group mb-3">
																	<input type="text" class="form-control" name="id_prodi" placeholder="id_prodi" aria-label="id_prodi" aria-describedby="id_prodi-addon">
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>Nama Prodi</label>
																<div class="input-group mb-3">
																	<input type="text" class="form-control" name="nama_prodi" placeholder="nama_prodi" aria-label="nama_prodi" aria-describedby="nama_prodi-addon">
																</div>
															</div>
														</div>
														<div class="row mb-2">
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>Id Semester</label>
																<div class="input-group mb-3">
																	<input type="text" class="form-control" name="id_semester" placeholder="id_semester" aria-label="id_semester" aria-describedby="id_semester-addon">
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>Nama Semester</label>
																<div class="input-group mb-3">
																	<input type="text" class="form-control" name="nama_semester" placeholder="nama_semester" aria-label="nama_semester" aria-describedby="nama_semester-addon">
																</div>
															</div>
														</div>
														<div class="row mb-2">
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>Lokasi</label>
																<div class="input-group mb-3">
																	<input type="text" class="form-control" name="lokasi" placeholder="lokasi" aria-label="lokasi" aria-describedby="lokasi-addon">
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>SK Tugas</label>
																<div class="input-group mb-3">
																	<input type="text" class="form-control" name="sk_tugas" placeholder="sk_tugas" aria-label="sk_tugas" aria-describedby="sk_tugas-addon">
																</div>
															</div>
														</div>
														<div class="row mb-2">
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>Sumber data</label>
																<div class="input-group mb-3">
																	<input type="text" class="form-control" name="sumber_data" placeholder="sumber_data" aria-label="sumber_data" aria-describedby="sumber_data-addon">
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>Tanggal SK tugas</label>
																<div class="input-group mb-3">
																	<input type="date" class="form-control" name="tanggal_sk_tugas" placeholder="tanggal_sk_tugas" aria-label="tanggal_sk_tugas" aria-describedby="tanggal_sk_tugas-addon">
																</div>
															</div>
														</div>
														<div class="row mb-2">
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>Tanggal mulai</label>
																<div class="input-group mb-3">
																	<input type="date" class="form-control" name="tanggal_mulai" placeholder="tanggal_mulai" aria-label="tanggal_mulai" aria-describedby="tanggal_mulai-addon">
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>Tanggal berakhir</label>
																<div class="input-group mb-3">
																	<input type="date" class="form-control" name="tanggal_selesai" placeholder="tanggal_selesai" aria-label="tanggal_selesai" aria-describedby="tanggal_selesai-addon">
																</div>
															</div>
														</div>
														<div class="row mb-2">
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>Untuk kampus merdeka</label>
																<div class="input-group mb-3">
																	<input type="text" class="form-control" name="untuk_kampus_merdeka" placeholder="untuk_kampus_merdeka" aria-label="untuk_kampus_merdeka" aria-describedby="untuk_kampus_merdeka-addon">
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-12">
																<label>Status Sync</label>
																<div class="input-group mb-3">
																	<input type="text" class="form-control" name="status_sync" placeholder="status_sync" aria-label="status_sync" aria-describedby="status_sync-addon">
																</div>
															</div>
														</div>
														<button type="submit" class="btn btn-primary btn-lg w-100 mt-4 mb-0">Simpan</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<?= $pager->links('default', 'bootstrap_pagination') ?>
					</div>
				</div>
			</div>
</main>

<script>
	function handleEdit(element) {
		const row = JSON.parse(element.getAttribute('data-row'));

		$('[name="id_aktivitas"]').val(row.id_aktivitas);
		$('[name="nm_asaldata"]').val(row.nm_asaldata);
		$('[name="asal_data"]').val(row.asal_data);
		$('[name="program_mbkm"]').val(row.program_mbkm);
		$('[name="nama_program_mbkm"]').val(row.nama_program_mbkm);
		$('[name="jenis_anggota"]').val(row.jenis_anggota);
		$('[name="nama_jenis_anggota"]').val(row.nama_jenis_anggota);
		$('[name="id_jenis_aktivitas"]').val(row.id_jenis_aktivitas);
		$('[name="nama_jenis_aktivitas"]').val(row.nama_jenis_aktivitas);
		$('[name="id_prodi"]').val(row.id_prodi);
		$('[name="nama_prodi"]').val(row.nama_prodi);
		$('[name="id_semester"]').val(row.id_semester);
		$('[name="nama_semester"]').val(row.nama_semester);
		$('[name="judul"]').val(row.judul);
		$('[name="keterangan"]').val(row.keterangan);
		$('[name="lokasi"]').val(row.lokasi);
		$('[name="sk_tugas"]').val(row.sk_tugas);
		$('[name="sumber_data"]').val(row.sumber_data);
		$('[name="tanggal_sk_tugas"]').val(row.tanggal_sk_tugas);
		$('[name="tanggal_mulai"]').val(row.tanggal_mulai);
		$('[name="tanggal_selesai"]').val(row.tanggal_selesai);
		$('[name="untuk_kampus_merdeka"]').val(row.untuk_kampus_merdeka);
		$('[name="status_sync"]').val(row.status_sync);

		$('#modalCreate').modal('show');
	}

	document.getElementById('btn-add').addEventListener('click', function() {
		$('[name="id_aktivitas"]').val('');
		$('[name="nm_asaldata"]').val('');
		$('[name="asal_data"]').val('');
		$('[name="program_mbkm"]').val('');
		$('[name="nama_program_mbkm"]').val('');
		$('[name="jenis_anggota"]').val('');
		$('[name="nama_jenis_anggota"]').val('');
		$('[name="id_jenis_aktivitas"]').val('');
		$('[name="nama_jenis_aktivitas"]').val('');
		$('[name="id_prodi"]').val('');
		$('[name="nama_prodi"]').val('');
		$('[name="id_semester"]').val('');
		$('[name="nama_semester"]').val('');
		$('[name="judul"]').val('');
		$('[name="keterangan"]').val('');
		$('[name="lokasi"]').val('');
		$('[name="sk_tugas"]').val('');
		$('[name="sumber_data"]').val('');
		$('[name="tanggal_sk_tugas"]').val('');
		$('[name="tanggal_mulai"]').val('');
		$('[name="tanggal_selesai"]').val('');
		$('[name="untuk_kampus_merdeka"]').val('');
		$('[name="status_sync"]').val('');
		$('#modalCreate').modal('show');
	});

	document.addEventListener("DOMContentLoaded", function() {
		const searchForm = document.getElementById("searchForm");
		const searchInput = document.getElementById("searchInput");
		const resultMessage = document.getElementById("resultMessage");
		const tableBody = document.querySelector(".table tbody");

		function filterRows() {
			const searchText = searchInput.value.toLowerCase();
			let foundRows = 0;

			tableBody.querySelectorAll("tr").forEach(function(row, index) {
				const cells = row.querySelectorAll("td");
				const kategoriText = cells[14].textContent.toLowerCase(); // Ubah sesuai dengan indeks kolom yang berisi kategori

				if (kategoriText.includes(searchText)) {
					row.style.display = "";
					foundRows++;
				} else {
					row.style.display = "none";
				}
			});

			if (foundRows === 0) {
				resultMessage.textContent = "Data tidak ditemukan";
			} else {
				resultMessage.textContent = "";
			}
		}

		searchForm.addEventListener("submit", function(event) {
			event.preventDefault();
			filterRows();
		});

		searchInput.addEventListener("input", filterRows);

		filterRows();
	});
</script>

<?= $this->endSection() ?>