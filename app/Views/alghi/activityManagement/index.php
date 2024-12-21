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
                            <form action="<?= base_url('table/listMataKuliah/cari') ?>" method="GET" id="searchForm">
                                <span class="input-group-text text-body"><input type="search" id="searchInput" name="search" placeholder="Cari berdasarkan keterangan.." /><i class="fas fa-search" aria-hidden="true"></i></span>
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
                            <h5>List Data Aktivitas Mahasiswa</h5>
                            <!-- button tambah -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#modalCreate">
                                Tambah Data
                            </button>
                            <br>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table table-hover align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Asal Data</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">ID Aktivitas</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Program MBKM</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nama Program MBKM</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Jenis Anggota</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nama Jenis Anggota</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nama Jenis Aktivitas</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nama Prodi</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nama Semester</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Judul</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($datas as $data): ?>
                                            <tr>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['asal_data'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['id_aktivitas'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['program_mbkm'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['nama_program_mbkm'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['jenis_anggota'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['nama_jenis_anggota'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['nama_jenis_aktivitas'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['nama_prodi'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['nama_semester'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['judul'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <!-- Aksi -->
                                                    <a href="<?= base_url('table/activity/' . $data['id_aktivitas'] . '/edit') ?>"
                                                       class="btn bg-gradient-info btn-sm">
                                                        Edit
                                                    </a>
                                                    <a href="#"
                                                       data-href="<?= base_url('table/activity/' . $data['id_aktivitas'] . '/delete') ?>"
                                                       onclick="confirmToDelete(this)"
                                                       class="btn bg-gradient-danger btn-sm"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#confirm-dialog">
                                                        Hapus
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php $no++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                                <div style="gap:2px;margin-top: 5px;margin-left: 10px;">
                                    <?= $pager->links(); ?>
                                </div>



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
                                                        <h3 class="font-weight-bolder text-primary text-gradient">Tabel List Aktivitas Mahasiswa</h3>
                                                        <p class="mb-0">Masukkan data yang anda inginkan</p>
                                                    </div>
                                                    <div class="card-body pb-3">
                                                        <form action="<?= base_url('table/activity/new') ?>" method="post">
                                                            <!-- Row pertama (Asal Data, ID Aktivitas) -->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Asal Data</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="asal_data" placeholder="Asal Data" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>ID Aktivitas</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="id_aktivitas" placeholder="ID Aktivitas" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Row kedua (Program MBKM, Nama Program MBKM) -->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Program MBKM</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="program_mbkm" placeholder="Program MBKM" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Nama Program MBKM</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="nama_program_mbkm" placeholder="Nama Program MBKM" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Row ketiga (Jenis Anggota, Nama Jenis Anggota) -->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Jenis Anggota</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="jenis_anggota" placeholder="Jenis Anggota" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Nama Jenis Anggota</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="nama_jenis_anggota" placeholder="Nama Jenis Anggota" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Row keempat (Nama Jenis Aktivitas, Nama Prodi) -->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Nama Jenis Aktivitas</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="nama_jenis_aktivitas" placeholder="Nama Jenis Aktivitas" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Nama Prodi</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="nama_prodi" placeholder="Nama Prodi" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Row kelima (Nama Semester, Judul) -->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Nama Semester</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="nama_semester" placeholder="Nama Semester" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Judul</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="judul" placeholder="Judul" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Button -->
                                                            <div class="text-center">
                                                                <button type="submit" class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Tambah</button>
                                                            </div>
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




    <body class="g-sidenav-show bg-primary">

    <!-- js search -->
    <script>
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

    </body>

<?= $this->endSection() ?>