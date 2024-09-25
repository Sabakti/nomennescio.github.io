<?= $this->extend('layout/template3'); ?>

<?= $this->section('content'); ?>

<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white">Total Pengurus</div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $totalPengurus ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-success">
                        <div class="card-header bg-success text-white">Total Calon Anggota</div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $totalCalonAnggota; ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-warning">
                        <div class="card-header bg-warning text-white">Total Anggota</div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $totalPemain ?></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <h3>Daftar Calon Anggota</h3>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>nik</th>
                                <th>Nama</th>
                                <th>Posisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($calonAnggota) && is_array($calonAnggota)) : ?>
                                <?php foreach ($calonAnggota as $index => $c) : ?>
                                    <tr>
                                        <td><?= $index + 1 ?></td>
                                        <td><?= esc($c['nik']) ?></td>
                                        <td><?= esc($c['nama']) ?></td>
                                        <td><?= esc($c['posisi']) ?></td>


                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="5" class="text-center">No data available</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</main>

<?= $this->endSection(); ?>