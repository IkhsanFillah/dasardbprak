<?php
    include "db.php";
    $NIM =$_POST['NIM'];
    $nama_admin =$_POST['nama_admin'];
    $notelp_admin =$_POST['notelp_admin'];
    $alamat_admin =$_POST['alamat_admin'];
    $query=mysqli_query($konek,"INSERT INTO admin VALUES('$NIM','$nama_admin','$notelp_admin','$alamat_admin')") or die(mysqli_error($konek));
    if($query){
        echo "Proses input berhasil, ingin lihat hasil <a href='daftarAdmin2025.php'> disini </a>";
    }
    else {
    echo "Proses Input gagal";
    }
?>
