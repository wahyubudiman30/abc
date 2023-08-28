<?php 
    require_once('connection.php');

    $id = $_POST["id"];
    $oldpass = $_POST["oldpass"];
    $newpass = $_POST["newpass"];
    $confirmpass = $_POST["confirmpass"];

    $sql = "SELECT * FROM akun WHERE id = '$id' AND password = '$oldpass'";
    $query = mysqli_query($conn, $sql);

    if($newpass == $confirmpass){
        if(!mysqli_num_rows($query) > 0){
            echo "Password Lama Salah";
        } else {
            $update = "UPDATE akun SET password = '$newpass' WHERE id = '$id'";
            $res = mysqli_query($conn,$update);
            if($res){
                echo "Password Berhasil diUbah";
            } else {
                echo "Error:-101";
            }
        }
    } else {
        echo "Password Tidak Sama!";
    }

?>