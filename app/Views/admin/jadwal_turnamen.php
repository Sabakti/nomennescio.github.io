<?= $this->extend('layout/template3'); ?>

<?= $this->section('content'); ?>

<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Jadwal Turnamen</h1>
            <a href="<?= base_url('jadwal_turnamen/create') ?>" class="btn btn-primary">Tambah Jadwal</a>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Search...">
        </div>


        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Turnamen</th>
                    <th>Lokasi</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Deskripsi</th>
                    <th>Nama Pemain</th> <!-- New Column -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($jadwalTurnamen) && is_array($jadwalTurnamen)) : ?>
                    <?php foreach ($jadwalTurnamen as $index => $jadwal) : ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= esc($jadwal['nama_turnamen']) ?></td>
                            <td><?= esc($jadwal['lokasi']) ?></td>
                            <td><?= esc($jadwal['tanggal']) ?></td>
                            <td><?= esc($jadwal['waktu']) ?></td>
                            <td><?= esc($jadwal['deskripsi']) ?></td>
                            <td><?= esc($jadwal['pemain_names']) ?></td> <!-- Display Player Names -->
                            <td>
                                <a href="<?= base_url('jadwal_turnamen/edit/' . $jadwal['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('jadwal_turnamen/delete/' . $jadwal['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="7" class="text-center">No data available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>

<?= $this->endSection(); ?>