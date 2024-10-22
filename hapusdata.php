<?php
    include "db.php";
    $NIM =$_GET['NIM'];
    $query=mysqli_query($konek,"DELETE FROM admin where NIM=$NIM");
    if($query){
        echo "Proses hapus berhasil, ingin lihat hasil <a href='daftarAdmin2025.php'> disini </a>";}
    else{
    echo "Proses Input gagal";}
?>
