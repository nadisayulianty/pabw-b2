<?= $this->extend('layout/admin/layout') ?>

<?= $this->section('content') ?>

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <?php if (session()->getFlashdata('notice')): ?>
        <div class="alert alert-warning" role="alert">
          <?php echo session()->getFlashdata('notice'); ?>
        </div>
      <?php endif; ?>
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-12">
          
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <a href="<?= base_url('data-lengkap/create') ?>" class="btn bg-gradient-light">
                    Tambah Data
                </a>
                <table class="table bg-white table-hover align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Nama</th>
                        <th class="text-center text-uppercase text-xxs font-weight-bolder ">Program Studi</th>
                        <th class="text-center text-uppercase text-xxs font-weight-bolder">Tahun Periode Masuk</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Jalur Masuk</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Handphone</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Email</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach ($data_lengkap as $value): ?>
                    <tr>
                        <td class="text-center">
                            <p class="mb-0 text-sm"><?= $value['nama_mahasiswa'] ?></p>
                        </td>

                        <td class="text-center">
                            <p class="mb-0 text-sm"><?= $value['nama_program_studi'] ?></p>
                        </td>
                        <td class="text-center">
                            <p class="mb-0 text-sm"><?= $value['nama_periode_masuk'] ?></p>
                        </td>
                        <td class="text-center">
                            <p class="mb-0 text-sm"><?= $value['nama_jalur_masuk'] ?></p>
                        </td>
                        <td class="text-center">
                            <p class="mb-0 text-sm"><?= $value['email'] ?></p>
                        </td>
                        <td class="text-center">
                            <p class="mb-0 text-sm"><?= $value['handphone'] ?></p>
                        </td>
                        
                        <td class="text-center">
                        <a href="<?= base_url('data-lengkap/'. $value['id_mahasiswa'] . '/edit') ?>" class="btn bg-gradient-info btn-block">
                        Edit
                        </a>
                        <a href="#" data-href="<?= base_url('data-lengkap/' . $value['id_mahasiswa'] . '/delete') ?>" onclick="confirmToDelete(this)" class="btn bg-gradient-danger btn-block" data-bs-toggle="modal" data-bs-target="#confirm-dialog">Hapus</a>
                        </td>
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

        </div>
      </div>
    </div>
  </main>


  <body class="g-sidenav-show bg-primary">
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>


<?= $this->endSection() ?>

