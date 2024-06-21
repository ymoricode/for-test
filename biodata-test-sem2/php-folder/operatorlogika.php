<?php
$username = "mey";
$pass = "001";

echo "Jika menggunakan operator && maka hasilnya :";

if ($username == "azoel" && $pass == "001") {
    echo "Sukses Login <br>";
} else {
    echo "Gagal Login <br>";
}
echo "Jika menggunakan operator || maka hasilnya :";

if ($username === "azoel" || $pass == "001") {
    echo "Sukses Login <br>";
} else {
    echo "Gagal Login <br>";
}
