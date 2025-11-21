<?php
// --------------------------------------
// 1. Mengecek satu angka (ganjil/genap)
// --------------------------------------
$angka = 15; // contoh angka

echo "<h3>Pengecekan Satu Angka</h3>";

if ($angka % 2 == 0) {
    echo "$angka adalah bilangan Genap<br><br>";
} else {
    echo "$angka adalah bilangan Ganjil<br><br>";
}


// --------------------------------------
// 2. Menampilkan 100 sampai 0 (ganjil/genap)
// --------------------------------------
echo "<h3>Daftar 100 sampai 0</h3>";

for ($i = 100; $i >= 0; $i--) {
    if ($i % 2 == 0) {
        echo "$i adalah Genap<br>";
    } else {
        echo "$i adalah Ganjil<br>";
    }
}
?>
