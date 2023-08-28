<?php
$id = $_GET['id'];

//Importing database
require_once('connection.php');

//Membuat SQL Query dengan Lokasi yang ditentukan secara spesifik sesuai ID
$sql = "SELECT * FROM posko_pengungsi WHERE id=$id";

//Mendapatkan Hasil 
$r = mysqli_query($con, $sql);

//Memasukkan Hasil Kedalam Array
$result = array();
$row = mysqli_fetch_array($r);
array_push($result, array(
	"id" => $row['id'],
	"nama_lokasi" => $row['nama_lokasi'],
	"alamat" => $row['alamat'],
	"kelurahan" => $row['kelurahan'],
    "kecamatan" => $row['kecamatan'],
	"latitude" => $row['latitude'],
	"longitude" => $row['longitude']
));

//Menampilkan dalam format JSON
echo json_encode(array('result' => $result));

mysqli_close($con);