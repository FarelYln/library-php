<?php 
require_once __DIR__ ."/../navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>
    <div class="container">
        <h3 class="text-center mt-4">
            Halaman buku
        </h3>

        <table class="table table-hover" class="mt-2">
            <a href="create.php" class="btn btn-primary" class="mt-2">Tambah Buku</a>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Buku</th>
                    <th>Genre</th>
                    <th>Penerbit</th>
                    <th>Tanggal Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            
            $no = 1;
  
            $data = mysqli_query($koneksi, "SELECT * FROM buku");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d['nama_buku'] ?></td>
                    <td><?= $d['genre_buku'] ?></td>
                    <td><?= $d['penerbit'] ?></td>
                    <td><?= $d['tanggal_terbit'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $d['id']; ?>" class="btn btn-success">Edit</a>
                        <a href="delete.php?id=<?= $d['id']; ?>" onclick="return confirm('apakah anda yakin?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>