<?php
    if( isset($_POST["submit"])){
        if($_POST["username"]=="admin"&& $_POST["password"]=="123"){
            header("Location:admin.php");
        }else{
            echo "Username atau password anda salah!";
        }
    }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">kirim</button>
            </li>
            
        </form>
    </ul>   
</body>
</html>
