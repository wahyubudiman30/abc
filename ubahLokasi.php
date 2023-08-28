<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    //MEndapatkan Nilai Dari Variable 
    $id = $_POST['id'];
    $nama_lokasi = $_POST['nama_lokasi'];
    $alamat = $_POST['alamat'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    
    //import file koneksi database 
    require_once('connection.php');
    
    //Membuat SQL Query
    $sql = "UPDATE posko_pengungsi SET nama_lokasi = '$nama_lokasi', alamat = '$alamat', kelurahan = '$kelurahan', kecamatan = '$kecamatan', latitude = '$latitude', longitude = '$longitude' WHERE id = $id;";
    
    //Meng-update Database 
    if(mysqli_query($con,$sql)){
        echo 'Berhasil Update Data Lokasi';
    }else{
        echo 'Gagal Update Data Lokasi';
    }
    
    mysqli_close($con);
}