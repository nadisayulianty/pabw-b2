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
                        <h5>Form Edit</h5>

                        <div class="card-body px-0 pt-0 pb-2">
                            <form action="" method="post" id="text-editor">
                                <label>Nama Perguruan Tinggi</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="<?= $profilPt['nama_perguruan_tinggi'] ?>" name="nama_perguruan_tinggi" placeholder="Nama Perguruan Tinggi" aria-describedby="email-addon" required>
                                </div>
                                <label>Telepon</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="<?= $profilPt['telepon'] ?>" name="telepon" placeholder="No Telepon" aria-describedby="email-addon">
                                </div>
                                <label>Faximile</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="<?= $profilPt['faximile'] ?>" name="faximile" placeholder="Faximile" aria-describedby="email-addon">
                                </div>
                                <label>Email</label>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" value="<?= $profilPt['email'] ?>" name="email" placeholder="Email" aria-label="keterangan" aria-describedby="password-addon">
                                </div>
                                <label>Website</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="<?= $profilPt['website'] ?>" name="website" placeholder="Website" aria-label="keterangan" aria-describedby="password-addon">
                                </div>
                                <label>Jalan</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="<?= $profilPt['jalan'] ?>" name="jalan" placeholder="Jalan" aria-label="keterangan" aria-describedby="password-addon">
                                </div>

                                <label>Dusun</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="<?= $profilPt['dusun'] ?>" name="dusun" placeholder="Dusun" aria-label="keterangan" aria-describedby="password-addon">
                                </div>
                                <label>RT - RW</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="<?= $profilPt['rt_rw'] ?>" name="rt_rw" placeholder="RT - RW" aria-label="keterangan" aria-describedby="password-addon">
                                </div>
                                <label>Kelurahan</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="<?= $profilPt['kelurahan'] ?>" name="kelurahan" placeholder="Kelurahan" aria-label="keterangan" aria-describedby="password-addon">
                                </div>
                                <label>Kode Pos</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" value="<?= $profilPt['kode_pos'] ?>" name="kode_pos" placeholder="Kode Pos" aria-label="keterangan" aria-describedby="password-addon">
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