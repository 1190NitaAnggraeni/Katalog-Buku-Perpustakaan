<?php
require 'functions.php';
$buku = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buku nita</title>
</head>
<body>
    
    <h1>Daftar Buku</h1>

    <a href="tambah.php">Tambah Data Buku</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
        <th>NO</th>
        <th>KODE</th>
        <th>JUDUL</th>
        <th>PENGARANG</th>
        <th>PENERBIT</th>
        <th>AKSI</th>

        </tr>

    <?php $i = 1; ?>
    <?php foreach( $buku as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["kode"]; ?></td>
            <td><?= $row["judul"]; ?></td>
            <td><?= $row["pengarang"]; ?></td>
            <td><?= $row["penerbit"]; ?></td>
            <td><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a></td>
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>

</body>
</html>