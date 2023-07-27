<?= $this->extend('Layouts/indexView') ?>

<?= $this->section('content') ?>

<div class="container">
    <h2>Edit Prodi</h2>
    <form action="/prodi/editprodi/<?= $prodi['id_prodi'] ?>" method="post">
        <input type="hidden" name="id_prodi" value="<?= $prodi['id_prodi'] ?>">
        <div class="form-group">
            <label for="kd_prodi">Kode prodi</label>
            <input type="text" class="form-control" name="kd_prodi" placeholder="Kode prodi" value="<?= $prodi['kd_prodi'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama_prodi">Nama prodi</label>
            <input type="text" class="form-control" name="nama_prodi" placeholder="Nama prodi" value="<?= $prodi['nama_prodi'] ?>">
        </div>
        <div class="form-group">
            <a href="/prodi" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success">Simpan</button>

        </div>
    </form>
</div>



<?= $this->endSection() ?>