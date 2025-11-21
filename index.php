<?php
$angka = 15;
if ($angka % 2 == 0) {
    echo "$angka adalah bilangan genap";
} else {
    echo "$angka adalah bilangan ganjil";
}

?>



<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo "$i adalah Genap<br>";
    } else {
        echo "$i adalah Ganjil<br>";
    }
}
?>