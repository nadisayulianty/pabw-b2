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
							<span class="input-group-text text-body"><input type="search" id="searchInput" name="search" placeholder="Cari berdasarkan nama wilayah.." /><i class="fas fa-search" aria-hidden="true"></i></span>
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
						<h5>Table wilayah</h5>
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
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">ID level wilayah</th>
										<th class="text-center text-uppercase text-xxs font-weight-bolder ">ID wilayah</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">ID negara</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Nama wilayah</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">ID induk wilayah</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($wilayah as $row): ?>
										<tr>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $no; ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['id_level_wilayah'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['id_wilayah'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['id_negara'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['nama_wilayah'] ?></p>
											</td>
											<td class="text-center">
												<p class="mb-0 text-sm"><?= $row['id_induk_wilayah'] ?></p>
											</td>
											<td class="text-center">
												<a href="#" onclick="handleEdit(this)" data-row='<?php echo json_encode($row) ?>' class="btn bg-gradient-info btn-block">
													Edit
												</a>
												<a href="#" data-href="<?= base_url('table/wilayah/' . $row['id_wilayah'] . '/delete') ?>" onclick="confirmToDelete(this)" class="btn bg-gradient-danger btn-block" data-bs-toggle="modal" data-bs-target="#confirm-dialog">Hapus</a>
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
													<h3 class="font-weight-bolder text-primary text-gradient">Form wilayah</h3>
												</div>
												<div class="card-body pb-3">
													<form action="<?= base_url('table/wilayah/save') ?>" method="post" role="form text-left" id="form-save-wilayah">
														<input type="hidden" value="" name="id_wilayah">
														<label>ID level wilayah</label>
														<div class="input-group mb-3">
															<input type="text" class="form-control" name="id_level_wilayah" placeholder="ID level wilayah" aria-label="id-level-wilayah" aria-describedby="id-level-wilayah-addon">
														</div>
														<label>ID negara</label>
														<div class="input-group mb-3">
															<input type="text" class="form-control" name="id_negara" placeholder="ID negara" aria-label="id-negara" aria-describedby="id-negara-addon">
														</div>
														<label>Nama wilayah</label>
														<div class="input-group mb-3">
															<input type="text" class="form-control" name="nama_wilayah" placeholder="Nama wilayah" aria-label="nama-wilayah" aria-describedby="nama-wilayah-addon">
														</div>
														<label>ID Induk wilayah</label>
														<div class="input-group mb-3">
															<input type="text" class="form-control" name="id_induk_wilayah" placeholder="ID induk wilayah" aria-label="id-induk-wilayah" aria-describedby="id-induk-wilayah-addon">
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

		$('[name="id_level_wilayah"]').val(row.id_level_wilayah);
		$('[name="id_wilayah"]').val(row.id_wilayah);
		$('[name="id_negara"]').val(row.id_negara);
		$('[name="nama_wilayah"]').val(row.nama_wilayah);
		$('[name="id_induk_wilayah"]').val(row.id_induk_wilayah);

		$('#modalCreate').modal('show');
	}

	document.getElementById('btn-add').addEventListener('click', function() {
		$('[name="id_level_wilayah"]').val('');
		$('[name="id_wilayah"]').val('');
		$('[name="id_negara"]').val('');
		$('[name="nama_wilayah"]').val('');
		$('[name="id_induk_wilayah"]').val('');
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
				const kategoriText = cells[4].textContent.toLowerCase(); // Ubah sesuai dengan indeks kolom yang berisi kategori

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