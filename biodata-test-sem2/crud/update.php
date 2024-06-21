<?php
// koneksi db
include 'koneksi.php';

// menangkap data yg dikirim dari form
$id = $_POST['id'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

//update ke database
mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', npm='$npm', alamat='$alamat' where id='$id'");

//mengalihkan halaman ke index.php
header("location:index.php");
