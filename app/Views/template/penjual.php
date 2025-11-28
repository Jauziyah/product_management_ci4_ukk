<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Penjual</title>
    <link rel="stylesheet" href="<?= base_url('bootstrap/bootstrap.min.css');?>">
</head>
<body>

    <style>
        .sidebar{
            display: flex;
            flex-direction: column;
        }
    </style>

    <div class="sidebar">
        <a href="penjual/product">Product</a>
        <a href="#">Profile</a>
    </div>

    <section>
    <?= $this->renderSection('content')?>
    </section>

    <script src="<?= base_url('bootstrap/bootstrap.min.js');?>"></script>
</body>
</html>