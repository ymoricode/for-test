<?php
// KOneksi ke database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$alamat = $_POST['alamat'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO mahasiswa (nama, npm, alamat) VALUES ('$nama', '$npm', '$alamat')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
