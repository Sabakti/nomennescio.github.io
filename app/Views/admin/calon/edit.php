<?= $this->extend('layout/template3'); ?>

<?= $this->section('content'); ?>

<main class="content px-3 py-4">
    <div class="container-fluid">
        <h1>Edit Data Calon Anggota</h1>
        <form action="<?= base_url('calon/update/' . $calon['id']) ?>" method="post">
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" value="<?= esc($calon['nik']) ?>" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= esc($calon['nama']) ?>" required>
            </div>
            <div class="form-group">
                <label for="tempatlahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value="<?= esc($calon['tempatlahir']) ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggallahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" value="<?= esc($calon['tanggallahir']) ?>" required>
            </div>
            <div class="form-group">
                <label for="jenkel">Jenis Kelamin</label>
                <select class="form-control" id="jenkel" name="jenkel">
                    <option value="Laki-Laki" <?= $calon['jenkel'] == 'Laki-Laki' ? 'selected' : '' ?>>Laki-Laki</option>
                    <option value="Perempuan" <?= $calon['jenkel'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tinggi">Tinggi</label>
                <input type="number" class="form-control" id="tinggi" name="tinggi" value="<?= esc($calon['tinggi']) ?>" required>
            </div>
            <div class="form-group">
                <label for="berat">Berat</label>
                <input type="number" class="form-control" id="berat" name="berat" value="<?= esc($calon['berat']) ?>" required>
            </div>
            <div class="form-group">
                <label for="no_telp">No. Telp</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= esc($calon['no_telp']) ?>" required>
            </div>
            <div class="form-group">
                <label for="posisi">Posisi</label>
                <select class="form-control" id="posisi" name="posisi">
                    <option value="Open Spike" <?= $calon['posisi'] == 'Open Spike' ? 'selected' : '' ?>>Open Spike</option>
                    <option value="Quicker" <?= $calon['posisi'] == 'Quicker' ? 'selected' : '' ?>>Quicker</option>
                    <option value="All Round" <?= $calon['posisi'] == 'All Round' ? 'selected' : '' ?>>All Round</option>
                    <option value="Libero" <?= $calon['posisi'] == 'Libero' ? 'selected' : '' ?>>Libero</option>
                    <option value="Toser" <?= $calon['posisi'] == 'Toser' ? 'selected' : '' ?>>Toser</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="Anggota" <?= $calon['status'] == 'Anggota' ? 'selected' : '' ?>>Anggota</option>
                    <option value="Calon Anggota" <?= $calon['status'] == 'Calon Anggota' ? 'selected' : '' ?>>Calon Anggota</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
</main>

<?= $this->endSection(); ?>