<?php
//koneksi db
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

//menghapus dari db
mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");

// mengalihkan ke halaman index.php
header("location:index.php");
