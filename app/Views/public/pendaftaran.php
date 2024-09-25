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

        .container5 {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
            /* Ensure space for footer */
        }

        h2 {
            font-size: 2rem;
            font-weight: bold;
            color: #dc3545;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            text-align: center;
            margin-bottom: 20px;
            background: rgba(0, 0, 0, 0.1);
            padding: 10px;
            border-radius: 10px;
            border: 3px solid #dc3545;
        }

        .form-group {
            position: relative;
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
            color: #343a40;
            padding-left: 30px;
            position: relative;
        }

        .form-group label i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #dc3545;
        }

        .form-control {
            padding-left: 35px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #dc3545;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-primary:hover {
            background-color: #c82333;
        }

        .alert-success {
            background-color: #28a745;
            color: white;
            border-radius: 5px;
        }

        .alert-error {
            background-color: red;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>

<div class="container5 mt-5">
    <h2>Form Pendaftaran Calon Anggota</h2>

    <!-- Alert section -->
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-error" role="alert">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
  <!-- Info Button that triggers modal -->
  <button type="button" class="btn btn-info mb-4" data-bs-toggle="modal" data-bs-target="#infoModal">
        <i class="fas fa-info-circle"></i> Informasi Pendaftaran
    </button>

    <!-- Modal for Info -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel">Informasi Pendaftaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                - Umur maksimal Pendaftar Adalah 25 tahun
                </div>
                <div class="modal-body">
                - Diharapkan memasukkan data yang benar untuk pendaftaran terutama upload kk,akte berupa Pdf.
                </div>
                <div class="modal-body">
                Jika Sudah mendaftar sebagai calon anggota, Anda akan menerima konfirmasi beberapa minggu ke depan melalui nomor telepon yang Anda daftarkan.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <form action="<?= base_url('/public/store') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nik"><i class="fas fa-id-card"></i> Nik</label>
            <input type="text" class="form-control" id="nik" name="nik" value="<?= old('nik'); ?>" required>
        </div>
        <div class="form-group">
            <label for="nama"><i class="fas fa-user"></i> Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>" required>
        </div>
        <div class="form-group">
            <label for="tempatlahir"><i class="fas fa-map-marker-alt"></i> Tempat Lahir</label>
            <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value="<?= old('tempatlahir'); ?>" required>
        </div>
        <div class="form-group">
            <label for="tanggallahir"><i class="fas fa-calendar-alt"></i> Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" value="<?= old('tanggallahir'); ?>" required>
        </div>
        <div class="form-group">
            <label for="jenkel"><i class="fas fa-venus-mars"></i> Jenis Kelamin</label>
            <select class="form-control" id="jenkel" name="jenkel">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tinggi"><i class="fas fa-ruler-vertical"></i> Tinggi</label>
            <input type="number" class="form-control" id="tinggi" name="tinggi" value="<?= old('tinggi'); ?>" required>
        </div>
        <div class="form-group">
            <label for="berat"><i class="fas fa-weight"></i> Berat</label>
            <input type="number" class="form-control" id="berat" name="berat" value="<?= old('berat'); ?>" required>
        </div>
        <div class="form-group">
            <label for="no_telp"><i class="fas fa-phone"></i> No. Telp</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= old('no_telp'); ?>" required>
        </div>
        <div class="form-group">
            <label for="posisi"><i class="fas fa-clipboard-list"></i> Posisi</label>
            <select class="form-control" id="posisi" name="posisi">
                <option value="Open Spike">Open Spike</option>
                <option value="Quicker">Quicker</option>
                <option value="All Round">All Round</option>
                <option value="Libero">Libero</option>
                <option value="Toser">Toser</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status"><i class="fas fa-user-check"></i> Status</label>
            <select class="form-control" id="status" name="status">
                <option value="Calon Anggota">Calon Anggota</option>
            </select>
        </div>
        <div class="form-group">
            <label for="foto"><i class="fas fa-camera"></i> Foto KTP/Kartu Pelajar</label>
            <input type="file" class="form-control" id="foto" name="foto" value="<?= old('foto'); ?>" required>
        </div>
        <div class="form-group">
            <label for="dokumen"><i class="fas fa-camera"></i> Upload Kartu Keluarga, Akte Kelahiran (Pdf)</label>
            <input type="file" class="form-control" id="dokumen" name="dokumen" value="<?= old('dokumen'); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

<?= $this->endSection(); ?>