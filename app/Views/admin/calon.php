<?= $this->extend('layout/template3'); ?>

<?= $this->section('content'); ?>

<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Data Calon Anggota</h1>
            <a href="<?= base_url('calon/create') ?>" class="btn btn-primary">Input Data</a>
        </div>

        <div class="mb-3">
            <label for="position-filter" class="form-label">Filter by Position</label>
            <select id="position-filter" class="form-select">
                <option value="">All Positions</option>
                <option value="Open Spike">Open Spike</option>
                <option value="Quicker">Quicker</option>
                <option value="All Round">All Round</option>
                <option value="Libero">Libero</option>
                <option value="Toser">Toser</option>
            </select>
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" id="search-input" placeholder="Search...">
        </div>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Foto</th>
                    <th>Dokumen</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="calon-table-body">
                <?php if (!empty($calon) && is_array($calon)) : ?>
                    <?php foreach ($calon as $index => $c) : ?>
                        <tr data-posisi="<?= esc($c['posisi']) ?>">
                            <td><?= $index + 1 ?></td>
                            <td><?= esc($c['nik']) ?></td>
                            <td><?= esc($c['nama']) ?></td>
                            <td><?= esc($c['posisi']) ?></td>
                            <td><img src="<?= base_url('image/' . esc($c['foto'])) ?>" alt="Foto Pemain" width="50"></td>
                            <td>
                        <?php if ($c['dokumen']) : ?>
                            <a href="<?= base_url('dokumen/' . esc($c['dokumen'])) ?>" class="btn btn-sm btn-info" download>Download</a>
                        <?php else : ?>
                            No Document
                        <?php endif; ?>
                    </td>
                            <td>
                                <a href="<?= base_url('calon/edit/' . $c['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('calon/delete/' . $c['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                                <a href="<?= base_url('calon/accept/' . $c['id']) ?>" class="btn btn-success btn-sm">Terima</a>
                    <a href="<?= base_url('calon/reject/' . $c['id']) ?>" class="btn btn-secondary btn-sm">Tolak</a>
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
        const searchInput = document.getElementById('search-input');
        const tableBody = document.getElementById('calon-table-body');

        positionFilter.addEventListener('change', function() {
            const selectedPosition = positionFilter.value;
            filterTable(selectedPosition, searchInput.value);
        });

        searchInput.addEventListener('input', function() {
            const searchValue = searchInput.value.toLowerCase();
            filterTable(positionFilter.value, searchValue);
        });

        function filterTable(selectedPosition, searchValue) {
            const rows = tableBody.querySelectorAll('tr');

            rows.forEach(row => {
                const posisi = row.getAttribute('data-posisi');
                const nama = row.querySelector('td:nth-child(2)').textContent.toLowerCase();

                if ((selectedPosition === "" || posisi === selectedPosition) &&
                    (searchValue === "" || nama.includes(searchValue))) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }
    });
</script>

<?= $this->endSection(); ?>