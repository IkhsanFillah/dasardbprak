<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "adminbasdat";
    
    $konek = new mysqli($hostname, $username, $password, $database);
    if ($konek->connect_error) 
        die("maaf koneksi gagal". $konek->connect_error);
    else 
        echo "database kebaca";
 ?>