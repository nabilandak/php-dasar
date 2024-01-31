<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}




function tambah($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $pengembang = htmlspecialchars($data["pengembang"]);
    $genre = htmlspecialchars($data["genre"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $harga = htmlspecialchars($data["harga"]);
    $foto = htmlspecialchars($data["foto"]);


    // query insert data
    $query = "INSERT INTO game VALUES('','$nama', '$pengembang', '$genre', '$tahun', '$harga', '$foto')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $pengembang = htmlspecialchars($data["pengembang"]);
    $genre = htmlspecialchars($data["genre"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $harga = htmlspecialchars($data["harga"]);
    $foto = htmlspecialchars($data["foto"]);


    // query insert data
    $query = "UPDATE game SET 
        nama ='$nama', 
        pengembang ='$pengembang', 
        genre ='$genre', 
        tahun ='$tahun', 
        harga ='$harga', 
        foto ='$foto'
        WHERE id = $id
        ";
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM game WHERE id = $id");
    return mysqli_affected_rows($conn);
}


?>