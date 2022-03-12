<?php
//while
$i = 1;
$faktorial = $i;
$angka = 10;

while($i <= $angka){
$faktorial = $faktorial * $i;
$i++;
}

echo "Angka = ";
echo $angka;
echo "<br> Hasil Faktorial = ";
echo $faktorial;

//for
$a = 1;
$angka = 4;

    for ($i = 1; $i <= $angka; $i++) {
         $a *= $i;
    }
    echo "<br><br>Angka = ".$angka."<br>Hasil Faktorial = ".$a;

?>