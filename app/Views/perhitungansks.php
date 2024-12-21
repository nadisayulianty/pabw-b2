<?= $this->extend('layout/admin/layout') ?>

<?= $this->section('content') ?>

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-id_dosenne border-radius-xl " id="navbarBlur" data-scroll="false">
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
            <form action="<?= base_url('table/perhitungansks/cari') ?>" method="GET" id="searchForm">
            <span class="input-group-text text-body"><input type="search" id="searchInput" name="search" placeholder="Cari berdasarkan substansi.." /><i class="fas fa-search" aria-hidden="true"></i></span>
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
              <h5>Perhitungan SKS (Rama Rizky Febrian)</h5>
              

              <button type="button"  class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#modalCreate">
                Tambah Data
              </button>
              <br>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-hover align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder ">id kelas kuliah</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder ">id registrasi dosen</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder ">id dosen</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder ">nidn</th>
                      <td class="text-center text-uppercase text-xxs font-weight-bolder ">nama dosen</td>
                      <td class="text-center text-uppercase text-xxs font-weight-bolder ">nama kelas kuliah</td>
                      <td class="text-center text-uppercase text-xxs font-weight-bolder ">id substansi</td>
                                           
                      <th class="text-center text-uppercase text-xxs font-weight-bolder ">substansi</th>
                      
                                            
                      <td class="text-center text-uppercase text-xxs font-weight-bolder ">rencana minggu pertemuan</td>
                      <td class="text-center text-uppercase text-xxs font-weight-bolder ">perhitungan sks</td>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $id_dosen=1; foreach($perhitungansks as $perhitungansks): ?>
                    <tr>
                    
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $perhitungansks['id_kelas_kuliah'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $perhitungansks['id_registrasi_dosen'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $perhitungansks['id_dosen'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $perhitungansks['nidn'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $perhitungansks['nama_dosen'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $perhitungansks['nama_kelas_kuliah'] ?></p>
                      </td>   
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $perhitungansks['id_substansi'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $perhitungansks['nama_substansi'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $perhitungansks['rencana_minggu_pertemuan'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $perhitungansks['perhitungan_sks'] ?></p>
                      </td>
                      
                      <td class="text-center">
                      
                      <a href="<?= base_url('table/perhitungansks/'.$perhitungansks['id_dosen'].'/edit') ?>" class="btn bg-gradient-info btn-block">
                        Edit
                      </a>
                      <a href="#" data-href="<?= base_url('table/perhitungansks/'.$perhitungansks['id_dosen'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-danger btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirm-dialog">Hapus</a>
                      </td>
                    </tr>
                    <?php $id_dosen++; endforeach ?>
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
                          <h3 class="font-weight-bolder text-primary text-gradient">Perhitungan SKS</h3>
                            <p class="mb-0">Masukkan data yang anda inginkan</p>
                        </div>
                            <div class="card-body pb-3">
                              <form action="<?= base_url('table/perhitungansks/new') ?>"  method="post" role="form text-left">
                              
                                <label>Id Kelas Kuliah</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="id_kelas_kuliah" placeholder="Id Kelas Kuliah" aria-label="id_kelas_kuliah" aria-describedby="email-addon" required>
                                </div>
                                <label>Id Registrasi Dosen</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="id_registrasi_dosen" placeholder="Id Registrasi Dosen" aria-label="id_registrasi_dosen" aria-describedby="email-addon" required>
                                </div>
                                <label>Id Dosen</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="id_dosen" placeholder="Id Dosen" aria-label="id_dosen" aria-describedby="password-addon" required>
                                </div>
                                <div class="text-center">
                                  
                                </div>
                                <label>NIDN</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nidn" placeholder="NIDN" aria-label="nidn" aria-describedby="password-addon" required>
                                </div>
                                <div class="text-center">
                                  
                                </div>
                                <label>Nama Dosen</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nama_dosen" placeholder="Nama Dosen" aria-label="nama_dosen" aria-describedby="password-addon" required>
                                </div>
                                <div class="text-center">
                                </div>
                                <label>Nama Kelas Kuliah</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nama_kelas_kuliah" placeholder="Nama Kelas Kuliah" aria-label="nama_kelas_kuliah" aria-describedby="password-addon" required>
                                </div>
                                <div class="text-center">
                                </div>
                                <label>Id Substansi</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="id_substansi" placeholder="Id Substansi" aria-label="id_substansi" aria-describedby="password-addon" required>
                                </div>
                                <div class="text-center">
                                </div>
                                <label>Nama Substansi</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nama_substansi" placeholder="Nama Substansi" aria-label="nama_substansi" aria-describedby="password-addon" required>
                                </div>
                                <div class="text-center">
                                </div>
                                <label>Rencana Minggu Pertemuan</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="rencana_minggu_pertemuan" placeholder="Rencana Minggu Pertemuan" aria-label="rencana_minggu_pertemuan" aria-describedby="password-addon" required>
                                </div>
                                <div class="text-center">
                                </div>
                                <label>Perhitungan SKS</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="perhitungan_sks" placeholder="Perhitungan SKS" aria-label="perhitungan_sks" aria-describedby="password-addon" required>
                                </div>
                                <div class="text-center">
                                </div>
                                <div class="text-center">
                                </div>
                                <button type="submit" class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Tambah</button>
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
          const kategoriText = cells[7].textContent.toLowerCase(); // Ubah sesuai dengan indeks kolom yang berisi kategori

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


