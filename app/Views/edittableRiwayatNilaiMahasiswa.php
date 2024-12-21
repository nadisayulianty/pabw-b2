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
                <h5>Form Edit Riwayat Nilai Mahasiswa</h5>
                
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="" method="post" id="text-editor">
                        <label>Id Registrasi Mahasiswa</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="id_registrasi_mahasiswa" value="<?= $tableRiwayatNilaiMahasiswa['id_registrasi_mahasiswa']; ?>" aria-label="id_registrasi_mahasiswa" aria-describedby="email-addon" readonly required>
                        </div>
                        <label>Program Studi</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nama_program_studi" value="<?= $tableRiwayatNilaiMahasiswa['nama_program_studi']; ?>" placeholder="Program Studi" aria-label="programstudi" aria-describedby="email-addon">
                        </div>
                        <label>Mata Kuliah</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nama_mata_kuliah" value="<?= $tableRiwayatNilaiMahasiswa['nama_mata_kuliah']; ?>" placeholder="Mata Kuliah" aria-label="matakuliah" aria-describedby="email-addon">
                        </div>
                        <label>Kelas</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nama_kelas_kuliah" value="<?= $tableRiwayatNilaiMahasiswa['nama_kelas_kuliah']; ?>" placeholder="Kelas" aria-label="kelas" aria-describedby="email-addon">
                        </div>
                        <label>SKS Mata Kuliah</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="sks_mata_kuliah" value="<?= $tableRiwayatNilaiMahasiswa['sks_mata_kuliah']; ?>" placeholder="SKS Mata Kuliah" aria-label="sksmatkul" aria-describedby="email-addon">
                        </div>
                        <label>NIM</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nim" value="<?= $tableRiwayatNilaiMahasiswa['nim']; ?>" placeholder="NIM" aria-label="nim" aria-describedby="password-addon">
                        </div>
                        <label>Nama Mahasiswa</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nama_mahasiswa" value="<?= $tableRiwayatNilaiMahasiswa['nama_mahasiswa']; ?>" placeholder="Nama Mahasiswa" aria-label="nama_mahasiswa" aria-describedby="password-addon">
                        </div>
                        <div class="mb-3 row">
                            <label for="angkatan">Angkatan</label>
                            <div class="">
                            <select id="angkatan" name="angkatan" class="form-control" required>
                                <?php
                                $tahunSekarang = date("Y");
                                $selected = "";
                                for ($tahun = 2000; $tahun <= $tahunSekarang + 5; $tahun++) {
                                    $selected = ($tahun==$tableRiwayatNilaiMahasiswa['angkatan']) ? "selected" : "";
                                    echo "<option value='$tahun' {$selected}>$tahun</option>";
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                        <label>Nilai</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nilai_angka" value="<?= $tableRiwayatNilaiMahasiswa['nilai_angka']; ?>" placeholder="Nilai Matkul" aria-label="Nilai" aria-describedby="password-addon">
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