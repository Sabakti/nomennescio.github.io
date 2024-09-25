<?= $this->extend('layout/template2'); ?>

<?= $this->section('content'); ?>

<head>
    <style>
        body {
            background: url('/image/27230.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .prestasi-container {
            padding: 50px 0;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
            text-align: center;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .row {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
    </style>
</head>

<div class="prestasi-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img src="/image/pres1.png" class="card-img-top" alt="Prestasi 1">
                <div class="card-body">
                    <h5 class="card-title">Juara 1 U-17 Junior Se-Kota Pontianak</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="/image/pres2.png" class="card-img-top" alt="Prestasi 2">
                <div class="card-body">
                    <h5 class="card-title">Juara 1 Open Turnamen Bupati Cup Kubu Raya, Kategori Junior 2004</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="/image/pres3.png" class="card-img-top" alt="Prestasi 3">
                <div class="card-body">
                    <h5 class="card-title">Invitasi Bola Voli U-18 Nasional Piala Gubernur DKI Jakarta 2022</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="/image/pres4.png" class="card-img-top" alt="Prestasi 4">
                <div class="card-body">
                    <h5 class="card-title">Juara 2 U-17 Junior Voli Pasir Se-Kota Pontianak</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="/image/pres5.jpeg" class="card-img-top" alt="Prestasi 5">
                <div class="card-body">
                    <h5 class="card-title">Juara 1 Senior Antar Club Se-Kota Pontianak</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="/image/pres6.jpeg" class="card-img-top" alt="Prestasi 6">
                <div class="card-body">
                    <h5 class="card-title">Juara 1 Belidak Cup Series II</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="/image/pres7.jpeg" class="card-img-top" alt="Prestasi 7">
                <div class="card-body">
                    <h5 class="card-title">Juara 3 PLN Cup</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="/image/pres8.png" class="card-img-top" alt="Prestasi 8">
                <div class="card-body">
                    <h5 class="card-title">Juara 1 Seleksi Kerjurprov Kota Pontianak</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="/image/pres9.png" class="card-img-top" alt="Prestasi 9">
                <div class="card-body">
                    <h5 class="card-title">Juara 1 Turnamen Antar Club</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
