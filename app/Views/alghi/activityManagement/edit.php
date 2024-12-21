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
                                <form action="<?= base_url("table/activity/new") ?>" method="post" id="text-editor">
                                    <input type="hidden" value="<?= $data['id_aktivitas'] ?>" name="is_edit">
                                    <div class="row">
                                    <div class="col-md-6">
                                        <label>Asal Data</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="asal_data" placeholder="Asal Data" value="<?= $data['asal_data'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>ID Aktivitas</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="id_aktivitas" placeholder="ID Aktivitas" value="<?= $data['id_aktivitas'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row kedua (Program MBKM, Nama Program MBKM) -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Program MBKM</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="program_mbkm" placeholder="Program MBKM" value="<?= $data['program_mbkm'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nama Program MBKM</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nama_program_mbkm" placeholder="Nama Program MBKM" value="<?= $data['nama_program_mbkm'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row ketiga (Jenis Anggota, Nama Jenis Anggota) -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jenis Anggota</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="jenis_anggota" placeholder="Jenis Anggota" value="<?= $data['jenis_anggota'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nama Jenis Anggota</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nama_jenis_anggota" placeholder="Nama Jenis Anggota" value="<?= $data['nama_prodi'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row keempat (Nama Jenis Aktivitas, Nama Prodi) -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Jenis Aktivitas</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nama_jenis_aktivitas" placeholder="Nama Jenis Aktivitas" value="<?= $data['nama_jenis_aktivitas'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nama Prodi</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nama_prodi" placeholder="Nama Prodi" value="<?= $data['nama_prodi'] ?>" required>
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