<?php
require_once('connection.php');

//Membuat SQL Query
$sql = "SELECT * FROM posko_pengungsi";

//Mendapatkan Hasil
$r = mysqli_query($con, $sql);

//Membuat Array Kosong 
$result = array();

while ($row = mysqli_fetch_array($r)) {

    //Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
    array_push($result, array(
        "id" => $row['id'],
        "nama_lokasi" => $row['nama_lokasi'],
        "alamat" => $row['alamat']
    ));
}

//Menampilkan Array dalam Format JSON
echo json_encode(array('result' => $result));

mysqli_close($con);