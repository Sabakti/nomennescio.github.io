<?= $this->extend('layout/template3'); ?>

<?= $this->section('content'); ?>

<style>
    @media print {

        /* Hide unnecessary elements */
        .navbar,
        .sidebar,
        .footer,
        .header,
        .d-print-none,
        .btn-primary {
            display: none !important;
        }

        /* Ensure main content is visible */
        .container-fluid,
        .card {
            margin: 0;
            padding: 0;
        }

        /* Optional: Adjust card border or padding for printing */
        .card {
            border: 1px solid #ddd;
            page-break-after: always;
        }

        /* Remove padding from body for printing */
        body {
            margin: 0;
            padding: 0;
        }
    }

    /* Styling for non-print view */
    .card {
        background: #f9f9f9;
        border: 2px solid #009688;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        background: #009688;
        color: #ffffff;
        text-align: center;
        border-bottom: 2px solid #00796b;
    }

    .card-body {
        padding: 20px;
    }

    .card-img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 10px;
        border: 2px solid #009688;
        margin-right: 20px;
    }

    .card-text h5 {
        margin-bottom: 10px;
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    .d-print-none {
        margin-top: 20px;
        text-align: center;
    }

    .btn-primary {
        background-color: #009688;
        border-color: #00796b;
    }
</style>

<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <h3 class="card-title">Kartu Pemain</h3>
            </div>
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-4 d-flex justify-content-center">
                        <img src="<?= base_url('image/' . esc($pemain['foto'])) ?>" alt="Foto Pemain" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <h5>Nama: <?= esc($pemain['nama']) ?></h5>
                        <h5>Tempat Lahir: <?= esc($pemain['tmp_lahir']) ?></h5>
                        <h5>Tanggal Lahir: <?= esc($pemain['tgl_lahir']) ?></h5>
                        <h5>Jenis Kelamin: <?= esc($pemain['jenkel']) ?></h5>
                        <h5>Tinggi: <?= esc($pemain['tinggi']) ?> cm</h5>
                        <h5>No. Telp: <?= esc($pemain['no_telp']) ?></h5>
                        <h5>Posisi: <?= esc($pemain['posisi']) ?></h5>
                        <h5>Status: <?= esc($pemain['status']) ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-print-none">
            <button onclick="window.print()" class="btn btn-primary">Print</button>
        </div>
    </div>
</main>

<?= $this->endSection(); ?>