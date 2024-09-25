<?= $this->extend('layout/template3'); ?>

<?= $this->section('content'); ?>

<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Data Pengurus</h1>
            <a href="<?= base_url('pengurus/create') ?>" class="btn btn-primary">Input Data</a>
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Search...">
        </div>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Foto</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php if (!empty($pengurus) && is_array($pengurus)) : ?>
                    <?php foreach ($pengurus as $index => $p) : ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= esc($p['nama']) ?></td>
                            <td><?= esc($p['jabatan']) ?></td>
                            <td><img src="<?= base_url('image/' . esc($p['foto'])) ?>" alt="Foto Pengurus" width="50"></td>
                            <td>
                                <a href="<?= base_url('pengurus/edit/' . $p['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('pengurus/delete/' . $p['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="4" class="text-center">No data available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>

<?= $this->endSection(); ?>