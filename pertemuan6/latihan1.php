<?php

// SUPERGLOBALS
// variable global milik php
// merupakan array associative
$game = [
    [
        "nama"=>"Grand Theft Auto 5",
        "pengembang"=>"Rockstar",
        "genre"=>"Open World Action",
        "tahun"=>"2013",
        "harga"=>"150.000",
        "foto" => "gta5.png"
    ],
    [
        "nama"=>"Genshin Impact",
        "pengembang"=>"miHoyo",
        "genre"=>"Open World RPG",
        "tahun"=>"2020",
        "harga"=>"0",
        "foto" => "genshin.png"
    ]

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    <ul>
    <?php foreach($game as $g): ?>
        <li><a href="latihan2.php?nama=<?php echo $g["nama"]; ?>&pengembang=<?php echo $g["pengembang"]; ?>&genre=<?php echo $g["genre"];?>&tahun=<?php echo $g["tahun"]; ?>&harga=<?php echo $g["harga"]; ?>&foto=<?php echo $g['foto']; ?>"><?php echo $g["nama"]; ?></a></li>
    <?php endforeach; ?>  
    </ul>
    
</body>
</html>