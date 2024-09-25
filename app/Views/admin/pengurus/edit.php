<?= $this->extend('layout/template3'); ?>

<?= $this->section('content'); ?>

<main class="content px-3 py-4">
    <div class="container-fluid">
        <h1>Edit Data Pengurus</h1>
        <form action="<?= base_url('pengurus/update/' . $pengurus['id']) ?>" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= esc($pengurus['nama']) ?>">
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <select class="form-control" id="jabatan" name="jabatan">
                    <option value="Pengurus" <?= $pengurus['jabatan'] == 'Pengurus' ? 'selected' : '' ?>>Pengurus</option>
                    <option value="Pelatih" <?= $pengurus['jabatan'] == 'Pelatih' ? 'selected' : '' ?>>Pelatih</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</main>

<?= $this->endSection(); ?>