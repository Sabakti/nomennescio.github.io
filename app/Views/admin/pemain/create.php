<?= $this->extend('layout/template3'); ?>

<?= $this->section('content'); ?>

<main class="content px-3 py-4">
    <div class="container-fluid">
        <h1>Input Data Pemain</h1>
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
        <form action="<?= base_url('pemain/store') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="tmp_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required>
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
            </div>
            <div class="form-group">
                <label for="jenkel">Jenis Kelamin</label>
                <select class="form-control" id="jenkel" name="jenkel">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tinggi">Tinggi</label>
                <input type="number" class="form-control" id="tinggi" name="tinggi" required>
            </div>
            <div class="form-group">
                <label for="berat">Berat</label>
                <input type="number" class="form-control" id="berat" name="berat" required>
            </div>
            <div class="form-group">
                <label for="no_telp">No. Telp</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" required>
            </div>
            <div class="form-group">
                <label for="posisi">Posisi</label>
                <select class="form-control" id="posisi" name="posisi">
                    <option value="Quick">Quick</option>
                    <option value="Open">Open</option>
                    <option value="All-Round">All-Round</option>
                    <option value="Toser">Toser</option>
                    <option value="Libero">Libero</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="Anggota">Anggota</option>
                    <option value="Calon Anggota">Calon Anggota</option>
                    <option value="Pengurus">Pengurus</option>
                </select>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" required>
            </div>
            <div class="form-group">
            <label for="dokumen" class="form-label">Upload Dokumen PDF</label>
        <input type="file" name="dokumen" id="dokumen" class="form-control" accept=".pdf">
    </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</main>

<?= $this->endSection(); ?>