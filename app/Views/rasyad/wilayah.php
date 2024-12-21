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
								<h5>Table wilayah</h5>
								<p>By. 230631013 - Mochamad Rasyad</p>
							</div>
							<form action="<?= base_url('table/wilayah') ?>">
								<input type="search" name="search" class="form-control" placeholder="Cari..." value="<?= $search ?>" />
							</form>
						</div>
						<hr>
						<div class="d-flex justify-content-end">
							<button type="button" class="btn btn-primary btn-block mb-3" id="btn-add">
								Tambah Data
							</button>
						</div>
						<?php if (session('success')) : ?>
							<div class="alert alert-success" role="alert">
								<?= session('success') ?>
							</div>
						<?php endif; ?>
						<?php if (! empty(session('errors'))): ?>
							<div class="alert alert-danger" role="alert">
								<ul>
									<?php foreach (session('errors') as $error): ?>
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
												<a href="#" onclick="handleEdit(this)" data-row='<?php echo json_encode($row) ?>' class="btn btn-success btn-block">
													Edit
												</a>
												<a href="#" data-href="<?= base_url('table/wilayah/' . $row['id_wilayah'] . '/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-danger btn-block" data-bs-toggle="modal" data-bs-target="#confirm-dialog">Hapus</a>
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
													<h3 class="font-weight-bolder">Form wilayah</h3>
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
</script>

<?= $this->endSection() ?>