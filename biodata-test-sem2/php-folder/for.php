<?php
$harga_buku = 2000;
echo "<table border=\"1\" align = \"center\">";
echo "<tr>
    <td>
    <b>Jumlah Buku</b>
    </td>";
echo "<td><b>Harga</b></td></tr>";
for ($jumlah_buku = 10; $jumlah_buku <= 100; $jumlah_buku += 10) {
    echo "<tr><td>";
    echo $jumlah_buku;
    echo "</td><td>";
    echo "Rp. " . $harga_buku * $jumlah_buku;
    echo "</td></tr>";
}
