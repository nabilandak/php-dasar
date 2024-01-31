<?php

require 'functions.php';
$game = query("SELECT * FROM game");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Game</h1>
    <a href="tambah-game.php">Tambah Data Game</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Pengembang</th>
            <th>Genre</th>
            <th>Tahun</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($game as $g): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="ubah.php?id=<?php echo $g["id"];?>">Edit</a> | 
                <a href="hapus.php?id=<?php echo $g["id"];?>" onclick="return confirm('Yakin?')">Hapus</a>
            </td>
            <td><img src="img/<?php echo $g["foto"]; ?>" alt="" width="50px"></td>
            <td><?php echo $g["nama"]?></td>
            <td><?php echo $g["pengembang"]?></td>
            <td><?php echo $g["genre"]?></td>
            <td><?php echo $g["tahun"]?></td>
            <td><?php echo $g["harga"]?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>