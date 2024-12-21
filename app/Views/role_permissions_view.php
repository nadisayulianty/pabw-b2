<?= $this->extend('layout/admin/layout') ?>

<?= $this->section('content') ?>
<main class="main-content position-relative border-radius-lg ">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Role Access</li>
        </ol>
        <h3 class="font-weight-bolder text-white mb-0">Role Permissions</h3>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">

        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success" role="alert">
            <?php echo session()->getFlashdata('success'); ?>
          </div>
        <?php endif; ?>
        <div class="card mb-0">
          <div class="card-body px-0 pt-0 pb-2">
            <form method="post" action="<?= base_url(); ?>save-role-permissions" role="form">
              <?= csrf_field(); ?>
              <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                        <th rowspan="2" width="15" class="text-center">No.</th>
                        <th rowspan="2" class="text-center">Role</th>
                        <th colspan="4" class="text-center">Permissions</th>
                        </tr>
                        <tr>
                        <th class="text-center">Create</th>
                        <th class="text-center">Read</th>
                        <th class="text-center">Update</th>
                        <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($permissions as $key => $permission) { ?>
                            <tr>
                                <td><?= $key+1 ?></td>
                                <td><?= $permission['role_name'] ?></td>
                                <td class="text-center">
                                    <label class="checkbox">
                                        <input type="checkbox" name="role_<?= $permission['role_id'] ?>[]" value="create"
                                            <?= $permission['can_create'] ? 'checked' : '' ?>>
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox">
                                        <input type="checkbox" name="role_<?= $permission['role_id'] ?>[]" value="read"
                                            <?= $permission['can_read'] ? 'checked' : '' ?>>
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox">
                                        <input type="checkbox" name="role_<?= $permission['role_id'] ?>[]" value="update"
                                            <?= $permission['can_update'] ? 'checked' : '' ?>>
                                        <span></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox">
                                        <input type="checkbox" name="role_<?= $permission['role_id'] ?>[]" value="delete"
                                            <?= $permission['can_delete'] ? 'checked' : '' ?>>
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
              </div>
              <div class="text-end mt-2 me-4">
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
</main>

<body class="g-sidenav-show bg-primary">



</body>
<?= $this->endSection() ?>