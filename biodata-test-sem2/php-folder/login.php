<?php
session_start();
$_SESSION['sesLogin'] = $user;
if (isset($_SESSION['sesLogin'])) {
    echo "<h1>Selamat datang " . $_SESSION['sesLogin'] . "</h1>";
    echo "<h2>Halaman ini hanya bisa diakses jika anda sudah logn</h2>";
    echo "<h2>Klik <a href='session03.php'>disini (session03.php)</a>untuk logout</h2>";
}
