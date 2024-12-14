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

                <form action="/data-lengkap/store" method="post">
                    <?= csrf_field() ?>

                    <div class="mb-3">
                        <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" 
                               value="<?= old('nama_mahasiswa') ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="nama_program_studi" class="form-label">Nama Program Studi</label>
                        <input type="text" class="form-control" id="nama_program_studi" name="nama_program_studi" 
                               value="<?= old('nama_program_studi') ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="nama_periode_masuk" class="form-label">Tahun Periode Masuk</label>
                        <input type="text" class="form-control" id="nama_periode_masuk" name="nama_periode_masuk" 
                               value="<?= old('nama_periode_masuk') ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="nama_jalur_masuk" class="form-label">Jalur Masuk</label>
                        <input type="text" class="form-control" id="nama_jalur_masuk" name="nama_jalur_masuk" 
                               value="<?= old('nama_jalur_masuk') ?>" required>
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
                    <a href="/data-lengkap" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>


<?= $this->endSection() ?>

