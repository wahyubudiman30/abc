<?php
$id = $_GET['id'];

//Importing database
require_once('connection.php');

//Membuat SQL Query dengan Lokasi yang ditentukan secara spesifik sesuai ID
$sql = "SELECT * FROM akun WHERE id=$id";

//Mendapatkan Hasil 
$r = mysqli_query($con, $sql);

//Memasukkan Hasil Kedalam Array
$result = array();
$row = mysqli_fetch_array($r);
array_push($result, array(
	"id" => $row['id'],
	"username" => $row['username'],
	"email" => $row['email'],
	"ttl" => $row['ttl'],
	"jk" => $row['jk'],
    "telepon" => $row['telepon'],
	"jabatan" => $row['jabatan'],
	"alamat" => $row['alamat']
));

//Menampilkan dalam format JSON
echo json_encode(array('result' => $result));

mysqli_close($con);