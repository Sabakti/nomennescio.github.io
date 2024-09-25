<?= $this->extend('layout/template3'); ?>

<?= $this->section('content'); ?>

<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Data Pemain</h1>
            <a href="<?= base_url('pemain/create') ?>" class="btn btn-primary">Input Data</a>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <input type="text" id="name-search" class="form-control" placeholder="Search by name">
        </div>

        <div class="mb-3">
            <label for="position-filter" class="form-label">Filter by Position</label>
            <select id="position-filter" class="form-select">
                <option value="">All Positions</option>
                <option value="Quick">Quick</option>
                <option value="Open">Open</option>
                <option value="All-Round">All-Round</option>
                <option value="Toser">Toser</option>
                <option value="Libero">Libero</option>
            </select>
        </div>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Status</th>
                    <th>Foto</th>
                    <th>Dokumen</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="pemain-table-body">
                <?php if (!empty($pemain) && is_array($pemain)) : ?>
                    <?php foreach ($pemain as $index => $p) : ?>
                        <tr data-posisi="<?= esc($p['posisi']) ?>">
                            <td><?= $index + 1 ?></td>
                            <td><?= esc($p['nama']) ?></td>
                            <td><?= esc($p['posisi']) ?></td>
                            <td><?= esc($p['status']) ?></td>
                            <td><img src="<?= base_url('image/' . esc($p['foto'])) ?>" alt="Foto Pemain" width="50"></td>
                            <td>
                        <?php if ($p['dokumen']) : ?>
                            <a href="<?= base_url('dokumen/' . esc($p['dokumen'])) ?>" class="btn btn-sm btn-info" download>Download</a>
                        <?php else : ?>
                            No Document
                        <?php endif; ?>
                    </td>
                            <td>
                                <a href="<?= base_url('pemain/edit/' . $p['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('pemain/delete/' . $p['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                                <a href="<?= base_url('pemain/print/' . $p['id']) ?>" class="btn btn-info btn-sm">Cetak Kartu</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center">No data available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const positionFilter = document.getElementById('position-filter');
        const nameSearch = document.getElementById('name-search');
        const tableBody = document.getElementById('pemain-table-body');

        positionFilter.addEventListener('change', function() {
            const selectedPosition = positionFilter.value;
            filterTable();
        });

        nameSearch.addEventListener('keyup', function() {
            filterTable();
        });

        function filterTable() {
            const selectedPosition = positionFilter.value.toLowerCase();
            const searchQuery = nameSearch.value.toLowerCase();
            const rows = tableBody.querySelectorAll('tr');

            rows.forEach(row => {
                const posisi = row.getAttribute('data-posisi').toLowerCase();
                const nama = row.querySelector('td:nth-child(2)').textContent.toLowerCase();

                if ((selectedPosition === "" || posisi === selectedPosition) && (searchQuery === "" || nama.includes(searchQuery))) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }
    });
</script>

<?= $this->endSection(); ?>