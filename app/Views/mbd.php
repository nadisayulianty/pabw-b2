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
            <form action="<?= base_url('table/mbd/cari') ?>" method="GET" id="searchForm">
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
              <h5>Table Mahasiswa Bimbingan Dosen</h5>
              

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
                      <th class="text-center text-uppercase text-xxs font-weight-bolder ">Judul</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Nama Kategori Kegiatan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">NIDN</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Nama Dosen</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Pembimbing Ke</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($mbd as $value): ?>
                    <tr>
                      <td class="text-wrap">
                            <p class="mb-0 text-sm"><?= $value['judul'] ?></p>
                      </td>
                      <td class="text-wrap">
                        <p class="mb-0 text-sm"><?= $value['nama_kategori_kegiatan'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $value['nidn'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $value['nama_dosen'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $value['pembimbing_ke'] ?></p>
                      </td>
                      
                      <td class="text-center">
                        <a href="<?= base_url('table/mbd/edit/' . $value['no']) ?>" class="btn btn-sm bg-gradient-info">Edit</a>
                        <button type="button" class="btn btn-sm bg-gradient-danger" data-bs-toggle="modal" data-bs-target="#confirm-dialog" onclick="confirmToDelete(this)" data-href="<?= base_url('table/mbd/delete/' . $value['no']) ?>">Hapus</button>
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
                              <form action="<?= base_url('table/mbd/new') ?>"  method="post" role="form text-left">
                                
                                <label>Id Aktivitas</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="id_aktivitas" placeholder="Id Aktivitas" aria-describedby="email-addon">
                                </div>
                                <label>Judul</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="judul" placeholder="Judul" aria-describedby="email-addon">
                                </div>
                                <label>Id Bimbing Mahasiswa</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="id_bimbing_mahasiswa" placeholder="Id Bimbing Mahasiswa" aria-describedby="email-addon">
                                </div>
                                <label>Id Kategori Kegiatan</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="id_kategori_kegiatan" placeholder="Id Kategori Kegiatan" aria-describedby="password-addon">
                                </div>
                                <label>Nama Kategori Kegiatan</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nama_kategori_kegiatan" placeholder="Nama Kategori Kegiatan" aria-describedby="password-addon">
                                </div>
                                <label>id_dosen</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="id_dosen" placeholder="id_dosen" aria-describedby="password-addon">
                                </div>
                                <label>NIDN</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nidn" placeholder="NIDN" aria-describedby="password-addon">
                                </div>
                                <label>Nama Dosen</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nama_dosen" placeholder="Nama Dosen" aria-describedby="password-addon">
                                </div>
                                <label>Pembimbing Ke</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="pembimbing_ke" placeholder="Pembimbing Ke" aria-describedby="password-addon">
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


