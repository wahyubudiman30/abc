<?php 
    require 'connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM akun WHERE email = '$email' AND password = '$password'";
    $result = array();
    $result['data'] = array();
    $response = mysqli_query($con, $query);

    if(mysqli_num_rows($response) === 1){
        $row = mysqli_fetch_assoc($response);
        $ds['id'] = $row['id'];
        $ds['username'] = $row['username'];
        $ds['email'] = $row['email'];
        $ds['ttl'] = $row['ttl'];
        $ds['jk'] = $row['jk'];
        $ds['telepon'] = $row['telepon'];
        $ds['jabatan'] = $row['jabatan'];
        $ds['alamat'] = $row['alamat'];

        array_push($result['data'], $ds);
        $result['status'] = 'success';
        echo json_encode($result);
    } else {
        $result['status'] = 'error';
        echo json_encode($result);
    }
?>