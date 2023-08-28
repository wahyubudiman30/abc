<?php 
 $id = $_GET['id'];
 
 //Import File Koneksi Database
 require_once('connection.php');
 
 //Membuat SQL Query
 $sql = "DELETE FROM posko_pengungsi WHERE id=$id;";
 
 
 //Menghapus Nilai pada Database 
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menghapus Lokasi';
 }else{
 echo 'Gagal Menghapus Lokasi';
 }
 
 mysqli_close($con);