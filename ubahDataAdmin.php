<?php 
    require_once 'connection.php';

    $username = $_POST["username"];
    $email = $_POST["email"];
    $ttl = $_POST["ttl"];
    $jk = $_POST["jk"];
    $telepon = $_POST["telepon"];
    $jabatan = $_POST["jabatan"];
    $alamat = $_POST["alamat"];
    $id = $_POST["id"];

    $query = "SELECT * FROM akun WHERE id = '$id'";
    $check = mysqli_query($conn, $query);

    if(mysqli_num_rows($check) > 0){
        $result = "UPDATE akun SET username = '$username', email = '$email', ttl = '$ttl', jk = '$jk', telepon = '$telepon', jabatan = '$jabatan', alamat = '$alamat' WHERE id = '$id'";
        if(mysqli_query($conn, $result)){
            echo "Data Berhasi diubah";
        } else {
            echo "Data Gagal diubah";
        }
    } else {
        echo "UnAthorized User";
    }
?>