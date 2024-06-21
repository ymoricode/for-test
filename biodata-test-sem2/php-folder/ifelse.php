<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tBln = $_POST['tBln'];
}

if ($tBln == 1) {
    $strBln = "Januari";
} elseif ($tBln == 2) {
    $strBln = "Februari";
} elseif ($tBln == 3) {
    $strBln = "Maret";
} elseif ($tBln == 4) {
    $strBln = "April";
} elseif ($tBln == 5) {
    $strBln = "Mei";
} elseif ($tBln == 6) {
    $strBln = "Juni";
} elseif ($tBln == 7) {
    $strBln = "Juli";
} elseif ($tBln == 8) {
    $strBln = "Agustus";
} elseif ($tBln == 9) {
    $strBln = "September";
} elseif ($tBln == 10) {
    $strBln = "Oktober";
} elseif ($tBln == 11) {
    $strBln = "November";
} elseif ($tBln == 12) {
    $strBln = "Desember";
} else {
    $strBln = "Bukan bulan mas!!...<br>";
    $strBln = $strBln . "Masukkan angka dari 1 sd 12 mas !!!!!";
}
echo "<h1>$tBln adalah $strBln</h1><br>";
echo "<h2>Klik <a href='inputifelse.php'>disini</a> untuk kembali</h2>";
