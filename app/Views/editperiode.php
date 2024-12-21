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
                        <div class="form-group mb">
                        <label for="id_prodi">Id Prodi</label>
                        <input type="text" name="id_prodi" class="form-control" 
                                placeholder="periode id_prodi" value="<?= $periode['id_prodi'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kode_prodi">Kode Prodi</label>
                            <input type="text" name="kode_prodi" class="form-control" 
                                placeholder="periode kode_prodi" value="<?= $periode['kode_prodi'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_program_studi">Nama Program Studi</label>
                            <input type="text" name="nama_program_studi" class="form-control" 
                                placeholder="periode nama_program_studi" value="<?= $periode['nama_program_studi'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="status_prodi">Status Prodi</label>
                            <input type="text" name="status_prodi" class="form-control" 
                                placeholder="periode status_prodi" value="<?= $periode['status_prodi'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenjang_pendidikan">Jenjang Pendidikan</label>
                            <input type="text" name="jenjang_pendidikan" class="form-control" 
                                placeholder="periode jenjang_pendidikan" value="<?= $periode['jenjang_pendidikan'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="periode_pelaporan">Periode Pelaporan</label>
                            <input type="text" name="periode_pelaporan" class="form-control" 
                                placeholder="periode periode_pelaporan" value="<?= $periode['periode_pelaporan'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tipe_periode">Tipe Periode</label>
                            <input type="text" name="tipe_periode" class="form-control" 
                                placeholder="periode tipe_periode" value="<?= $periode['tipe_periode'] ?>" required>
                        </div>
                        </div>
                        

                        <div class="form-group">
                            <button type="submit" name="status" value="simpan" class="btn btn-primary">Simpan</button>
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