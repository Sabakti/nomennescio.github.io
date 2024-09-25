<?= $this->extend('layout/template2'); ?>

<?= $this->section('content'); ?>

<div class="welcome-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <img src="/image/logo.png" alt="Logo Left" class="welcome-logo" data-aos="zoom-in">
    <div class="welcome-text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="welcome-line">Selamat Datang Di Club</div>
        <div class="welcome-line welcome-title">Nomen Nescio</div>
    </div>
    <!-- Logo PBVSI with Clickable Modal Trigger -->
    <img src="/image/pbvsi-logo.png" alt="Logo Right" class="welcome-logo" data-bs-toggle="modal" data-bs-target="#pbvsiModal" style="cursor:pointer;" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
</div>

<!-- Modal for PBVSI Information -->
<div class="modal fade" id="pbvsiModal" tabindex="-1" aria-labelledby="pbvsiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pbvsiModalLabel">Tentang PBVSI</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>PBVSI (Persatuan Bola Voli Seluruh Indonesia)</h6>
                <p>PBVSI adalah induk organisasi olahraga bola voli di Indonesia yang bertujuan untuk mengembangkan dan memajukan olahraga bola voli di tingkat nasional dan internasional.</p>
                <p>PBVSI menyelenggarakan berbagai turnamen dan kompetisi, mulai dari tingkat nasional hingga internasional, dengan tujuan mencari bakat-bakat muda dan meningkatkan prestasi bola voli di Indonesia.</p>
                <h6>Visi dan Misi PBVSI</h6>
                <ul>
                    <li><strong>Visi:</strong> Menjadi organisasi yang menghasilkan atlet voli berprestasi dunia.</li>
                    <li><strong>Misi:</strong> Mendorong pembinaan, pengembangan, dan pelatihan olahraga bola voli di Indonesia.</li>
                </ul>
                <a href="https://pbvsi.or.id" target="_blank" class="btn btn-primary">Kunjungi Website PBVSI</a>
                <img src="/image/pbvsi-logo.png" class="img-fluid rounded" alt="PBVSI Info Image">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<div id="photos" class="photos-container mt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <h3 class="photos-title text-center mb-4">Foto-Foto Klub</h3>
    <div id="clubPhotosCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('image/tm.png') ?>" class="d-block w-100" alt="Photo 1">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('image/nn1.jpeg') ?>" class="d-block w-100" alt="Photo 2">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('image/nn2.jpeg') ?>" class="d-block w-100" alt="Photo 3">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('image/c1.png') ?>" class="d-block w-100" alt="Photo 4">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('image/c2.png') ?>" class="d-block w-100" alt="Photo 5">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('image/c3.png') ?>" class="d-block w-100" alt="Photo 6">
            </div>
            <!-- Add more photos as needed -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#clubPhotosCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#clubPhotosCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div id="videos" class="videos-container mt-5 p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <h3 class="videos-title text-center mb-4">Video-Video Kami</h3>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/fdGo4EeKehw" title="Video 1" allowfullscreen></iframe>
                <div class="video-overlay">
                    <h4>Video 1</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/dHqwkxTWz6g" title="Video 2" allowfullscreen></iframe>
                <div class="video-overlay">
                    <h4>Video 2</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/Pjh7Cr9rlIA" title="Video 3" allowfullscreen></iframe>
                <div class="video-overlay">
                    <h4>Video 3</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bagian Kontak Klub -->
<!-- Bagian Kontak Klub -->
<div id="contact" class="contact-container mt-5 p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <h3 class="contact-title text-center mb-4">Hubungi Kami</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="contact-info" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                <h4><i class="fas fa-map-marker-alt me-2"></i>Alamat Klub</h4>
                <p>Dinas Perindustrian & Perdagangan Provinsi Kalimantan Barat, Jl. Sutan Syahrir No.2, Sungai Bangkong, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78116</p>
                <h4><i class="fas fa-phone me-2"></i>Kontak Klub</h4>
                <p>+62 813-4593-2904</p>
                <h4><i class="fas fa-envelope me-2"></i>Email</h4>
                <p>sabaktiganteng@gmail.com</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="map-container" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1577.7318663913081!2d109.32300172344911!3d-0.04286399464739264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d590f0b2379a7%3A0xf744babea8872b5a!2sDinas%20Perindustrian%20%26%20Perdagangan%20Provinsi%20Kalimantan%20Barat!5e0!3m2!1sen!2sid!4v1724139684351!5m2!1sen!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

<style>
    .contact-info h4 {
        font-size: 18px;
        font-weight: bold;
        margin-top: 15px;
        color: #333;
    }
    .contact-info p {
        font-size: 14px;
        color: #555;
    }
    .contact-info i {
        color: #007bff;
    }
    .contact-info h4:hover, .contact-info p:hover {
        color: #007bff;
    }
    .map-container iframe {
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .welcome-logo {
        cursor: pointer;
    }

    /* Custom Modal Styles */
    .modal-header {
        background-color: #007bff;
        color: white;
    }

    .modal-body h6 {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .modal-body p {
        margin-bottom: 15px;
        font-size: 14px;
        line-height: 1.5;
    }

    .modal-body ul {
        list-style: disc;
        padding-left: 20px;
    }

    .modal-body ul li {
        margin-bottom: 10px;
        font-size: 14px;
    }

    .modal-body img {
        margin-top: 15px;
    }
</style>
<?= $this->endSection(); ?>