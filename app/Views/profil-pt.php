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
                        <form method="get" action="<?= base_url('table/profil-pt') ?>" class="d-flex w-100">
                            <div class="col-9 px-1">
                                <input type="search" class="form-control" name="search" style="border: none; outline: none; box-shadow: none;" placeholder="Cari nama perguruan" value="<?= esc($search) ?>">
                            </div>
                            <div class="col-3 px-1">
                                <button type="submit" class="btn bg-gradient-info">Search</button>
                            </div>
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
                        <h5>Tabel Profil PT</h5>
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
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">No</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Nama Perguruan Tinggi</th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder ">Telepon</th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">Faximile</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Email</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Website</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Jalan</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Dusun</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">RT/RW</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Kelurahan</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Kode Pos</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1 + (5 * ($pager->getCurrentPage() - 1)); ?>
                                    <?php foreach ($profilPt as $profilPt): ?>
                                        <tr>
                                            <td class="text-center">
                                                <p class="mb-0 text-sm"><?= $no++ ?></p>
                                            </td>
                                            <td class="text-center">
                                                <p class="mb-0 text-sm"><?= $profilPt['nama_perguruan_tinggi'] ?></p>
                                            </td>

                                            <td class="text-center">
                                                <p class="mb-0 text-sm"><?= $profilPt['telepon'] ?></p>
                                            </td>
                                            <td class="text-center">
                                                <p class="mb-0 text-sm"><?= $profilPt['faximile'] ?></p>
                                            </td>
                                            <td class="text-center">
                                                <p class="mb-0 text-sm"><?= $profilPt['email'] ?></p>
                                            </td>
                                            <td class="text-center">
                                                <p class="mb-0 text-sm"><?= $profilPt['website'] ?></p>
                                            </td>
                                            <td class="text-center">
                                                <p class="mb-0 text-sm"><?= $profilPt['jalan'] ?></p>
                                            </td>
                                            <td class="text-center">
                                                <p class="mb-0 text-sm"><?= $profilPt['dusun'] ?></p>
                                            </td>
                                            <td class="text-center">
                                                <p class="mb-0 text-sm"><?= $profilPt['rt_rw'] ?></p>
                                            </td>
                                            <td class="text-center">
                                                <p class="mb-0 text-sm"><?= $profilPt['kelurahan'] ?></p>
                                            </td>
                                            <td class="text-center">
                                                <p class="mb-0 text-sm"><?= $profilPt['kode_pos'] ?></p>
                                            </td>

                                            <td class="text-center">
                                                <!-- aksi -->
                                                <a href="<?= base_url('table/profil-pt/' . $profilPt['id'] . '/edit') ?>" class="btn bg-gradient-info btn-block">
                                                    Edit
                                                </a>
                                                <a href="#" data-href="<?= base_url('table/profil-pt/' . $profilPt['id'] . '/delete') ?>" onclick="confirmToDelete(this)" class="btn bg-gradient-danger btn-block" data-bs-toggle="modal" data-bs-target="#confirm-dialog">Hapus</a>
                                            </td>
                                            <!-- ------------------------------------ -->
                                        </tr>
                                    <?php endforeach; ?>

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
                                                    <h3 class="font-weight-bolder text-primary text-gradient">Tabel Profil PT</h3>
                                                    <p class="mb-0">Masukkan data yang anda inginkan</p>
                                                </div>
                                                <div class="card-body pb-3">
                                                    <form action="<?= base_url('table/profil-pt/new') ?>" method="post" role="form text-left">

                                                        <label>Nama Perguruan Tinggi</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" name="nama_perguruan_tinggi" placeholder="Nama Perguruan Tinggi" aria-describedby="email-addon" required>
                                                        </div>
                                                        <label>Telepon</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" name="telepon" placeholder="No Telepon" aria-describedby="email-addon">
                                                        </div>
                                                        <label>Faximile</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" name="faximile" placeholder="Faximile" aria-describedby="email-addon">
                                                        </div>
                                                        <label>Email</label>
                                                        <div class="input-group mb-3">
                                                            <input type="email" class="form-control" name="email" placeholder="Email" aria-label="keterangan" aria-describedby="password-addon">
                                                        </div>
                                                        <label>Website</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" name="website" placeholder="Website" aria-label="keterangan" aria-describedby="password-addon">
                                                        </div>
                                                        <label>Jalan</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" name="jalan" placeholder="Jalan" aria-label="keterangan" aria-describedby="password-addon">
                                                        </div>

                                                        <label>Dusun</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" name="dusun" placeholder="Dusun" aria-label="keterangan" aria-describedby="password-addon">
                                                        </div>
                                                        <label>RT - RW</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" name="rt_rw" placeholder="RT - RW" aria-label="keterangan" aria-describedby="password-addon">
                                                        </div>
                                                        <label>Kelurahan</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan" aria-label="keterangan" aria-describedby="password-addon">
                                                        </div>
                                                        <label>Kode Pos</label>
                                                        <div class="input-group mb-3">
                                                            <input type="number" class="form-control" name="kode_pos" placeholder="Kode Pos" aria-label="keterangan" aria-describedby="password-addon">
                                                        </div>
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
                        <div class="pagination justify-content-end mt-3 me-3">
                            <?= $pager->links('default', 'custom_pager'); ?>
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