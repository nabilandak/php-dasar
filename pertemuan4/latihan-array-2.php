<?php 
$mahasiswa = [
    ["Muhammad Nabil Pasha","0912312312","Rekayasa Perangkat Lunak"],
    ["Nur Jingga","0912232312","Sastra Indonesia"],
    ["Yonglex","0912232312","Sastra Mesin"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li><?php echo $mhs[0]?></li>
        <li><?php echo $mhs[1]?></li>
        <li><?php echo $mhs[2]?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>