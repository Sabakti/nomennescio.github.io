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
            cursor: pointer; /* Add cursor pointer for clickable images */
        }

        .form-select {
            border-radius: 5px;
            border: 1px solid #ced4da;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

      /* Modal styles */
      .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden; /* Hide overflow to avoid scrollbars */
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            max-width: 90%;
            max-height: 90%;
            border: 2px solid #dc3545; /* Border color */
            border-radius: 10px;
            background-color: #fff; /* Background color for the modal */
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Box shadow for the modal */
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden; /* Hide overflow to keep content within bounds */
        }

        .modal img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain; /* Ensure image scales to fit container while maintaining aspect ratio */
            border-radius: 5px;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 25px;
            color: #ffffff;
            font-size: 35px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #dc3545;
            text-decoration: none;
            cursor: pointer;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .title-container h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<main class="content px-3 py-4">
    <div class="container-fluid" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="title-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <h1>Data Pengurus</h1>
        </div>
        <form class="search-form" method="get" action="">
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control" name="search" value="<?= esc($search) ?>" placeholder="Search by name...">
        </div>
        <div class="col-md-4">
            <select class="form-select" name="jabatan">
                <option value="">Filter by Jabatan</option>
                <option value="Pengurus" <?= ($jabatan == 'Pengurus') ? 'selected' : '' ?>>Pengurus</option>
                <option value="Pelatih" <?= ($jabatan == 'Pelatih') ? 'selected' : '' ?>>Pelatih</option>

                <!-- Add more jabatan options if necessary -->
            </select>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100"><i class="fas fa-search"></i> Search</button>
        </div>
    </div>
</form>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th><i class="fas fa-hashtag"></i> No.</th>
                    <th><i class="fas fa-user"></i> Nama</th>
                    <th><i class="fas fa-briefcase"></i> Jabatan</th>
                    <th><i class="fas fa-image"></i> Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($pengurus) && is_array($pengurus)) : ?>
                    <?php foreach ($pengurus as $index => $p) : ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= esc($p['nama']) ?></td>
                            <td><?= esc($p['jabatan']) ?></td>
                            <td><img src="<?= base_url('image/' . esc($p['foto'])) ?>" alt="Foto Pengurus" width="50" onclick="openModal(this.src)"></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="4" class="text-center">No data available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>

<!-- Modal for image viewing -->
<div id="myModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <div class="modal-content">
        <img id="modal-image" src="" alt="Foto Pengurus">
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to open modal
        window.openModal = function(src) {
            const modal = document.getElementById('myModal');
            const modalImage = document.getElementById('modal-image');
            modal.style.display = "flex";
            modalImage.src = src;
        }

        // Function to close modal
        window.closeModal = function() {
            const modal = document.getElementById('myModal');
            modal.style.display = "none";
        }
    });
</script>

<?= $this->endSection(); ?>
