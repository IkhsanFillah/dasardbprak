<html>
    <head>
        <title> CRUD </title>
    </head>
    <body>
        <table border=1>
            <tr>
                <td> Nim </td>
                <td> Nama </td>
                <td> No telp </td>
                <td> alamat </td>
            </tr>
            <?php
            include 'db.php';
            $query=mysqli_query($konek,"select * from admin");
            while($data=mysqli_fetch_array($query))
            { ?>
            <tr>
                <td> <?php echo $data['NIM']; ?></td>
                <td> <?php echo $data['nama_admin']; ?> </td>
                <td> <?php echo $data['notelp_admin']; ?></td>
                <td> <?php echo $data['alamat_admin']; ?></td>
            <?php }?>
        </table>
    </body>
</html>