<?php
require_once 'connection.php';

if($con){
    $username = $_POST['username'];
    $ttl = $_POST['ttl'];
    $jk = $_POST['jk'];
    $telepon = $_POST['telepon'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert = "INSERT INTO akun (username, ttl, jk, telepon, jabatan, alamat, email, password)VALUES('$username', '$ttl', '$jk', '$telepon', '$jabatan', '$alamat', '$email', '$password')";

    if ($username != ""  && $ttl !="" && $jk !="" && $telepon !="" && $jabatan !="" && $alamat !=""&& $email !="" && $password !=""){
        $result = mysqli_query($con, $insert);
        $response = array();

        if ($result){
            array_push($response, array(
                'status' =>'OK'
            ));
        }
        else{
            array_push($response, array(
                'status' => 'FALIED'
            ));
        }
    }else{
        array_push($response, array(
            'status' => 'FALIED'
        ));
    }

}else {
    array_push($response, array(
        'status' => 'FAILED'
    ));
}

echo json_encode(array("server_response" => $response));
mysqli_close($close);

?>