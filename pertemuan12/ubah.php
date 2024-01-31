<?php 
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
// cek apakah data berhasil diubah atau tidak
    if(ubah($_POST) > 0){
        echo "<script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
    }else{
        echo "<script>
                alert('Data gagal diubah!');
                document.location.href = 'index.php';
            </script>";
    }
};

// ambil data dari url
$id = $_GET['id'];
// query data game berdasarkan id
$game = query("SELECT * FROM game WHERE id = $id")[0];



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
        <input type="hidden" name="id" value="<?php echo $game['id'];?>">
        <input type="hidden" name="fotoLama" value="<?php echo $game['foto'];?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?php echo $game["nama"]; ?>">
            </li>
            <li>
                <label for="pengembang">pengembang : </label>
                <input type="text" name="pengembang" id="pengembang" value="<?php echo $game["pengembang"]; ?>">
            </li>
            <li>
                <label for="genre">genre : </label>
                <input type="text" name="genre" id="genre" value="<?php echo $game["genre"]; ?>">
            </li>
            <li>
                <label for="tahun">tahun : </label>
                <input type="text" name="tahun" id="tahun" value="<?php echo $game["tahun"]; ?>">
            </li>
            <li>
                <label for="harga">harga : </label>
                <input type="text" name="harga" id="harga" value="<?php echo $game["harga"]; ?>">
            </li>
            <li>
                <label for="foto">foto : </label><br>
                <img src="img/<?php echo $game['foto']; ?>" alt="" width="50px"><br>
                <input type="file" name="foto" id="foto" >
            </li>
            <li><button type="submit" name="submit">Ubah Data</button></li>
        </ul>
    </form>
</body>
</html>