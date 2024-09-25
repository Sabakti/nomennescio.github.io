<?= $this->extend('layout/template2'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="heading-container">
        <h1 class="text-center mb-4 text-light">Struktur Kepengurusan</h1>
    </div>

    <div class="org-chart">
        <!-- Penasehat -->
        <div class="org-level">
            <div class="card">
                <div class="icon-circle">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h5>Penasehat</h5>
                <p>Zakaria Karim</p>
                <p>Nani Saswita, Spd</p>
                <p>Nurfahriah, SE</p>
            </div>
        </div>

        <!-- Pembina -->
        <div class="org-level">
            <div class="line vertical"></div>
            <div class="card">
                <div class="icon-circle">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h5>Pembina</h5>
                <p>Hermanto, SH</p>
            </div>
        </div>

        <!-- Ketua & Wakil Ketua -->
        <div class="org-level">
            <div class="line vertical"></div>
            <div class="horizontal-wrapper">
                <div class="card">
                    <div class="icon-circle">
                        <i class="fas fa-user"></i>
                    </div>
                    <h5>Ketua</h5>
                    <p>Husin</p>
                </div>
                <div class="line horizontal"></div>
                <div class="card">
                    <div class="icon-circle">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h5>Wakil Ketua</h5>
                    <p>Kus Panca Diarto, SH</p>
                </div>
            </div>
        </div>

        <!-- Sekretaris & Bendahara -->
        <div class="org-level">
            <div class="line vertical"></div>
            <div class="horizontal-wrapper">
                <div class="card">
                    <div class="icon-circle">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h5>Sekretaris</h5>
                    <p>Reishi Atiqah, S.Tr.Ak.</p>
                </div>
                <div class="line horizontal"></div>
                <div class="card">
                    <div class="icon-circle">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <h5>Bendahara</h5>
                    <p>Reishi Atiqah, S.Tr.Ak.</p>
                </div>
            </div>
        </div>

        <!-- Other Sections -->
        <div class="org-level">
            <div class="line vertical"></div>
            <div class="horizontal-wrapper">
                <div class="card">
                    <div class="icon-circle">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <h5>Seksi Perlengkapan</h5>
                    <p>Afriansyah Akbar, A.md.</p>
                </div>
                <div class="line horizontal"></div>
                <div class="card">
                    <div class="icon-circle">
                        <i class="fas fa-whistle"></i>
                    </div>
                    <h5>Seksi Perwasitan</h5>
                    <p>Hamzah</p>
                </div>
                <div class="line horizontal"></div>
                <div class="card">
                    <div class="icon-circle">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h5>Seksi Pelatihan</h5>
                    <p>Kus Medya Arwanto, ST</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Background */
    body {
        background: linear-gradient(to right, #1f4037, #99f2c8);
        font-family: 'Poppins', sans-serif;
    }

    /* Heading Container */
    .heading-container {
        background: linear-gradient(45deg, #ff8c00, #ff0080);
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        text-align: center;
        margin-bottom: 40px;
        position: relative;
    }

    /* Heading Text */
    .heading-container h1 {
        font-size: 2.5rem;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    }

    /* Adding a subtle border effect */
    .heading-container:before {
        content: "";
        position: absolute;
        top: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        height: 5px;
        background: #ff0080;
        border-radius: 50px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
    }

    .heading-container:after {
        content: "";
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        height: 5px;
        background: #ff8c00;
        border-radius: 50px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
    }

    /* Organizational Chart Container */
    .org-chart {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    /* Organizational Level */
    .org-level {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 20px 0;
    }

    /* Horizontal Cards */
    .horizontal-wrapper {
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 100%;
    }

    /* Card Design */
    .card {
        background-color: #ffffff;
        border: 2px solid #007bff;
        border-radius: 15px;
        padding: 20px;
        text-align: center;
        width: 240px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        margin: 10px;
        position: relative;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
    }

    /* Card Heading */
    h5 {
        font-size: 1.25rem;
        margin-bottom: 1rem;
        color: #007bff;
    }


    /* Icon Circle */
    .icon-circle {
        background-color: #007bff;
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto 1rem auto;
        font-size: 1.5rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Vertical Connecting Line */
    .line.vertical {
        width: 4px;
        height: 40px;
        background-color: black;
        margin: -20px 0;
    }

    /* Horizontal Connecting Line */
    .line.horizontal {
        height: 4px;
        width: 50px;
        background-color: black;
    }

    /* Responsive for smaller screens */
    @media (max-width: 768px) {
        .heading-container h1 {
            font-size: 2rem;
        }

        .card {
            width: 200px;
        }

        .horizontal-wrapper {
            flex-direction: column;
        }
    }

    @media (max-width: 576px) {
        .heading-container h1 {
            font-size: 1.75rem;
        }

        .card {
            width: 180px;
        }
    }
</style>

<?= $this->endSection(); ?>