<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel game/ query data game
$result = mysqli_query($conn, "SELECT * FROM game");

// ambil data (fetch) game dari object result
// mysqli_fetch_row() //mengembalikan array numerik
// mysqli_fetch_assoc() //mengembalikan array associative
// mysqli_fetch_array() //mengembalikan array numerik dan associative
// mysqli_fetch_object() 

// ambil seluruh data game dari object result 
while ($game = mysqli_fetch_assoc($result)){
    var_dump($game);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

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
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="">Edit</a> | 
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?php echo $row["foto"]; ?>" alt="" width="50px"></td>
            <td><?php echo $row["nama"]?></td>
            <td><?php echo $row["pengembang"]?></td>
            <td><?php echo $row["genre"]?></td>
            <td><?php echo $row["tahun"]?></td>
            <td><?php echo $row["harga"]?></td>
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>
</html>