<?php
// $mahasiswa = [
//     ["Muhammad Nabil Pasha","0912312312","Rekayasa Perangkat Lunak"],
//     ["Nur Jingga","0912232312","Sastra Indonesia"],
//     ["Yonglex","0912232312","Sastra Mesin"]];


// Array Associative
// definisinya sama dengan array, namun key-nya kita buat sendiri menggunakan string
// $mahasiswa = [
//     [
//         "nama" => "Muhammad Nabil",
//         "nrp" => "123456789",
//         "jurusan" => "Rekayasa Perangkat Lunak",
//         "email" => "nabilandak@gmail.com",
//         "foto" => "nabil.jpg"
//     ],
//     [
//         "nama" => "Jingga",
//         "nrp" => "123456289",
//         "jurusan" => "Sastra Indonesia",
//         "email" => "jinggaku@gmail.com",
//         "nilai" => [90, 80, 70],
//         "foto" => "jingga.jpg"
//     ]
// ];

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

]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($game as $g) : ?>
        <ul>
            <li><img src="<?php echo $g["foto"]; ?>" alt="" width="100px"></li>
            <li><?php echo $g["nama"]; ?></li>
            <li><?php echo $g["pengembang"]; ?></li>
            <li><?php echo $g["genre"]; ?></li>
            <li><?php echo $g["tahun"]; ?></li>
            <li><?php echo $g["harga"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>