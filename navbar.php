<?php
require_once __DIR__ . "/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    body {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
</style>

<body>
    <nav aria-label="Main navigation " class="navbar navbar-expand-lg bg-body-tertiary">
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link <?php echo ($current_page == 'dashboard') ? 'active' : ''; ?>" aria-current="page" href="/dashboard.php" style="margin-left:30px;">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($current_page == 'buku') ? 'active' : ''; ?>" href="/buku/index.php">Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($current_page == 'genre') ? 'active' : ''; ?>" href="/genre/index.php">Genre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($current_page == 'user') ? 'active' : ''; ?>" href="/user/index.php">User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($current_page == 'peminjaman') ? 'active' : ''; ?>" href="/pinjaman/index.php">Peminjaman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($current_page == 'ulasan') ? 'active' : ''; ?>" href="/ulasan/index.php">Ulasan</a>
            </li>
        </ul>
    </nav>

</body>

</html>