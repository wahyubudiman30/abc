<?php 
	//Importing database    
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id = $_POST["id"];
        require 'connection.php';
        
        //Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai id
        $sql = "SELECT * FROM akun WHERE id = '$id'";
        //Mendapatkan Hasil 
        $response = mysqli_query($conn,$sql);
        //Memasukkan Hasil Kedalam Array
        $result = array();
        $result["read"] = array();
        if(mysqli_num_rows($response) == 1){
            while($row = mysqli_fetch_assoc($response)){
                $index['id'] = $row['id'];
                $index['username'] = $row['username'];
                $index['email'] = $row['email'];
                $index['ttl'] = $row['ttl'];
                $index['jk'] = $row['jk'];
                $index['telepon'] = $row['telepon'];
                $index['jabatan'] = $row['jabatan'];
                $index['alamat'] = $row['alamat'];
                $index['photo'] = $row['photo'];
            }
            array_push($result["read"],$index);

            //Menampilkan dalam format JSON
            $result["success"] = "1";
            echo json_encode($result);
        }
    } else {
        $result["success"] = "1";
        $result["message"] = "Error!";
        echo json_encode($result);
        mysqli_close($conn);
    }
?>