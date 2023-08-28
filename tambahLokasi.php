<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //Mendapatkan Nilai Variable
    $nama_lokasi = $_POST['nama_lokasi'];
    $alamat = $_POST['alamat'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    //Pembuatan Syntax SQL
    $sql = "INSERT INTO posko_pengungsi (nama_lokasi,alamat,kelurahan,kecamatan,latitude,longitude) VALUES ('$nama_lokasi','$alamat','$kelurahan','$kecamatan','$latitude','$longitude')";

    //Import File Koneksi database
    require_once('connection.php');

    //Eksekusi Query database
    if (mysqli_query($con, $sql)) {
        echo 'Berhasil Menambahkan Lokasi';
    } else {
        echo 'Gagal Menambahkan Lokasi';
    }

    mysqli_close($con);
}