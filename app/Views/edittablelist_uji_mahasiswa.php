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
                            <label for="id_aktivitas">Id Aktivitas</label>
                            <input type="text" name="id_aktivitas" class="form-control" 
                                placeholder="Id Aktivitas" value="<?= $list_uji_mahasiswa['id_aktivitas'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" 
                                placeholder="Judul" value="<?= $list_uji_mahasiswa['judul'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="id_uji">Id Uji</label>
                            <input type="text" name="id_uji" class="form-control" 
                                placeholder="Id Uji" value="<?= $list_uji_mahasiswa['id_uji'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="id_kategori_kegiatan">Id Kategori Kegiatan</label>
                            <input type="text" name="id_kategori_kegiatan" class="form-control" 
                                placeholder="Id Kategori Kegiatan" value="<?= $list_uji_mahasiswa['id_kategori_kegiatan'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_kategori_kegiatan">Nama Kegiatan</label>
                            <input type="text" name="nama_kategori_kegiatan" class="form-control" 
                                placeholder="Nama Kegiatan" value="<?= $list_uji_mahasiswa['nama_kategori_kegiatan'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="id_dosen">Id Dosen</label>
                            <input type="text" name="id_dosen" class="form-control" 
                                placeholder="Id Dosen" value="<?= $list_uji_mahasiswa['id_dosen'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nidn">NIDN</label>
                            <input type="text" name="nidn" class="form-control" 
                                placeholder="NIDN" value="<?= $list_uji_mahasiswa['nidn'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_dosen">Nama Dosen</label>
                            <input type="text" name="nama_dosen" class="form-control" 
                                placeholder="Nama Dosen" value="<?= $list_uji_mahasiswa['nama_dosen'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="penguji_ke">Penguji Ke</label>
                            <input type="text" name="penguji_ke" class="form-control" 
                                placeholder="Penguji Ke" value="<?= $list_uji_mahasiswa['penguji_ke'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="status_sync">Status</label>
                            <input type="text" name="status_sync" class="form-control" 
                                placeholder="Status" value="<?= $list_uji_mahasiswa['status_sync'] ?>" required>
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