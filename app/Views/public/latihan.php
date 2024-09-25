<?= $this->extend('layout/template2'); ?>

<?= $this->section('content'); ?>

<head>
    <style>
        body {
            background: url('/image/27230.jpg') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<div class="schedule-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <h1 class="schedule-title">Jadwal Latihan</h1>
    <div class="schedule-card men">
        <div class="day">Latihan Putra</div>
        <div class="time">Senin, Rabu, Jumat<br>16:00 - Selesai</div>
    </div>
    <div class="schedule-card women">
        <div class="day">Latihan Putri</div>
        <div class="time">Selasa, Kamis, Sabtu<br>16:00 - Selesai</div>
    </div>
</div>
<?= $this->endSection(); ?>