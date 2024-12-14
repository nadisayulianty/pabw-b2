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

                <form action="/biodata-mahasiswa/store" method="post">
                    <?= csrf_field() ?>

                    <div class="mb-3">
                        <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" 
                               value="<?= old('nama_mahasiswa') ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" 
                               value="<?= old('tempat_lahir') ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="kelurahan" class="form-label">Kelurahan</label>
                        <textarea class="form-control" id="kelurahan" name="kelurahan" rows="3"><?= old('description') ?></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="jalan" class="form-label">jalan</label>
                        <input type="text" class="form-control" id="jalan" name="jalan" 
                               value="<?= old('jalan') ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="handphone" class="form-label">Handphone</label>
                        <input type="text" class="form-control" id="handphone" name="handphone" 
                               value="<?= old('handphone') ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" 
                               value="<?= old('email') ?>" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/biodata-mahasiswa" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>


<?= $this->endSection() ?>

