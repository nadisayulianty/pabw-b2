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
                <h5>Form Edit Detail Perkuliahan Mahasiswa</h5>
                
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="" method="post" id="text-editor">
                        <label>Id Registrasi Mahasiswa</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="id_registrasi_mahasiswa" value="<?= $tableDetailPerkuliahanMahasiswa['id_registrasi_mahasiswa']; ?>" aria-label="id_registrasi_mahasiswa" aria-describedby="email-addon" readonly required>
                        </div>
                        <label>Program Studi</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nama_program_studi" value="<?= $tableDetailPerkuliahanMahasiswa['nama_program_studi']; ?>" placeholder="Program Studi" aria-label="programstudi" aria-describedby="email-addon">
                        </div>
                        <div class="mb-3 row">
                            <label for="angkatan">Angkatan</label>
                            <div class="">
                            <select id="angkatan" name="angkatan" class="form-control" required>
                                <?php
                                $tahunSekarang = date("Y");
                                $selected = "";
                                for ($tahun = 2000; $tahun <= $tahunSekarang + 5; $tahun++) {
                                    $selected = ($tahun==$tableDetailPerkuliahanMahasiswa['angkatan']) ? "selected" : "";
                                    echo "<option value='$tahun' {$selected}>$tahun</option>";
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                        <label>NIM</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nim" value="<?= $tableDetailPerkuliahanMahasiswa['nim']; ?>" placeholder="NIM" aria-label="nim" aria-describedby="password-addon">
                        </div>
                        <label>Nama Mahasiswa</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nama_mahasiswa" value="<?= $tableDetailPerkuliahanMahasiswa['nama_mahasiswa']; ?>" placeholder="Nama Mahasiswa" aria-label="nama_mahasiswa" aria-describedby="password-addon">
                        </div>
                        <label>Status Mahasiswa</label>
                        <div class="input-group mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nama_status_mahasiswa" id="nama_status_mahasiswa" value="Aktif" <?php echo ($tableDetailPerkuliahanMahasiswa['nama_status_mahasiswa'] == 'Aktif') ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="nama_status_mahasiswa">Aktif</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nama_status_mahasiswa" id="nama_status_mahasiswa" value="Tidak Aktif" <?php echo ($tableDetailPerkuliahanMahasiswa['nama_status_mahasiswa'] == 'Tidak Aktif') ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="nama_status_mahasiswa">Tidak Aktif</label>
                            </div>
                        </div>
                        <label>IPS</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="ips" value="<?= $tableDetailPerkuliahanMahasiswa['ips']; ?>" placeholder="IPS" aria-label="ips" aria-describedby="password-addon">
                        </div>
                        <label>IPK</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="ipk" value="<?= $tableDetailPerkuliahanMahasiswa['ipk']; ?>" placeholder="IPK" aria-label="ipk" aria-describedby="password-addon">
                        </div>
                        <label>SKS Semester</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="sks_semester" value="<?= $tableDetailPerkuliahanMahasiswa['sks_semester']; ?>" placeholder="SKS Semester" aria-label="sks_semester" aria-describedby="password-addon">
                        </div>
                        <label>Total SKS</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="sks_total" value="<?= $tableDetailPerkuliahanMahasiswa['sks_total']; ?>" placeholder="Total SKS" aria-label="sks_total" aria-describedby="password-addon">
                        </div>
                        <div class="mb-3 row">
                          <label for="tahun">Tahun</label>
                          <div class="col-sm-3">
                            <select id="tahun" name="tahun" class="form-control" required>
                              <?php
                              $tahunSekarang = date("Y");
                              $selected = "";
                              $getthn = explode("/", $tableDetailPerkuliahanMahasiswa['nama_semester']);
                              for ($tahun = 2000; $tahun <= $tahunSekarang + 5; $tahun++) {
                                  $selected = ($tahun==$getthn[0]) ? "selected" : "";
                                  echo "<option value='$tahun' {$selected}>$tahun</option>";
                              }
                              ?>
                            </select>
                          </div>
                          <div class="col-sm-2 d-flex justify-content-center align-items-center">
                            S/D
                          </div>
                          <div class="col-sm-3">
                            <select id="tahun2" name="tahun2" class="form-control" required>
                              <?php
                              $tahunSekarang = date("Y");
                              $selected = "";
                              for ($tahun = 2000; $tahun <= $tahunSekarang + 5; $tahun++) {
                                  $selected = ($tahun==$getthn[1]) ? "selected" : "";
                                  echo "<option value='$tahun' {$selected}>$tahun</option>";
                              }
                              ?>
                            </select>
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
  <div class="min-height-300 bg-gray-100 position-absolute w-100"></div>
 

  

  </body>

<?= $this->endSection() ?>