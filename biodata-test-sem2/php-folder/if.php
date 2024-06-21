<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tNama = htmlspecialchars($_POST['tNama']);
    $tJK = strtoupper(htmlspecialchars($_POST['tJK']));
}
if (strtoupper($tjK) == "L") {
    $tJK = "Laki-Laki";
}
echo "<h1>Nama Anda: " . $tNama . "</h1> <br>";
echo "<h1>Jenis Kelamin: " . $tJK . "</h1> <br>";
echo "<h2>Klik <a href='../php/inputif.php'>disini</a>untuk kembali</h2>";
