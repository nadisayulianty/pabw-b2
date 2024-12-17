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
                                <form action="<?= base_url("table/mahasiswa/new") ?>" method="post" id="text-editor">
                                    <input type="hidden" value="is_edit">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nama Mahasiswa</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Nama Mahasiswa" required value="<?= $data['nama_mahasiswa'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Jenis Kelamin</label>
                                            <div class="input-group mb-3">
                                                <select class="form-control" name="jenis_kelamin" required>
                                                    <option value="">Pilih Jenis Kelamin</option>
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Row kedua (Tanggal Lahir, NIPD) -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Tanggal Lahir</label>
                                            <div class="input-group mb-3">
                                                <input type="date" class="form-control" name="tanggal_lahir" required value="<?= $data['tanggal_lahir'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>NIPD</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="nipd" placeholder="Nomor Induk Peserta Didik" required value="<?= $data['nipd'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Row ketiga (IPK, Total SKS) -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>IPK</label>
                                            <div class="input-group mb-3">
                                                <input type="number" step="0.01" class="form-control" name="ipk" placeholder="IPK" required value="<?= $data['ipk'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Total SKS</label>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" name="total_sks" placeholder="Total SKS" required value="<?= $data['total_sks'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Row keempat (Nama Agama, Nama Program Studi) -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nama Agama</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="nama_agama" placeholder="Nama Agama" required value="nama_agama">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Nama Program Studi</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="nama_program_studi" placeholder="Nama Program Studi" required value="<?= $data['nama_program_studi'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Row kelima (Nama Status Mahasiswa, NIM) -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nama Status Mahasiswa</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="nama_status_mahasiswa" placeholder="Nama Status Mahasiswa" required value="<?= $data['nama_status_mahasiswa'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>NIM</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa" required value="<?= $data['nim'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Row terakhir (Nama Periode Masuk, Tanggal Keluar) -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nama Periode Masuk</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="nama_periode_masuk" placeholder="Nama Periode Masuk" required value="<?= $data['nama_periode_masuk'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Tanggal Keluar</label>
                                            <div class="input-group mb-3">
                                                <input type="date" class="form-control" name="tanggal_keluar" value="<?= $data['tanggal_keluar'] ?>">
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