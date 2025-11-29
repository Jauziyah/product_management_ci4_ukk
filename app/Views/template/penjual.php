<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Penjual</title>
    <link rel="stylesheet" href="<?= base_url('bootstrap/bootstrap.min.css'); ?>">
</head>

<body>

    <style>
        body{
            font-family: 'Manrope', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .sidebar {
            display: flex;
            flex-direction: column;
            background: linear-gradient(180deg, #2c3e50 0%, #1a2530 100%);
            width: 260px;
            height: 100vh;
            top: 0;
            box-shadow: 3px 0 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .sidebar a{
            text-decoration: none;
            color: white;
        }

        .main-content{
            margin-left: 2vw;
            margin-top: 10px;
        }
    </style>

    <div class="sidebar">
        <a href="penjual/product">Product</a>
        <a href="#">Profile</a>
    </div>

        <div class="main-content container-xxl">
            <?= $this->renderSection('content') ?>
        </div>

    <script src="<?= base_url('bootstrap/bootstrap.min.js'); ?>"></script>
</body>

</html>