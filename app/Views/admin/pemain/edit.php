<?= $this->extend('layout/template3'); ?>

<?= $this->section('content'); ?>

<main class="content px-3 py-4">
    <div class="container-fluid">
        <h1>Edit Data Pemain</h1>
        <form action="<?= base_url('pemain/update/' . $pemain['id']) ?>" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= esc($pemain['nama']) ?>">
            </div>
            <div class="mb-3">
                <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="<?= esc($pemain['tmp_lahir']) ?>">
            </div>
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= esc($pemain['tgl_lahir']) ?>">
            </div>
            <div class="mb-3">
                <label for="jenkel" class="form-label">Jenis Kelamin</label>
                <select class="form-control" id="jenkel" name="jenkel">
                    <option value="Laki-Laki" <?= $pemain['jenkel'] == 'Laki-Laki' ? 'selected' : '' ?>>Laki-Laki</option>
                    <option value="Perempuan" <?= $pemain['jenkel'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tinggi" class="form-label">Tinggi</label>
                <input type="number" class="form-control" id="tinggi" name="tinggi" value="<?= esc($pemain['tinggi']) ?>">
            </div>
            <div class="mb-3">
                <label for="berat" class="form-label">Berat</label>
                <input type="number" class="form-control" id="berat" name="berat" value="<?= esc($pemain['berat']) ?>">
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No. Telp</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= esc($pemain['no_telp']) ?>">
            </div>
            <div class="mb-3">
                <label for="posisi" class="form-label">Posisi</label>
                <select class="form-control" id="posisi" name="posisi">
                    <option value="Quick" <?= $pemain['posisi'] == 'Quick' ? 'selected' : '' ?>>Quick</option>
                    <option value="Open" <?= $pemain['posisi'] == 'Open' ? 'selected' : '' ?>>Open</option>
                    <option value="All-Round" <?= $pemain['posisi'] == 'All-Round' ? 'selected' : '' ?>>All-Round</option>
                    <option value="Toser" <?= $pemain['posisi'] == 'Toser' ? 'selected' : '' ?>>Toser</option>
                    <option value="Libero" <?= $pemain['posisi'] == 'Libero' ? 'selected' : '' ?>>Libero</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="Anggota" <?= $pemain['status'] == 'Anggota' ? 'selected' : '' ?>>Anggota</option>
                    <option value="Calon Anggota" <?= $pemain['status'] == 'Calon Anggota' ? 'selected' : '' ?>>Calon Anggota</option>
                    <option value="Pengurus" <?= $pemain['status'] == 'Pengurus' ? 'selected' : '' ?>>Pengurus</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</main>

<?= $this->endSection(); ?>