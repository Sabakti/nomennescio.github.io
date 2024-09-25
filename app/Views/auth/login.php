<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Dashboard Club Voli</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome -->
    <style>
        body {
            background: url('/image/login.jpg') no-repeat center center fixed;
            background-size: cover;
            /* Ensure the background image covers the whole viewport */
            color: white;
            height: 100vh;
            /* Full viewport height */
            display: flex;
            align-items: center;
            /* Center vertically */
            justify-content: center;
            /* Center horizontally */
            margin: 0;
            /* Remove default margin */
        }

        .login-container {
            margin-top: 0;
            /* Reset margin-top as centering is done with flexbox */
        }

        .login-form {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            /* More rounded corners for a smoother look */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            /* Adding depth with shadow */
            border: 2px solid transparent;
            /* Initial border to apply gradient */
            background-clip: padding-box;
            /* Ensures border does not overlap with the background */
            position: relative;
            overflow: hidden;
            /* Ensures the border does not extend beyond the form */
        }

        .login-form::before {
            content: "";
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #ff6f61, #d50032);
            /* Gradient border */
            z-index: -1;
            /* Places gradient behind the form content */
            border-radius: 15px;
            /* Match the form's border radius */
        }

        .logo {
            display: inline-block;
            vertical-align: middle;
            width: 100px;
        }

        .logo-text {
            display: inline-block;
            vertical-align: middle;
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            font-size: 24px;
            margin-left: 10px;
            color: black;
        }

        .header-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .form-group label {
            color: #333;
        }

        .input-group-text {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: red;
            border: none;
        }

        .btn-primary:hover {
            background-color: darkred;
        }

        .admin-notice {
            background-color: #ffc107;
            color: #333;
            padding: 10px;
            /* Reduced padding */
            border-radius: 5px;
            text-align: center;
            margin-bottom: 10px;
            border: 1px solid #333;
            font-size: 14px;
            /* Reduced font size */
        }
    </style>
</head>

<body>
    <div class="login-form">
        <div class="header-container">
            <img src="image/logo.png" alt="Logo" class="logo">
            <span class="logo-text">Nomen Nescio</span>
        </div>
        <div class="admin-notice">
            <strong>Hanya untuk Admin</strong> - Halaman ini hanya dapat diakses oleh admin. Silakan masuk dengan kredensial admin Anda.
        </div>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
        <form action="/login/auth" method="post">
            <?= csrf_field() ?>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript for handling the popup -->
    <script>
        <?php if (session()->getFlashdata('error')): ?>
            alert('<?= session()->getFlashdata('error'); ?>');
        <?php endif; ?>
    </script>
</body>

</html>