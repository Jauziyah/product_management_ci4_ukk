<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjual</title>
    <link rel="stylesheet" href="<?= base_url('bootstrap/bootstrap.min.css');?>">
</head>
<body>

<style>
    body{
        font-family: Manrope, 'sans-serif';
        display: flex;
    }
    nav#sidebar{
        display: flex;
        flex-direction: column;
        background-color: #1f2933;
        width: 17.4vw;
        height: 100vh;
        position: sticky;
    }

    nav#sidebar a{
        text-decoration: none;
        color: white;
        padding: 0.75rem 1rem;
    }

    nav#sidebar h2{
        color: white;
        padding-left: 1rem;
        padding-top: 2rem;
    }

    nav#sidebar a:hover{
        transition: 0.4s;
        background-color: #621762ff;
        font-size: larger;
    }
</style>

<nav id="sidebar">
    <h2>Penjual Panel</h2>
    <a href="/">Dashboard</a>
    <a href="/penjual/product">Product</a>
    <a href="/profile">Profile</a>
</nav>

<div class="container">
    <?= $this->renderSection('content');?>
</div>

<script src="<?= base_url('bootstrap/bootstrap.min.js');?>"></script>
</body>
</html>