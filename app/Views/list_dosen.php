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
            <form action="<?= base_url('table/list_dosen/cari') ?>" method="GET" id="searchForm">
            <span class="input-group-text text-body"><input type="search" id="searchInput" name="search" placeholder="Cari berdasarkan dosen.." /><i class="fas fa-search" aria-hidden="true"></i></span>
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
              <h5>List Dosen (Rama Rizky Febrian)</h5>
              

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
                      <th class="text-center text-uppercase text-xxs font-weight-bolder ">id dosen</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder ">Nama</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder ">nidn</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder ">nip</th>
                      <td class="text-center text-uppercase text-xxs font-weight-bolder ">jenis kelamin</td>
                      <td class="text-center text-uppercase text-xxs font-weight-bolder ">id agama</td>
                      <td class="text-center text-uppercase text-xxs font-weight-bolder ">agama</td>
                                           
                      <th class="text-center text-uppercase text-xxs font-weight-bolder ">tanggal lahir</th>
                      
                                            
                      <td class="text-center text-uppercase text-xxs font-weight-bolder ">id status</td>
                      <td class="text-center text-uppercase text-xxs font-weight-bolder ">status</td>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $id_dosen=1; foreach($list_dosen as $list_dosen): ?>
                    <tr>
                    
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $list_dosen['id_dosen'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $list_dosen['nama_dosen'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $list_dosen['nidn'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $list_dosen['nip'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $list_dosen['jenis_kelamin'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $list_dosen['id_agama'] ?></p>
                      </td>   
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $list_dosen['nama_agama'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $list_dosen['tanggal_lahir'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $list_dosen['id_status_aktif'] ?></p>
                      </td>
                      <td class="text-center">
                        <p class="mb-0 text-sm"><?= $list_dosen['nama_status_aktif'] ?></p>
                      </td>
                      
                      <td class="text-center">
                      
                      <a href="<?= base_url('table/list_dosen/'.$list_dosen['id_dosen'].'/edit') ?>" class="btn bg-gradient-info btn-block">
                        Edit
                      </a>
                      <a href="#" data-href="<?= base_url('table/list_dosen/'.$list_dosen['id_dosen'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-danger btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirm-dialog">Hapus</a>
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
                          <h3 class="font-weight-bolder text-primary text-gradient">List Dosen</h3>
                            <p class="mb-0">Masukkan data yang anda inginkan</p>
                        </div>
                            <div class="card-body pb-3">
                              <form action="<?= base_url('table/list_dosen/new') ?>"  method="post" role="form text-left">
                              
                                <label>Id Dosen</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="id_dosen" placeholder="Id Dosen" aria-label="id_dosen" aria-describedby="email-addon" required>
                                </div>
                                <label>Nama</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nama_dosen" placeholder="Nama" aria-label="nama_dosen" aria-describedby="email-addon" required>
                                </div>
                                <label>NIDN</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nidn" placeholder="NIDN" aria-label="nidn" aria-describedby="password-addon" required>
                                </div>
                                <div class="text-center">
                                  
                                </div>
                                <label>NIP</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nip" placeholder="NIP" aria-label="nip" aria-describedby="password-addon" required>
                                </div>
                                <div class="text-center">
                                  
                                </div>
                                <label>Jenis Kelamin</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin" aria-label="jenis_kelamin" aria-describedby="password-addon" required>
                                </div>
                                <div class="text-center">
                                </div>
                                <label>Id Agama</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="id_agama" placeholder="Id Agama" aria-label="id_agama" aria-describedby="password-addon" required>
                                </div>
                                <div class="text-center">
                                </div>
                                <label>Agama</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nama_agama" placeholder="Agama" aria-label="nama_agama" aria-describedby="password-addon" required>
                                </div>
                                <div class="text-center">
                                </div>
                                <label>Tanggal Lahir</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="tanggal_lahir" placeholder="yyyy-mm-dd" aria-label="tanggal_lahir" aria-describedby="password-addon" required>
                                </div>
                                <div class="text-center">
                                </div>
                                <label>Id Status</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="id_status_aktif" placeholder="Id Status" aria-label="id_status_aktif" aria-describedby="password-addon" required>
                                </div>
                                <div class="text-center">
                                </div>
                                <label>Status</label>
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="nama_status_aktif" placeholder="Status" aria-label="nama_status_aktif" aria-describedby="password-addon" required>
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
            <div class="card-footer">
            <?= $pager->links('default', 'bootstrap_pagination') ?>
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
          const kategoriText = cells[1].textContent.toLowerCase(); // Ubah sesuai dengan indeks kolom yang berisi kategori

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


