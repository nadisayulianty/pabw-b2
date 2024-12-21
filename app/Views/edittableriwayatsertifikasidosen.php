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
                        <div class="form-group mb-3">
                            <label for="nidn">NIDN</label>
                            <input type="text" name="nidn" class="form-control" 
                                placeholder="nidn" value="<?= $tableriwayatsertifikasidosen['nidn'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_dosen">Nama Dosen</label>
                            <input type="text" name="nama_dosen" class="form-control" 
                                placeholder="nama_dosen" value="<?= $tableriwayatsertifikasidosen['nama_dosen'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nomor_peserta">Nomor Peserta</label>
                            <input type="text" name="nomor_peserta" class="form-control" 
                                placeholder="nomor_peserta" value="<?= $tableriwayatsertifikasidosen['nomor_peserta'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="id_bidang_studi">ID Bidang Studi</label>
                            <input type="text" name="id_bidang_studi" class="form-control" 
                                placeholder="id_bidang_studi" value="<?= $tableriwayatsertifikasidosen['id_bidang_studi'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_bidang_studi">Nama Bidang Studi</label>
                            <input type="text" name="nama_bidang_studi" class="form-control" 
                                placeholder="nama_bidang_studi" value="<?= $tableriwayatsertifikasidosen['nama_bidang_studi'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="id_jenis_sertifikasi">ID Jenis Sertifikasi</label>
                            <input type="text" name="id_jenis_sertifikasi" class="form-control" 
                                placeholder="id_jenis_sertifikasi" value="<?= $tableriwayatsertifikasidosen['id_jenis_sertifikasi'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_jenis_sertifikasi">Nama Jenis Sertifikasi</label>
                            <input type="text" name="nama_jenis_sertifikasi" class="form-control" 
                                placeholder="nama_jenis_sertifikasi" value="<?= $tableriwayatsertifikasidosen['nama_jenis_sertifikasi'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tahun_sertifikasi">Tahun Sertifikasi</label>
                            <input type="text" name="tahun_sertifikasi" class="form-control" 
                                placeholder="tahun_sertifikasi" value="<?= $tableriwayatsertifikasidosen['tahun_sertifikasi'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="sk_sertifikasi">SK Sertifikasi</label>
                            <input type="text" name="sk_sertifikasi" class="form-control" 
                                placeholder="sk_sertifikasi" value="<?= $tableriwayatsertifikasidosen['sk_sertifikasi'] ?>" required>
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
  <div class="min-height-300 bg-gray-100 position-absolute w-100"></div>
 

  

  </body>

<?= $this->endSection() ?>