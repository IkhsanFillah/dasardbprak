<html>
<head>
    <title> Daftar admin 2025 </title>
</head>
<body>
    <table border=1>
        <tr>
            <td> NIM </td>
            <td> Nama </td>
            <td> No telp </td>
            <td> Alamat </td>
            <td> Action </td>
        </tr>
        <?php
        include 'db.php';
        $query=mysqli_query($konek,"select * from admin");
        while($data=mysqli_fetch_array($query))
        { ?>
        <tr>
            <td> <?php echo $data['NIM']; ?></td>
            <td> <?php echo $data['nama_admin']; ?></td>
            <td> <?php echo $data['notelp_admin']; ?> </td>
            <td> <?php echo $data['alamat_admin']; ?></td>
            <td> 
                <a href=editadmin.php?NIM=<?php echo $data['NIM'];?>>Edit</a> |
                <a href=hapusadmin.php?NIM=<?php echo $data['NIM'];?>>Hapus</a>
            </td>
        <?php } ?>
        </tr>
    </table>
</body>
