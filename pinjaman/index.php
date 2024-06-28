<?php 
require_once __DIR__ ."/../navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
</head>
<body>
    <div class="container">
        <h3 class="text-center mt-4">Data Pinjaman</h3>
    <table class="table table-hover mt-2">
        <a href="create.php" class="btn btn-primary mt-2">Pinjam Buku</a>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Peminjam</th>
                <th>Buku yang di Pinjam</th>
                <th>Tanggal Meminjam</th>
                <th>Tanggal di Kembalikan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM pinjaman");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d['nama_peminjam']; ?></td>
                <td><?= $d['buku_dipinjam']?></td>
                <td><?= $d['tgl_pinjam'] ?></td>
                <td><?= $d['tgl_kembali'] ?></td>
                <td>
                    <a href="edit.php" class="btn btn-success">Edit</a>
                    <a href="delete.php" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>

    </div>
</body>
</html>