<?php 
// mengecek apakah tidak ada data di $_GET
// menggunakan or (||) karena jika salah satu tidak diisi, maka code dibawahnya akan dijalankan
// sedangkan jika menggunakan and (&) maka semuanya harus tidak diisi agar kode dibawahnya dapat dijalankan
if(!isset($_GET['foto'])||
    !isset($_GET['nama'])||
    !isset($_GET['pengembang'])||
    !isset($_GET['genre'])||
    !isset($_GET['tahun'])||
    !isset($_GET['harga'])){
    header("Location:latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><img src="<?php echo $_GET["foto"]; ?>" alt="" width="100px"></li>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["pengembang"]; ?></li>
        <li><?php echo $_GET["genre"]; ?></li>
        <li><?php echo $_GET["tahun"]; ?></li>
        <li><?php echo $_GET["harga"]; ?></li>
    </ul>
    <a href="latihan1.php">kembali</a>
</body>
</html>