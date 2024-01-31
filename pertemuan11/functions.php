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
    
    // upload foto
    $foto = upload();
        if(!$foto){
            return false;
        }
    

    // query insert data
    $query = "INSERT INTO game VALUES('','$nama', '$pengembang', '$genre', '$tahun', '$harga', '$foto')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFoto = $_FILES['foto']['name'];
    $ukuranFoto = $_FILES['foto']['size'];
    $errorFoto = $_FILES['foto']['error'];
    $tmpFoto = $_FILES['foto']['tmp_name'];

    // cek apakah foto diupload atau tidak
    if($errorFoto===4){
        echo "<script>
            alert('Upload foto terlebih dahulu!');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFoto);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
            alert('File yang anda upload bukan gambar!');
            </script>";
        return false;
    }
    
    // cek jika ukurannya terlalu besar 
    if($ukuranFoto > 1000000){
        echo "<script>
            alert('Ukuran foto terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan
    // generate nama baru
    $namaFotoBaru = uniqid();
    $namaFotoBaru .= '.';
    $namaFotoBaru .= $ekstensiGambar;
    move_uploaded_file($tmpFoto, 'img/' . $namaFotoBaru);
    return $namaFotoBaru;
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $pengembang = htmlspecialchars($data["pengembang"]);
    $genre = htmlspecialchars($data["genre"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $harga = htmlspecialchars($data["harga"]);
    $fotoLama = htmlspecialchars($data["fotoLama"]);

    // cek apakah user memilih foto baru atau tidak
    if($_FILES['foto']['error']===4){
        $foto = $fotoLama;
    } else {
        $foto = upload();
    }


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

function cari($keyword){
    $query = "SELECT * FROM game WHERE nama LIKE '$keyword%' OR pengembang LIKE '$keyword%' or harga LIKE '$keyword%'";
    return query($query);

}
   

?>