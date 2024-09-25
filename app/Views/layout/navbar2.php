<nav class="navbar navbar-expand-lg navbar-custom">
    <a class="navbar-brand" href="<?= base_url('/') ?>">
        <img src="<?= base_url('image/logo.png') ?>" alt="Logo" class="logo">
        Nomen Nescio
    </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/public/sejarah') ?>"><i class="fas fa-history"></i> Sejarah</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-users"></i> Club
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?= base_url('/public/pemain') ?>"><i class="fas fa-user"></i> Pemain</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('/public/pengurus') ?>"><i class="fas fa-user-tie"></i> Pengurus</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('/public/struktur') ?>"><i class="fas fa-user-tie"></i> Struktur Club</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('public/prestasi') ?>"><i class="fas fa-trophy"></i> Prestasi</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-calendar-alt"></i> Jadwal
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?= base_url('/public/latihan') ?>"><i class="fas fa-dumbbell"></i> Latihan</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('/public/jadwal_turnamen') ?>"><i class="fas fa-medal"></i> Turnamen</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/public/pendaftaran') ?>"><i class="fas fa-edit"></i> Pendaftaran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('login') ?>"><i class="fas fa-sign-in-alt"></i> Login</a>
            </li>
        </ul>
    </div>
</nav>