<?php
session_start();
$_SESSION['sesLogin'] = $user;
if (isset($_SESSION['sesLogin'])) {
    unset($_SESSION);
    session_destroy();
    echo "<h1>Anda sudah berhasil LOGOUT</h1>";
    echo "<h2>Klik <a href='session01.php'>disini</a> untuk LOGIN kembali</h2>";
    echo "<h2>Anda sekarang tidak bisa masuk ke halaman <a href='session02.php'>session02.php</a> Lagi</h2>";
}
