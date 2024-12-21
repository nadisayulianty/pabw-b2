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
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">No</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">ID Transfer</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">ID Registrasi</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">NIM</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nama Mahasiswa</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">ID Prodi</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nama Prodi</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">ID Periode Masuk</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Kode Mata Kuliah Asal</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nama Mata Kuliah Asal</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">SKS Mata Kuliah Asal</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nilai Huruf Asal</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">ID Matkul</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Kode Matkul Diakui</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nama Mata Kuliah Diakui</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">SKS Mata Kuliah Diakui</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nilai Huruf Diakui</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nilai Angka Diakui</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">ID Perguruan Tinggi</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">ID Aktivitas</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Judul</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">ID Jenis Aktivitas</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nama Jenis Aktivitas</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">ID Semester</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nama Semester</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Status Sync</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($datas as $data): ?>
                                            <tr>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $no; ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['id_transfer'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['id_registrasi_mhs'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['NIM'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['nama_mahasiswa'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['id_prodi'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['nama_program_studi'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['id_periode_masuk'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['kode_mata_kuliah_asal'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['nama_mata_kuliah_asal'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['sks_mata_kuliah_asal'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['nilai_huruf_asal'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['id_matkul'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['kode_matkul_diakui'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['nama_mata_kuliah_diakui'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['sks_mata_kuliah_diakui'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['nilai_huruf_diakui'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['nilai_angka_diakui'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['id_perguruan_tinggi'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['id_aktivitas'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['judul'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['id_jenis_aktivitas'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['nama_jenis_aktivitas'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['id_semester'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['nama_semester'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="mb-0 text-sm"><?= $data['status_sync'] ?></p>
                                                </td>
                                                <td class="text-center">
                                                    <!-- Aksi -->
                                                    <a href="<?= base_url('table/Academy/' . $data['id_transfer'] . '/edit') ?>"
                                                       class="btn bg-gradient-info btn-sm">
                                                        Edit
                                                    </a>
                                                    <a href="#"
                                                       data-href="<?= base_url('table/Academy/' . $data['id_transfer'] . '/delete') ?>"
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
                                                        <form action="<?= base_url('table/Academy/new') ?>" method="post">
                                                            <!-- Row pertama (No, ID Transfer, ID Registrasi, NIM) -->
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label>No</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="no" placeholder="No" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>ID Transfer</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="id_transfer" placeholder="ID Transfer" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>ID Registrasi</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="id_registrasi" placeholder="ID Registrasi" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>NIM</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="nim" placeholder="NIM" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Row kedua (Nama Mahasiswa, ID Prodi, Nama Prodi) -->
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Nama Mahasiswa</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Nama Mahasiswa" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>ID Prodi</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="id_prodi" placeholder="ID Prodi" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Nama Prodi</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="nama_prodi" placeholder="Nama Prodi" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Row ketiga (ID Periode Masuk, Kode Mata Kuliah Asal, Nama Mata Kuliah Asal) -->
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>ID Periode Masuk</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="id_periode_masuk" placeholder="ID Periode Masuk" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Kode Mata Kuliah Asal</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="kode_matkul_asal" placeholder="Kode Mata Kuliah Asal" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Nama Mata Kuliah Asal</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="nama_matkul_asal" placeholder="Nama Mata Kuliah Asal" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Row keempat (SKS Mata Kuliah Asal, Nilai Huruf Asal, ID Matkul) -->
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>SKS Mata Kuliah Asal</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="sks_matkul_asal" placeholder="SKS Mata Kuliah Asal" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Nilai Huruf Asal</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="nilai_huruf_asal" placeholder="Nilai Huruf Asal" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>ID Matkul</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="id_matkul" placeholder="ID Matkul" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Row kelima (Kode Matkul Diakui, Nama Mata Kuliah Diakui, SKS Mata Kuliah Diakui) -->
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Kode Matkul Diakui</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="kode_matkul_diakui" placeholder="Kode Matkul Diakui" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Nama Mata Kuliah Diakui</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="nama_matkul_diakui" placeholder="Nama Mata Kuliah Diakui" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>SKS Mata Kuliah Diakui</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="sks_matkul_diakui" placeholder="SKS Mata Kuliah Diakui" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Row keenam (Nilai Huruf Diakui, Nilai Angka Diakui, ID Perguruan Tinggi) -->
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Nilai Huruf Diakui</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="nilai_huruf_diakui" placeholder="Nilai Huruf Diakui" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Nilai Angka Diakui</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="nilai_angka_diakui" placeholder="Nilai Angka Diakui" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>ID Perguruan Tinggi</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="id_pt" placeholder="ID Perguruan Tinggi" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Row ketujuh (ID Aktivitas, Judul, ID Jenis Aktivitas) -->
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>ID Aktivitas</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="id_aktivitas" placeholder="ID Aktivitas" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Judul</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="judul" placeholder="Judul" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>ID Jenis Aktivitas</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="id_jenis_aktivitas" placeholder="ID Jenis Aktivitas" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Row kedelapan (Nama Jenis Aktivitas, ID Semester, Nama Semester) -->
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Nama Jenis Aktivitas</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="nama_jenis_aktivitas" placeholder="Nama Jenis Aktivitas" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>ID Semester</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="id_semester" placeholder="ID Semester" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>Nama Semester</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="nama_semester" placeholder="Nama Semester" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Row kesembilan (Status Sync) -->
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label>Status Sync</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="status_sync" placeholder="Status Sync" required>
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