<?php 
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
// cek apakah data berhasil ditambahkan atau tidak
 

    if(tambah($_POST) > 0){
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    }else{
        echo "<script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    }
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Game</title>
</head>
<body>
    <h1>Tambah Data Game</h1>
    <a href="index.php">Kembali</a>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="pengembang">pengembang : </label>
                <input type="text" name="pengembang" id="pengembang" required>
            </li>
            <li>
                <label for="genre">genre : </label>
                <input type="text" name="genre" id="genre" required>
            </li>
            <li>
                <label for="tahun">tahun : </label>
                <input type="text" name="tahun" id="tahun" required>
            </li>
            <li>
                <label for="harga">harga : </label>
                <input type="text" name="harga" id="harga" required>
            </li>
            <li>
                <label for="foto">foto : </label>
                <input type="file" name="foto" id="foto" required>
            </li>
            <li><button type="submit" name="submit">Tambah Data</button></li>
        </ul>
    </form>
</body>
</html>