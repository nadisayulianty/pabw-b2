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
					<div class="input-group">
						<form action="<?= base_url('table/table3b71/cari') ?>" method="GET" id="searchForm">
							<span class="input-group-text text-body"><input type="search" id="searchInput" name="search" placeholder="Cari berdasarkan jenis keluar.." /><i class="fas fa-search" aria-hidden="true"></i></span>
						</form>
					</div>
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
						<h5>Table jenis keluar</h5>
						<button type="button" class="btn bg-gradient-success btn-block mb-3" id="btn-add">
							Tambah Data
						</button>
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
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Jenis keluar</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Apa mahasiswa</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($jenis_keluar as $row): ?>
										<tr>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $no; ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['jenis_keluar'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['apa_mahasiswa'] ?></p>
											</td>
											<td class="text-center">
												<a href="#" onclick="handleEdit(this)" data-row='<?php echo json_encode($row) ?>' class="btn bg-gradient-info btn-block">
													Edit
												</a>
												<a href="#" data-href="<?= base_url('table/jenis-keluar/' . $row['id_jenis_keluar'] . '/delete') ?>" onclick="confirmToDelete(this)" class="btn bg-gradient-danger btn-block" data-bs-toggle="modal" data-bs-target="#confirm-dialog">Hapus</a>
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
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card card-plain">
												<div class="card-header pb-0 text-left">
													<h3 class="font-weight-bolder text-primary text-gradient">Form jenis keluar</h3>
												</div>
												<div class="card-body pb-3">
													<form action="<?= base_url('table/jenis-keluar/save') ?>" method="post" role="form text-left" id="form-save-wilayah">
														<input type="hidden" value="" name="id_jenis_keluar">
														<label>Jenis keluar</label>
														<div class="input-group mb-3">
															<input type="text" class="form-control" name="jenis_keluar" placeholder="jenis keluar" aria-label="jenis-keluar" aria-describedby="jenis-karyawan-addon">
														</div>
														<label>Apa mahasiswa</label>
														<div class="input-group mb-3">
															<input type="text" class="form-control" name="apa_mahasiswa" placeholder="Apa mahasiswa" aria-label="id-negara" min="0" max="1">
														</div>
														<button type="submit" class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Simpan</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</main>

<script>
	function handleEdit(element) {
		const row = JSON.parse(element.getAttribute('data-row'));
		$('[name="id_jenis_keluar"]').val(row.id_jenis_keluar);
		$('[name="jenis_keluar"]').val(row.jenis_keluar);
		$('[name="apa_mahasiswa"]').val(row.apa_mahasiswa);

		$('#modalCreate').modal('show');
	}

	document.getElementById('btn-add').addEventListener('click', function() {
		document.querySelector('[name="jenis_keluar"]').value = '';
		document.querySelector('[name="apa_mahasiswa"]').value = '';
		document.querySelector('[name="id_jenis_keluar"]').value = '';
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
				const kategoriText = cells[1].textContent.toLowerCase(); // Ubah sesuai dengan indeks kolom yang berisi kategori

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