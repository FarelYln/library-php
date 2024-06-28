<?php 
require_once __DIR__ ."/../navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasnat</title>
</head>
<body>
    <div class="container">
        <h3 class="text-center mt-4">
            Ulasan Dari User
        </h3>
        <table class="table table-hover text-center mt-2">
            <a href="create.php" class="btn btn-primary mt-2">Tambah Ulasan</a>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Rating</th>
                    <th>Pengulas</th>
                    <th>Buku yang di ulas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                
            <?php 
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM ulasan");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d['rating'] ?></td>
                    <td><?= $d['nama_pengulas']?></td>
                    <td><?= $d['buku_diulas'] ?></td>
                    <td>
                        <a href="edit.php" class="btn btn-primary">Edit</a>
                        <a href="delete.php" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>