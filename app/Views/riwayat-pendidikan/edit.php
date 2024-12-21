<?= $this->extend('layout/admin/layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php if(session()->has('errors')): ?>
                    <div class="alert alert-danger">
                        <?php foreach(session('errors') as $error): ?>
                            <p><?= $error ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <form action="/riwayat-pendidikan/update/<?= $biodata['id_mahasiswa'] ?>" method="post">
                    <?= csrf_field() ?>

                    <div class="mb-3">
                        <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" 
                               value="<?= old('nama_mahasiswa', $biodata['nama_mahasiswa']) ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="nim" class="form-label">Nim</label>
                        <input type="text" class="form-control" id="nim" name="nim" 
                               value="<?= old('nim', $biodata['nim']) ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="nama_jenis_daftar" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="nama_jenis_daftar" name="nama_jenis_daftar" 
                               value="<?= old('nama_jenis_daftar', $biodata['nama_jenis_daftar']) ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="keterangan_keluar" class="form-label">Keterangan Keluar</label>
                        <input type="text" class="form-control" id="keterangan_keluar" name="keterangan_keluar" 
                               value="<?= old('keterangan_keluar', $biodata['keterangan_keluar']) ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="nama_perguruan_tinggi" class="form-label">Nama Perguruan Tinggi</label>
                        <input type="text" class="form-control" id="nama_perguruan_tinggi" name="nama_perguruan_tinggi" 
                               value="<?= old('nama_perguruan_tinggi', $biodata['nama_perguruan_tinggi']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama_program_studi" class="form-label">Nama Program Studi</label>
                        <input type="text" class="form-control" id="nama_program_studi" name="nama_program_studi" 
                               value="<?= old('nama_program_studi', $biodata['nama_program_studi']) ?>" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Product</button>
                    <a href="/products" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>


<?= $this->endSection() ?>

