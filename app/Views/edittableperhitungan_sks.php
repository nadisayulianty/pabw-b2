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
                            <label for="id_dosen">Id Dosen</label>
                            <input type="text" name="id_dosen" class="form-control" 
                                placeholder="Id Dosen" value="<?= $perhitungansks['id_dosen'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_dosen">Nama</label>
                            <input type="text" name="nama_dosen" class="form-control" 
                                placeholder="Nama" value="<?= $perhitungansks['nama_dosen'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nidn">NIDN</label>
                            <input type="text" name="nidn" class="form-control" 
                                placeholder="NIDN" value="<?= $perhitungansks['nidn'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="id_kelas_kuliah">Id Kelas Kuliah</label>
                            <input type="text" name="id_kelas_kuliah" class="form-control" 
                                placeholder="Id Kelas Kuliah" value="<?= $perhitungansks['id_kelas_kuliah'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="id_registrasi_dosen">Id Registrasi Dosen</label>
                            <input type="text" name="id_registrasi_dosen" class="form-control" 
                                placeholder="L" value="<?= $perhitungansks['id_registrasi_dosen'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_kelas_kuliah">Nama Kelas Kulih</label>
                            <input type="text" name="nama_kelas_kuliah" class="form-control" 
                                placeholder="Nama Kelas Kulih" value="<?= $perhitungansks['nama_kelas_kuliah'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="id_substansi">Id Substansi</label>
                            <input type="text" name="id_substansi" class="form-control" 
                                placeholder="Id Substansi" value="<?= $perhitungansks['id_substansi'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_substansi">Nama Substansi</label>
                            <input type="text" name="nama_substansi" class="form-control" 
                                placeholder="Nama Substansi" value="<?= $perhitungansks['nama_substansi'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="rencana_minggu_pertemuan">Rencana Minggu Pertemuan</label>
                            <input type="text" name="rencana_minggu_pertemuan" class="form-control" 
                                placeholder="Rencana Minggu Pertemuan" value="<?= $perhitungansks['rencana_minggu_pertemuan'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="perhitungan_sks">Perhitungan SKS</label>
                            <input type="text" name="perhitungan_sks" class="form-control" 
                                placeholder="Perhitungan SKS" value="<?= $perhitungansks['perhitungan_sks'] ?>" required>
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