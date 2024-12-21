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
            <form action="<?= base_url('table/periode/cari') ?>" method="GET" id="searchForm">
            <span class="input-group-text text-body"><input type="search" id="searchInput" name="search" placeholder="Cari berdasarkan keterangan.." /><i class="fas fa-search" aria-hidden="true"></i></span>
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
              <h5>Table Periode</h5>
              

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
                      <th class="text-center text-uppercase text-xxs font-weight-bolder ">Kode Prodi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Nama Program Studi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Status Prodi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Jenjang Pendidikan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Periode Pelaporan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Tipe Periode</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($periode as $value): ?>
                    <tr>
                      <td class="text-center">
                            <p class="mb-0 text-sm"><?= $value['kode_prodi'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $value['nama_program_studi'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $value['status_prodi'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $value['jenjang_pendidikan'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $value['periode_pelaporan'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $value['tipe_periode'] ?></p>
                      </td>
                      
                      <td class="text-center">
                        <a href="<?= base_url('table/periode/edit/' . $value['no']) ?>" class="btn btn-sm bg-gradient-info">Edit</a>
                        <button type="button" class="btn btn-sm bg-gradient-danger" data-bs-toggle="modal" data-bs-target="#confirm-dialog" onclick="confirmToDelete(this)" data-href="<?= base_url('table/periode/delete/' . $value['no']) ?>">Hapus</button>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <div class="pagination justify-content-center mt-3">
                <?= $pager->makeLinks($page,$perPage, $total, 'custom_pager') ?>
                </div>
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
                          <h3 class="font-weight-bolder text-primary text-gradient">Tabel Mahasiswa</h3>
                            <p class="mb-0">Masukkan data yang anda inginkan</p>
                        </div>
                            <div class="card-body pb-3">
                              <form action="<?= base_url('table/periode/new') ?>"  method="post" role="form text-left">
                                
                                <label>Id Prodi</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="id_prodi" placeholder="Id Prodi" aria-label="idprodi" aria-describedby="email-addon">
                                </div>
                                <label>Kode Prodi</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="kode_prodi" placeholder="Kode Prodi" aria-label="mahasiswabimbimgandosen" aria-describedby="email-addon">
                                </div>
                                <label>Nama Program Studi</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nama_program_studi" placeholder="Nama Program Studi" aria-label="namaprogramstudi" aria-describedby="password-addon">
                                </div>
                                <div class="text-center">
                                </div>
                                <label>Status Prodi</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="status_prodi" placeholder="Status Prodi" aria-label="statusprodi" aria-describedby="password-addon">
                                </div>
                                <div class="text-center">
                                </div>
                                <label>Jenjang Pendidikan</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="jenjang_pendidikan" placeholder="Jenjang Pendidikan" aria-label="jenjangpendidikan" aria-describedby="password-addon">
                                </div>
                                <div class="text-center">
                                </div>
                                <label>Periode Pelaporan</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="periode_pelaporan" placeholder="Periode Pelaporan" aria-label="periodepelaporan" aria-describedby="password-addon">
                                </div>
                                <div class="text-center">
                                </div>
                                <label>Tipe Pelaporan</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="tipe_pelaporan" placeholder="Tipe Pelaporan" aria-label="tipepelaporan" aria-describedby="password-addon">
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
          const kategoriText = cells[3].textContent.toLowerCase(); // Ubah sesuai dengan indeks kolom yang berisi kategori

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


