<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP - EDIT DATA MAHASISWA</title>
</head>

<body>
    <h2>CRUD DATA MAHASISWA - EDIT DATA MAHASISWA</h2><br>
    <a href="index.php">KEMBALI</a><br>
    <h3>EDIT DATA MAHASISWA</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>NPM</td>
                    <td><input type="number" name="npm" value="<?php echo $d['npm']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                </tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>