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
                        <label for="id_dosen">Id Dosen</label>
                        <input type="text" name="id_dosen" class="form-control" 
                                placeholder="rfd id_dosen" value="<?= $rfd['id_dosen'] ?>" required>
                        </div>
                        <div class="form-group mb">
                        <label for="nidn">NIDN</label>
                        <input type="text" name="nidn" class="form-control" 
                                placeholder="rfd nidn" value="<?= $rfd['nidn'] ?>" required>
                        </div>
                        <div class="form-group mb">
                        <label for="nama_dosen">Nama Dosen</label>
                        <input type="text" name="nama_dosen" class="form-control" 
                                placeholder="rfd nama_dosen" value="<?= $rfd['nama_dosen'] ?>" required>
                        </div>
                        <div class="form-group mb">
                        <label for="id_jabatan_fungsional">Id Jabatan Fungsional</label>
                        <input type="text" name="id_jabatan_fungsional" class="form-control" 
                                placeholder="rfd id_jabatan_fungsional" value="<?= $rfd['id_jabatan_fungsional'] ?>" required>
                        </div>
                        <label for="nama_jabatan_fungsional">Nama Jabatan Fungsional</label>
                        <input type="text" name="nama_jabatan_fungsional" class="form-control" 
                                placeholder="rfd nama_jabatan_fungsional" value="<?= $rfd['nama_jabatan_fungsional'] ?>" required>
                        </div>
                        <div class="form-group mb">
                        <label for="sk_jabatan_fungsional">SK Jabatan Fungsional</label>
                        <input type="text" name="sk_jabatan_fungsional" class="form-control" 
                                placeholder="rfd sk_jabatan_fungsional" value="<?= $rfd['sk_jabatan_fungsional'] ?>" required>
                        </div>
                        <div class="form-group mb">
                        <label for="mulai_sk_jabatan">Mulai SK Jabatan</label>
                        <input type="text" name="mulai_sk_jabatan" class="form-control" 
                                placeholder="rfd mulai_sk_jabatan" value="<?= $rfd['mulai_sk_jabatan'] ?>" required>
                        </div>                  
                        </div>
                        

                        <div class="form-group mb">
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