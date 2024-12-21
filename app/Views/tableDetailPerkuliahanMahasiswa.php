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
              <form method="get" action="<?= base_url('table/tableDetailPerkuliahanMahasiswa') ?>" class="d-flex w-100">
                <div class="col-9 px-1">
                  <input type="search" class="form-control" name="search" style="border: none; outline: none; box-shadow: none;" placeholder="Search NIM" value="<?= esc($search) ?>">
                </div>
                <div class="col-3 px-1">
                  <button type="submit" class="btn bg-gradient-info">Search</button>
                </div>
              </form>
            </div>
          </div> 
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-0">
            <div class="card-header pb-0">
              <h5>Tabel Detail Perkuliahan Mahasiswa (230631014 - Mochammad Gifari Amatullah)</h5>
              <!-- <h6>Bagian-1 HKI (Paten, Paten Sederhana)</h6> -->
              <!-- button tambah -->
              <button type="button"  class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#modalCreate">
                Tambah Data
              </button>
              <br>
              <?php if (session()->has('errors')): ?>
                  <div class="alert alert-danger">
                      <ul>
                          <?php foreach (session('errors') as $error): ?>
                              <li><?= esc($error) ?></li>
                          <?php endforeach; ?>
                      </ul>
                  </div>
              <?php endif; ?>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-hover align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">No</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder ">Program Studi</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder">Angkatan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">NIM</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Nama Mahasiswa</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Status Mahasiswa</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">IPK</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Total SKS</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach ($tableDetailPerkuliahanMahasiswa as $tableDetailPerkuliahanMahasiswa): ?>
                    <tr>
                     <td class="text-center">
                          <p class="mb-0 text-sm"><?= $no; ?></p>
                     </td>
                      <td class="text-center">
                            <p class="mb-0 text-sm"><?= $tableDetailPerkuliahanMahasiswa['nama_program_studi'] ?></p>
                      </td>

                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $tableDetailPerkuliahanMahasiswa['angkatan'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $tableDetailPerkuliahanMahasiswa['nim'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $tableDetailPerkuliahanMahasiswa['nama_mahasiswa'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $tableDetailPerkuliahanMahasiswa['nama_status_mahasiswa'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $tableDetailPerkuliahanMahasiswa['ipk'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $tableDetailPerkuliahanMahasiswa['sks_total'] ?></p>
                      </td>
                      
                      <td class="text-center">
                      <!-- aksi -->
                      <a href="<?= base_url('table/tableDetailPerkuliahanMahasiswa/'.$tableDetailPerkuliahanMahasiswa['id_registrasi_mahasiswa'].'/edit') ?>" class="btn bg-gradient-info btn-block">
                        Edit
                      </a>
                      <a href="#" data-href="<?= base_url('table/tableDetailPerkuliahanMahasiswa/' . $tableDetailPerkuliahanMahasiswa['id_registrasi_mahasiswa'] . '/delete') ?>" onclick="confirmToDelete(this)" class="btn bg-gradient-danger btn-block" data-bs-toggle="modal" data-bs-target="#confirm-dialog">Hapus</a>
                      </td>
                      <!-- ------------------------------------ -->
                    </tr>
                    <?php $no++; endforeach ?>
                  </tbody>
                </table>

                <!-- js message data tidak ditemukan  -->
                <div id="resultMessage" class="result-message text-center"></div>

                <!-- modal delete -->
                <div class="modal fade" id="confirm-dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Apakah Anda yakin ingin menghapus data ini?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <button type="button" class="btn btn-danger" onclick="deleteData()">Hapus</button>
                    </div>
                  </div>
                </div>
              </div>
              <div style="display: flex; align-items: end; justify-content: right; padding-right: 10px;">
                <?php echo $pager->links('default', 'custom_pager') ?>
              </div>   
              <!-- js delete -->
              <script>
                function confirmToDelete(element) {
                  var deleteButton = document.getElementById('confirm-dialog').querySelector('.btn-danger');
                  deleteButton.setAttribute('data-href', element.getAttribute('data-href'));
                }

                function deleteData() {
                  var deleteUrl = document.getElementById('confirm-dialog').querySelector('.btn-danger').getAttribute('data-href');

                  window.location.href = deleteUrl;
                }
              </script>

<!-- modal tambah data -->
              <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                  <div class="modal-content">
                    <div class="modal-body p-0">
                      <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                          <h3 class="font-weight-bolder text-primary text-gradient">Tabel Detail Kelas Kuliah</h3>
                            <p class="mb-0">Masukkan data yang anda inginkan</p>
                        </div>
                            <div class="card-body pb-3">
                              <form action="<?= base_url('table/tableDetailPerkuliahanMahasiswa/new') ?>"  method="post" role="form text-left">
                                
                                <label>Id Registrasi Mahasiswa</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="id_registrasi_mahasiswa" value="<?= $getLastID; ?>" placeholder="<?= $getLastID; ?>" aria-label="id_registrasi_mahasiswa" aria-describedby="email-addon" readonly required>
                                </div>
                                <label>Program Studi</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nama_program_studi" placeholder="Program Studi" aria-label="programstudi" aria-describedby="email-addon">
                                </div>
                                <div class="mb-3 row">
                                  <label for="angkatan">Angkatan</label>
                                  <div class="">
                                    <select id="angkatan" name="angkatan" class="form-control" required>
                                      <?php
                                      $tahunSekarang = date("Y");
                                      $selected = "";
                                      for ($tahun = 2000; $tahun <= $tahunSekarang + 5; $tahun++) {
                                          $selected = ($tahun==date("Y")) ? "selected" : "";
                                          echo "<option value='$tahun' {$selected}>$tahun</option>";
                                      }
                                      ?>
                                    </select>
                                  </div>
                                </div>
                                <label>NIM</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nim" placeholder="NIM" aria-label="nim" aria-describedby="password-addon">
                                </div>
                                <label>Nama Mahasiswa</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Nama Mahasiswa" aria-label="nama_mahasiswa" aria-describedby="password-addon">
                                </div>
                                <label>Status Mahasiswa</label>
                                <div class="input-group mb-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nama_status_mahasiswa" id="nama_status_mahasiswa" value="Aktif">
                                        <label class="form-check-label" for="nama_status_mahasiswa">Aktif</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nama_status_mahasiswa" id="nama_status_mahasiswa" value="Tidak Aktif">
                                        <label class="form-check-label" for="nama_status_mahasiswa">Tidak Aktif</label>
                                    </div>
                                </div>
                                <label>IPS</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="ips" placeholder="IPS" aria-label="ips" aria-describedby="password-addon">
                                </div>
                                <label>IPK</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="ipk" placeholder="IPK" aria-label="ipk" aria-describedby="password-addon">
                                </div>
                                <label>SKS Semester</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="sks_semester" placeholder="SKS Semester" aria-label="sks_semester" aria-describedby="password-addon">
                                </div>
                                <label>Total SKS</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="sks_total" placeholder="Total SKS" aria-label="sks_total" aria-describedby="password-addon">
                                </div>
                                <div class="mb-3 row">
                                  <label for="tahun">Tahun</label>
                                  <div class="col-sm-3">
                                    <select id="tahun" name="tahun" class="form-control" required>
                                      <?php
                                      $tahunSekarang = date("Y");
                                      $selected = "";
                                      for ($tahun = 2000; $tahun <= $tahunSekarang + 5; $tahun++) {
                                          $selected = ($tahun==date("Y")) ? "selected" : "";
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
                                          $selected = ($tahun==date("Y")) ? "selected" : "";
                                          echo "<option value='$tahun' {$selected}>$tahun</option>";
                                      }
                                      ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="text-center">
                                  <button type="submit" class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Tambah</button>
                                </div>
                              </form>
                            </div>
                      </div>  
                    </div>
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
 
<!-- js search -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const searchForm = document.getElementById("searchForm");
      const searchInput = document.getElementById("searchInput");
      const resultMessage = document.getElementById("resultMessage");
      const tableBody = document.querySelector(".table tbody");

      function filterRows() {
        const searchText = searchInput.value.toLowerCase();
        let foundRows = 0;

        tableBody.querySelectorAll("tr").forEach(function(row, index) {
          const cells = row.querySelectorAll("td");
          const kategoriText = cells[3].textContent.toLowerCase(); // Ubah sesuai dengan indeks kolom

          if (kategoriText.includes(searchText)) {
            row.style.display = "";
            foundRows++;
          } else {
            row.style.display = "none";
          }
        });

        if (foundRows === 0) {
          resultMessage.textContent = "Data tidak ditemukan";
        } else {
          resultMessage.textContent = "";
        }
      }

      searchForm.addEventListener("submit", function(event) {
        event.preventDefault();
        filterRows();
      });

      searchInput.addEventListener("input", filterRows);

      filterRows();
    });
  </script>

  </body>

<?= $this->endSection() ?>


