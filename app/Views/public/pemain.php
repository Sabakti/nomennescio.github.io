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

        /* Title styling */
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

        /* Table border styling */
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
            cursor: pointer;
        }

        /* Scrollable table container */
        .table-container {
            max-height: 400px;
            overflow-y: auto;
        }

        /* Filter dropdown styling */
        .form-select {
            border-radius: 5px;
            border: 1px solid #ced4da;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Button styling */
        .btn-info {
            background-color: #ffffff;
            /* White background */
            color: #000000;
            /* Black text */
            border: 1px solid #dc3545;
            /* Border color matching the rest of the theme */
            border-radius: 5px;
            /* Rounded corners */
            padding: 8px 12px;
            /* Padding for better appearance */
            font-size: 0.875rem;
            /* Adjust font size if necessary */
            cursor: pointer;
            /* Pointer cursor on hover */
            transition: background-color 0.3s, color 0.3s;
            /* Smooth transition for hover effect */
        }

        .btn-info:hover {
            background-color: #f8f9fa;
            /* Slightly grayish background on hover */
            color: #dc3545;
            /* Change text color to match the theme */
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
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            max-width: 80%;
            max-height: 80%;
            border: 2px solid #dc3545;
            /* Border color */
            border-radius: 10px;
            background-color: #fff;
            /* Background color for the modal */
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Box shadow for the modal */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal img {
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 100%;
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

        .modal-details {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        /* Modal details styling */
        .modal-content-details {
            background-color: #ffffff;
            /* White background */
            padding: 15px;
            border-radius: 10px;
            /* Rounded corners */
            max-width: 300px;
            /* Smaller width */
            width: 90%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Shadow for a floating effect */
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 2px solid #dc3545;
            /* Red border */
            overflow: hidden;
            /* Hide overflow to keep the design neat */
        }

        .modal-details h2 {
            font-size: 1.4rem;
            color: #dc3545;
            /* Red color for the title */
            margin-bottom: 10px;
            text-align: center;
            font-weight: 600;
        }

        .modal-details p {
            font-size: 0.8rem;
            color: #333;
            /* Darker text color for readability */
            margin: 5px 0;
            text-align: center;
        }

        .modal-details img {
            border-radius: 10px;
            /* Rounded corners for images */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Shadow for images */
            margin-bottom: 10px;
            width: 100%;
            max-width: 200px;
            /* Limit the maximum width */
            height: auto;
        }

        .modal-details .btn-close {
            background-color: #dc3545;
            /* Matching the theme */
            color: #ffffff;
            /* White text */
            border: none;
            border-radius: 5px;
            padding: 8px 15px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background-color 0.3s, transform 0.2s;
            align-self: center;
            /* Center the button */
        }

        .modal-details .btn-close:hover {
            background-color: #c82333;
            /* Darker shade on hover */
            transform: scale(1.05);
            /* Slightly enlarge the button on hover */
        }

        .modal-details .btn-close:focus {
            outline: none;
            /* Remove the default focus outline */
        }

        .close-details {
            position: absolute;
            top: 10px;
            right: 15px;
            color: #000;
            font-size: 30px;
            cursor: pointer;
        }

        .close-details:hover,
        .close-details:focus {
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
        <div class="title-container">
            <h1>Data Pemain</h1>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <input type="text" id="name-search" class="form-control" placeholder="Search by name">
        </div>

        <div class="mb-3">
            <select id="position-filter" class="form-select">
                <option value="">All Positions</option>
                <option value="Quick">Quick</option>
                <option value="Open">Open</option>
                <option value="All-Round">All-Round</option>
                <option value="Toser">Toser</option>
                <option value="Libero">Libero</option>
            </select>
        </div>

        <div class="table-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th><i class="fas fa-hashtag"></i> No.</th>
                        <th><i class="fas fa-user"></i> Nama</th>
                        <th><i class="fas fa-volleyball-ball"></i> Posisi</th>
                        <th><i class="fas fa-check"></i> Status</th>
                        <th><i class="fas fa-image"></i> Foto</th>
                    </tr>
                </thead>
                <tbody id="pemain-table-body">
                    <?php if (!empty($pemain) && is_array($pemain)) : ?>
                        <?php foreach ($pemain as $index => $p) : ?>
                            <tr data-posisi="<?= esc($p['posisi']) ?>">
                                <td><?= $index + 1 ?></td>
                                <td><button class="btn btn-info btn-sm" onclick="showDetails(<?= esc($index) ?>)">
                                        <?= esc($p['nama']) ?>
                                    </button></td>
                                <td><?= esc($p['posisi']) ?></td>
                                <td><?= esc($p['status']) ?></td>
                                <td>
                                    <img src="<?= base_url('image/' . esc($p['foto'])) ?>" alt="Foto Pemain" width="50" onclick="openModal(this.src)">
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="5" class="text-center">No data available</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
</main>

<!-- Modal for player details -->
<div id="detailsModal" class="modal-details">
    <div class="modal-content-details">
        <span class="close-details" onclick="closeDetails()">&times;</span>
        <div id="player-details">
            <!-- Player details will be injected here -->
        </div>
    </div>
</div>


<!-- Modal for image viewing -->
<div id="myModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modal-image">
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const positionFilter = document.getElementById('position-filter');
        const nameSearch = document.getElementById('name-search');
        const tableBody = document.getElementById('pemain-table-body');

        positionFilter.addEventListener('change', function() {
            filterTable();
        });

        nameSearch.addEventListener('keyup', function() {
            filterTable();
        });

        function filterTable() {
            const selectedPosition = positionFilter.value.toLowerCase();
            const searchQuery = nameSearch.value.toLowerCase();
            const rows = tableBody.querySelectorAll('tr');

            rows.forEach(row => {
                const posisi = row.getAttribute('data-posisi').toLowerCase();
                const nama = row.querySelector('td:nth-child(2)').textContent.toLowerCase();

                if ((selectedPosition === "" || posisi === selectedPosition) && (searchQuery === "" || nama.includes(searchQuery))) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }

        // Function to open modal for images
        window.openModal = function(src) {
            const modal = document.getElementById('myModal');
            const modalImage = document.getElementById('modal-image');
            modal.style.display = "flex";
            modalImage.src = src;
        }

        // Function to close image modal
        window.closeModal = function() {
            const modal = document.getElementById('myModal');
            modal.style.display = "none";
        }

        // Function to show player details
        window.showDetails = function(index) {
            const detailsModal = document.getElementById('detailsModal');
            const playerDetailsDiv = document.getElementById('player-details');

            // Fetch player details via AJAX or use pre-defined data
            // Assuming `pemain` array is available in JS, this could be directly used
            const pemain = <?= json_encode($pemain) ?>;
            const player = pemain[index];

            // Create HTML content for player details
            playerDetailsDiv.innerHTML = `
            <h3>${player.nama}</h3>
            <p><strong>Posisi:</strong> ${player.posisi}</p>
            <p><strong>Status:</strong> ${player.status}</p>
            <p><strong>Tempat Lahir:</strong> ${player.tmp_lahir}</p>
            <p><strong>Tanggal Lahir:</strong> ${player.tgl_lahir}</p>
            <p><strong>Telepon:</strong> ${player.no_telp}</p>
            <p><strong>Tinggi:</strong> ${player.tinggi} cm</p>
            <p><strong>Berat Badan:</strong> ${player.berat} kg</p>
            <img src="<?= base_url('image/') ?>${player.foto}" alt="Foto Pemain" style="width: 100%; max-width: 300px; border-radius: 5px;">
        `;

            detailsModal.style.display = "flex";
        }

        // Function to close player details modal
        window.closeDetails = function() {
            const detailsModal = document.getElementById('detailsModal');
            detailsModal.style.display = "none";
        }
    });
</script>

<?= $this->endSection(); ?>