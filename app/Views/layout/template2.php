<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomen Nescio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="/css/sweetalert2.min.css" />
    <script src="/js/sweetalert2.all.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<style>
    body {
        background: url('image/background.png') no-repeat center center fixed;
        background-size: cover;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
    }
/* Welcome Section */
.welcome-container {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 60px;
    border-radius: 15px;
    margin: 20px auto;
    width: 100%; /* Make it full width */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Enhanced shadow */
    text-align: center;
    background: rgba(0, 0, 0, 0.3); /* Optional: Add a subtle background for better contrast */
}

.welcome-logo {
    width: 130px; /* Increased logo size */
    height: auto;
    margin: 0 25px; /* Adjusted spacing between logos and text */
}

.welcome-text {
padding-top: 100px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.welcome-line {
    font-size: 6rem; /* Increased size for the first line */
    color: #ffffff; /* White text color */
    margin: 0;
    text-shadow: 0 0 12px rgba(255, 255, 255, 0.7), /* White glow effect */
                 0 0 24px rgba(255, 255, 255, 0.5);
}

.welcome-title {
    font-size: 6rem; /* Increased size for the second line */
    font-weight: bold;
    color: #ffffff; /* White text color */
    margin: 0;
    text-shadow: 0 0 12px rgba(255, 255, 255, 0.7), /* Enhanced white glow effect */
                 0 0 24px rgba(255, 255, 255, 0.5),
                 
}

    

    .biodata-container {
        background: rgba(255, 255, 255, 0.8);
        padding: 30px;
        border-radius: 15px;
        margin: 20px auto;
        max-width: 800px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .biodata-photo {
        max-width: 200px;
        height: auto;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 15px;
    }

    .biodata-title {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 15px;
        color: #333;
    }

    .biodata-text {
        font-size: 1.1rem;
        margin-bottom: 10px;
        color: #555;
    }

    .biodata-text i {
        margin-right: 10px;
        color: #dc3545;
    }

    .photos-container {

        padding: 30px;
        border-radius: 15px;
        margin: 20px auto;
        max-width: 900px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .photos-title {
    padding-top: 150px;
        font-size: 2rem;
        font-weight: bold;
        color: whitesmoke;
    }

    .carousel-inner {
        border: 5px solid #dc3545;
        /* Red border around the carousel */
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        /* Add shadow for depth */
    }

    .carousel-img {
        border: 5px solid #dc3545;
        /* Red border around each image */
        border-radius: 10px;
        /* Rounded corners for the image border */
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        /* Add shadow for image */
    }

    .carousel-control-prev,
    .carousel-control-next {
        filter: invert(1);
        /* Invert color for better visibility on dark images */
    }


    .videos-container {

        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .videos-title {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: whitesmoke;
    }

    .video-wrapper {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        /* Menambahkan cursor pointer */
    }

    .video-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s;
        border-radius: 10px;
        pointer-events: none;
        /* Agar overlay tidak menangkap klik */
    }


    .video-wrapper:hover .video-overlay {
        opacity: 1;
    }

    .video-overlay h4 {
        margin: 0;
        font-size: 1.5rem;
    }
     /* Styling untuk bagian kontak */
     .contact-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            margin: 20px auto;
            max-width: 900px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #dc3545;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
            margin-bottom: 30px;
        }

        .contact-info h4 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }

        .contact-info p {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 15px;
        }

        .contact-info i {
            margin-right: 10px;
            color: #dc3545;
        }

        .map-container {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Responsif */
        @media (max-width: 768px) {
            .contact-title {
                font-size: 2rem;
            }

            .contact-info h4 {
                font-size: 1.2rem;
            }

            .contact-info p {
                font-size: 1rem;
            }
        }
   

    .sejarah-container {
        background: rgba(139, 0, 0, 0.7);
        /* Merah gelap dengan transparansi */
        padding: 20px;
        border-radius: 15px;
        /* Radius bingkai lebih besar */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);
        /* Shadow lebih besar */
        border: 5px solid rgba(255, 255, 255, 0.4);
        /* Bingkai putih dengan transparansi */
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        margin: 0 auto;
        text-align: justify;
    }

    .sejarah-text {
        color: #fff;
        /* Teks putih */
        font-size: 1.2rem;
        /* Ukuran font */
        line-height: 1.6;
        font-family: 'Arial', sans-serif;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        /* Bayangan teks untuk meningkatkan keterbacaan */
        margin: 0;
        /* Menghapus margin default */
        padding: 0;
        /* Menghapus padding default */
    }

    /* Responsif */
    @media (max-width: 768px) {
        .sejarah-text {
            font-size: 1rem;
            /* Ukuran font lebih kecil pada layar kecil */
        }
    }


    /* Table styling */
    .table {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .table th,
    .table td {
        padding: 12px;
        text-align: center;
    }

    .table img {
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    /* Filter dropdown */
    .form-select {
        border-radius: 5px;
        border: 1px solid #ced4da;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .prestasi-container {
        background: rgba(255, 255, 255, 0.8);
        padding: 30px;
        border-radius: 15px;
        margin: 20px auto;
        max-width: 1000px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .card-img-top {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
    }

    .card-text {
        font-size: 1rem;
        color: #555;
    }

    .schedule-container {
        background: rgba(255, 255, 255, 0.9);
        padding: 40px;
        border-radius: 15px;
        margin: 30px auto;
        max-width: 900px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        text-align: center;
    }

    .schedule-title {
        font-size: 3rem;
        font-weight: bold;
        color: #dc3545;
        margin-bottom: 30px;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
    }

    .schedule-card {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 25px;
        margin: 15px 0;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 1.2rem;
    }

    .schedule-card .day {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
    }

    .schedule-card .time {
        font-size: 1.2rem;
        color: #555;
    }

    .schedule-card.men {
        border-left: 6px solid #007bff;
    }

    .schedule-card.women {
        border-left: 6px solid #dc3545;
    }

    @media (max-width: 768px) {
        .schedule-container {
            padding: 30px;
        }

        .schedule-title {
            font-size: 2.5rem;
        }

        .schedule-card {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    .footer {
        background-color: red;
        /* Red background color */
        color: white;
    }

    .footer a {
        color: white;
    }

    .footer a:hover {
        color: #f8f9fa;
        /* Lighter shade on hover */
        text-decoration: none;
    }

    .footer .fab {
        font-size: 1.5rem;
        /* Increase icon size */
    }

    .navbar-custom {
        background-color: red;
        border-bottom: 2px solid #c82333;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        margin-bottom: 20px;
        position: sticky;
        /* Make navbar sticky */
        top: 0;
        /* Stick to the top of the viewport */
        z-index: 1000;
        /* Ensure navbar stays above other content */
    }

    .navbar-brand {
        color: #fff;
        /* Warna teks */
        text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
        /* Efek cahaya pada teks */
        font-size: 2rem;
        /* Ukuran font yang lebih besar */
        margin-right: 20px;
        /* Geser teks ke kanan */
        transition: text-shadow 0.3s;
        /* Transisi efek cahaya */
    }

    .navbar-brand .logo {
        width: 50px;
        /* Adjust logo size */
        height: auto;
        /* Maintain aspect ratio */
        margin-right: 5px;
        /* Space between logo and text */
    }

    .navbar-brand:hover {
        text-shadow: 0 0 10px rgba(255, 255, 255, 1);
        /* Efek cahaya lebih terang saat hover */
    }

    .navbar-brand img {
        display: inline-block;
        width: 50px;
        height: 50px;
        margin-right: 10px;
    }

    .nav-link {
        color: #ffffff;
        /* Warna teks menu */
        text-shadow: 0 0 3px rgba(255, 255, 255, 0.6);
        /* Efek cahaya pada teks menu */
        transition: color 0.3s, text-shadow 0.3s;
        /* Transisi warna dan efek cahaya */
    }

    .nav-link:hover {
        color: #f8f9fa;
        /* Warna teks saat hover */
        text-shadow: 0 0 8px rgba(255, 255, 255, 1);
        /* Efek cahaya lebih terang saat hover */
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .nav-link {
        color: #ffffff;
        /* White color for text */
    }

    .navbar-custom .nav-link:hover {
        color: #f8f9fa;
        /* Slightly lighter color on hover */
        background-color: #c82333;
        /* Darker red background on hover */
    }

    .navbar-custom .navbar-toggler-icon {
        background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"%3E%3Cpath stroke="%23ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h22M4 15h22M4 23h22" /%3E%3C/svg%3E');
    }

    .navbar-custom .navbar-toggler {
        border-color: #ffffff;
        /* White border color for toggler */
    }
</style>

<body>

    <!-- Navbar -->
    <div class="wrapper">



        <?= $this->include('layout/navbar2'); ?>
        <?= $this->renderSection('content'); ?>
        <?= $this->include('layout/footer'); ?>

    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
        function showPBVSIInfo() {
            Swal.fire({
                title: 'Tentang PBVSI',
                text: 'PBVSI adalah singkatan dari Persatuan Bola Voli Seluruh Indonesia, organisasi yang mengurus semua kegiatan terkait bola voli di Indonesia.',
                icon: 'info',
                confirmButtonText: 'OK'
            });
        }
    </script>
</body>

</html>