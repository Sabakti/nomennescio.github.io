<?= $this->extend('layout/template2'); ?>

<?= $this->section('content'); ?>

<head>
    <!-- Link to Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            background: url('/image/27230.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
        }

        .title-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .title-container h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #ffffff;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
            background: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
            border-radius: 10px;
            display: inline-block;
            border: 3px solid #dc3545;
        }

        .table {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .table thead th {
            background-color: #dc3545;
            color: white;
            border-bottom: 2px solid #c82333;
        }

        .table tbody td {
            border-bottom: 1px solid #dee2e6;
        }

        .table img {
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .form-select {
            border-radius: 5px;
            border: 1px solid #ced4da;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .title-container h1 {
                font-size: 2rem;
            }

            .table thead th {
                font-size: 0.9rem;
            }

            .table tbody td {
                font-size: 0.9rem;
            }

            .table {
                overflow-x: auto;
            }
        }

        @media (max-width: 576px) {
            .title-container h1 {
                font-size: 1.5rem;
            }

            .table thead th,
            .table tbody td {
                font-size: 0.8rem;
            }

            .table {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<main class="content px-3 py-4">
    <div class="container-fluid" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="title-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <h1>Jadwal Turnamen</h1>
        </div>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th><i class="fas fa-hashtag"></i> No.</th>
                    <th><i class="fas fa-trophy"></i> Nama Turnamen</th>
                    <th><i class="fas fa-map-marker-alt"></i> Lokasi</th>
                    <th><i class="fas fa-calendar-alt"></i> Tanggal</th>
                    <th><i class="fas fa-clock"></i> Waktu</th>
                    <th><i class="fas fa-info-circle"></i> Deskripsi</th>
                    <th><i class="fas fa-users"></i> Nama Pemain</th>
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
                            <td><?= esc($jadwal['pemain_names']) ?></td>
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