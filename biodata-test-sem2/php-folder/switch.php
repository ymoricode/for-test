<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tBln = $_POST['tBln'];
}

switch ($tBln) {
    case 1:
        $strBln = "Januari";
        break;
    case 2:
        $strBln = "Februari";
        break;
    case 3:
        $strBln = "Maret";
        break;
    case 4:
        $strBln = "April";
        break;
    case 5:
        $strBln = "Mei";
        break;
    case 6:
        $strBln = "Juni";
        break;
    case 7:
        $strBln = "Juli";
        break;
    case 8:
        $strBln = "Agustus";
        break;
    case 9:
        $strBln = "September";
        break;
    case 10:
        $strBln = "Oktober";
        break;
    case 11:
        $strBln = "November";
        break;
    case 12:
        $strBln = "Desember";
        break;
    default:
        $strBln = "Bukan bulan mas!!....<br>";
        $strBln = $strBln . "Masukkan bulan dari 1 sd 12 mas!!!!";
}
echo "<h1>$tBln adalah $strBln</h1><br>";
echo "<h2>Klik <a href='../php/inputswitch.php'>disini</a>untuk kembali</h2>";
