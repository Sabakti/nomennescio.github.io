<?= $this->extend('layout/template2'); ?>

<?= $this->section('content'); ?>

<head>
    <!-- Link to Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: url('/image/27230.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
        }

        .sejarah-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            padding: 50px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: 2px solid #009688;
            margin: 50px auto;
        }

        .sejarah-title {
            font-weight: 600;
            color: black;
            text-align: center;
            margin-bottom: 20px;
        }

        .sejarah-text {
            font-weight: 400;
            color: #333;
            line-height: 1.6;
        }

        .logo-img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            border: 2px solid #009688;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .list-klub {
            padding-left: 20px;
        }

        .list-klub li {
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .sejarah-container {
                flex-direction: column;
                text-align: center;
            }

            .logo-img {
                margin-right: 0;
            }
        }
    </style>
</head>

<div class="container mt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <div class="sejarah-container row">
        <div class="col-md-4 text-center">
            <img src="<?= base_url('image/logo.png') ?>" alt="Logo Klub" class="logo-img" data-bs-toggle="modal" data-bs-target="#logoModal">
        </div>
        <div class="col-md-8 sejarah-text">
            <h2 class="sejarah-title">Sejarah Klub Voli Nomen Nescio</h2>
            <p>Pada tahun 1958 sekelompok pemuda Asal.Pemangkat Kab Sambas terdiri dari M.Zaki Hasif, Labib, Min'am, Syafari, sedang duduk santai di Warung Kopi depan Bioskop Abadi Jl.Tanjung Pura, mereka mendengar info akan ada turnamen bola voli yg diselenggarakan pihak TNI mereka berencana mengikuti pertandingan tersebut diutuslah salah satu dari mereka untuk mendaftar, sampai di tempat pendaftaran ditanya dengan Pihak panitia nama klubnya baru teringat kalau mereka belum memberi nama, mau pulang hari itu merupakan hari terakhir pendaftaran karena sore sudah mau tm, sudahlah diberi nama No Name (tanpa nama) jadilah mereka mengikuti kejuaraan tersebut dengan nama NN, Nama itu rupanya tetap mereka gunakan untuk pertandingan berikutnya bahkan diartikan dalam bahasa latin Nomen Nescio artinya tanpa nama, karena prestasi Klub NN yg cukup disegani waktu itu oleh kalangan masyarakat Sambas diberi nama Nek Nongan (NN) lambang Keperkasaan seorang Ahli sihir yg tak terkalahkan.</p>
            <p>Untuk melengkapi Kepengurusan Organisasi NN mereka memproklamirkan Hari Jadi Klub ini yaitu tanggal 23 Juli 1958, yang diterjemahkan dalam lambang / Bendera NN yang selalu dipakai di dada baju seragam yang biasa dipergunakan untuk bertanding.</p>
            <p>Dalam perjalanannya Klub Bola Voli Dauble N di Ketuai oleh:
            <ul class="list-klub">
                <li>M.Zaki Hasif 1958 - 1978</li>
                <li>Arsyad Djarnie, SH (1978 - 2001)</li>
                <li>Bambang Soponyono (2021 - 2023)</li>
                <li>Zakaria Karim (2003 - 2008)</li>
                <li>Husin (2008 - sekarang)</li>
            </ul>
            </p>
        </div>
    </div>
</div>

<!-- Modal for Logo -->
<div class="modal fade" id="logoModal" tabindex="-1" aria-labelledby="logoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoModalLabel">Logo Klub</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="<?= base_url('image/logo.png') ?>" alt="Logo Klub" class="img-fluid">
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>