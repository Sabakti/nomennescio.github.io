<?= $this->extend('layout/template3'); ?>

<?= $this->section('content'); ?>

<main class="content px-3 py-4">
    <div class="container">
        <h1>Edit Jadwal Turnamen</h1>
        <form action="<?= base_url('jadwal_turnamen/update/' . $jadwal_turnamen['id']) ?>" method="post">
            <div class="form-group">
                <label for="nama_turnamen">Nama Turnamen</label>
                <input type="text" class="form-control" id="nama_turnamen" name="nama_turnamen" value="<?= esc($jadwal_turnamen['nama_turnamen']) ?>" required>
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= esc($jadwal_turnamen['lokasi']) ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= esc($jadwal_turnamen['tanggal']) ?>" required>
            </div>
            <div class="form-group">
                <label for="waktu">Waktu</label>
                <input type="time" class="form-control" id="waktu" name="waktu" value="<?= esc($jadwal_turnamen['waktu']) ?>" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required><?= esc($jadwal_turnamen['deskripsi']) ?></textarea>
            </div>
            <div class="form-group">
                <label for="pemain_names">Nama Pemain</label>
                <input type="text" class="form-control" id="pemain_names" name="pemain_names" value="<?= esc($jadwal_turnamen['pemain_names']) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</main>

<?= $this->endSection(); ?>