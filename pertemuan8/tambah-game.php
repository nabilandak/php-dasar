<?php 
// koneksi
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
//   ambil data dari tiap elemen form
    $nama = $_POST["nama"];
    $pengembang = $_POST["pengembang"];
    $genre = $_POST["genre"];
    $tahun = $_POST["tahun"];
    $harga = $_POST["harga"];
    $foto = $_POST["foto"];

    // query insert data
    $query = "INSERT INTO game VALUES('','$nama', '$pengembang', '$genre', '$tahun', '$harga', '$foto')";
    mysqli_query($conn, $query);

    if(mysqli_affected_rows($conn) > 0){
        echo "Data berhasil ditambahkan!";
    }else{
        echo "Data Gagal ditambahkan!";
        echo "<br>";
        echo mysqli_error($conn);
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
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="pengembang">pengembang : </label>
                <input type="text" name="pengembang" id="pengembang">
            </li>
            <li>
                <label for="genre">genre : </label>
                <input type="text" name="genre" id="genre">
            </li>
            <li>
                <label for="tahun">tahun : </label>
                <input type="text" name="tahun" id="tahun">
            </li>
            <li>
                <label for="harga">harga : </label>
                <input type="text" name="harga" id="harga">
            </li>
            <li>
                <label for="foto">foto : </label>
                <input type="text" name="foto" id="foto">
            </li>
            <li><button type="submit" name="submit">Tambah Data</button></li>
        </ul>
    </form>
</body>
</html>