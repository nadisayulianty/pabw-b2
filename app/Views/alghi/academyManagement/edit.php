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
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-0">
                        <div class="card-header pb-0">
                            <h5>Form Edit Data Mahasiswa</h5>
                            <h6>Halaman ini dibuat untuk menampilkan data mahasiswa</h6>

                            <div class="card-body px-0 pt-0 pb-2">
                                <form action="<?= base_url("table/Academy/new") ?>" method="post" id="text-editor">
                                    <input type="hidden" value="<?= $data['id_transfer'] ?>" name="is_edit">
                                    <div class="row">
                                    <div class="col-md-3">
                                        <label>ID Transfer</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="id_transfer" placeholder="ID Transfer" value="<?= $data['id_transfer'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label>ID Registrasi</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="id_registrasi" placeholder="ID Registrasi" value="<?= $data['id_registrasi'] ?? "invalid" ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label>NIM</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nim" placeholder="NIM" value="<?= $data['nim'] ?? "00000000" ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row kedua (Nama Mahasiswa, ID Prodi, Nama Prodi) -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nama Mahasiswa</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Nama Mahasiswa" value="<?= $data['nama_mahasiswa'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>ID Prodi</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="id_prodi" placeholder="ID Prodi" value="<?= $data['id_prodi'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Nama Prodi</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nama_program_studi" placeholder="Nama Prodi" value="<?= $data['nama_program_studi'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row ketiga (ID Periode Masuk, Kode Mata Kuliah Asal, Nama Mata Kuliah Asal) -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>ID Periode Masuk</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="id_periode_masuk" placeholder="ID Periode Masuk" value="<?= $data['id_periode_masuk'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Nama Mata Kuliah Asal</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nama_mata_kuliah_asal" placeholder="Nama Mata Kuliah Asal" value="<?= $data['nama_mata_kuliah_asal'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row keempat (SKS Mata Kuliah Asal, Nilai Huruf Asal, ID Matkul) -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>SKS Mata Kuliah Asal</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="sks_matkul_asal" placeholder="SKS Mata Kuliah Asal" value="<?= $data['sks_mata_kuliah_asal'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Nilai Huruf Asal</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nilai_huruf_asal" placeholder="Nilai Huruf Asal" value="<?= $data['nilai_huruf_asal'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>ID Matkul</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="id_matkul" placeholder="ID Matkul" value="<?= $data['id_matkul'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row kelima (Kode Matkul Diakui, Nama Mata Kuliah Diakui, SKS Mata Kuliah Diakui) -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Kode Matkul Diakui</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="kode_matkul_diakui" placeholder="Kode Matkul Diakui" value="<?= $data['kode_matkul_diakui'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Nama Mata Kuliah Diakui</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nama_mata_kuliah_diakui" placeholder="Nama Mata Kuliah Diakui" value="<?= $data['nama_mata_kuliah_diakui'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>SKS Mata Kuliah Diakui</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="sks_mata_kuliah_diakui" placeholder="SKS Mata Kuliah Diakui" value="<?= $data['sks_mata_kuliah_diakui'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row keenam (Nilai Huruf Diakui, Nilai Angka Diakui, ID Perguruan Tinggi) -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nilai Huruf Diakui</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nilai_huruf_diakui" placeholder="Nilai Huruf Diakui" value="<?= $data['nilai_huruf_diakui'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Nilai Angka Diakui</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nilai_angka_diakui" placeholder="Nilai Angka Diakui" value="<?= $data['nilai_angka_diakui'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>ID Perguruan Tinggi</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="id_perguruan_tinggi" placeholder="ID Perguruan Tinggi" value="<?= $data['id_perguruan_tinggi'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row ketujuh (ID Aktivitas, Judul, ID Jenis Aktivitas) -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>ID Aktivitas</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="id_aktivitas" placeholder="ID Aktivitas" value="<?= $data['id_aktivitas'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Judul</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="judul" placeholder="Judul" value="<?= $data['judul'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>ID Jenis Aktivitas</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="id_jenis_aktivitas" placeholder="ID Jenis Aktivitas" value="<?= $data['id_jenis_aktivitas'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row kedelapan (Nama Jenis Aktivitas, ID Semester, Nama Semester) -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nama Jenis Aktivitas</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nama_jenis_aktivitas" placeholder="Nama Jenis Aktivitas" value="<?= $data['nama_jenis_aktivitas'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>ID Semester</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="id_semester" placeholder="ID Semester" value="<?= $data['id_semester'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Nama Semester</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nama_semester" placeholder="Nama Semester" value="<?= $data['nama_semester'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row kesembilan (Status Sync) -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Status Sync</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="status_sync" placeholder="Status Sync" value="<?= $data['status_sync'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                    <div class="form-group">
                                        <button type="submit" name="status" value="simpan" class="btn btn-primary">Simpan</button>
                                        <button type="reset" name="status" value="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <body class="g-sidenav-show bg-primary">





    </body>

<?= $this->endSection() ?>