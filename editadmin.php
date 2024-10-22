<html>
<head>
    <title> Form Tamu </title>
</head>
<body>
    <?php
    include 'db.php';
    $NIM=$_GET['NIM'];
    $query=mysqli_query($konek,"SELECT * from admin where NIM=$NIM");
    $data =mysql_fetch_array($query);
    ?>
    <form method="POST" action="updateadmin.php">
        NIM :<input type="text" name="NIM" placeholder="NIM">
        Nama :<input type="text" name="nama_admin" placeholder="Nama">
        No telp :<input type="text" name="notelp_admin" placeholder="No telp">
        Alamat :<input type="text" name="alamat_admin" placeholder="Alamat">
        <input type="submit" name="submit" value="kirim">
    </form>
</body>
</html>