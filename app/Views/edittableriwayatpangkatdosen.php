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
                                placeholder="nidn" value="<?= $tableriwayatpangkatdosen['nidn'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_dosen">Nama Dosen</label>
                            <input type="text" name="nama_dosen" class="form-control" 
                                placeholder="nama_dosen" value="<?= $tableriwayatpangkatdosen['nama_dosen'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_pangkat_golongan">Nama Pangkat Golongan</label>
                            <input type="text" name="nama_pangkat_golongan" class="form-control" 
                                placeholder="nama_pangkat_golongan" value="<?= $tableriwayatpangkatdosen['nama_pangkat_golongan'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="sk_pangkat">SK Pangkat</label>
                            <input type="text" name="sk_pangkat" class="form-control" 
                                placeholder="sk_pangkat" value="<?= $tableriwayatpangkatdosen['sk_pangkat'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal_sk_pangkat">Tanggal SK Pangkat</label>
                            <input type="text" name="tanggal_sk_pangkat" class="form-control" 
                                placeholder="tanggal_sk_pangkat" value="<?= $tableriwayatpangkatdosen['tanggal_sk_pangkat'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="mulai_sk_pangkat">Mulai SK Pangkat</label>
                            <input type="text" name="mulai_sk_pangkat" class="form-control" 
                                placeholder="mulai_sk_pangkat" value="<?= $tableriwayatpangkatdosen['mulai_sk_pangkat'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="masa_kerja_dalam_tahun">Masa Kerja Dalam Tahun</label>
                            <input type="text" name="masa_kerja_dalam_tahun" class="form-control" 
                                placeholder="masa_kerja_dalam_tahun" value="<?= $tableriwayatpangkatdosen['masa_kerja_dalam_tahun'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="masa_kerja_dalam_bulan">Masa Kerja Dalam Bulan</label>
                            <input type="text" name="masa_kerja_dalam_bulan" class="form-control" 
                                placeholder="masa_kerja_dalam_bulan" value="<?= $tableriwayatpangkatdosen['masa_kerja_dalam_bulan'] ?>" required>
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