<?php 
require_once 'class_persegiPanjang.php';
echo "Menghitung Luas dan keliling persegi panjang";
$satu = new persegiPanjang(10,4);
$dua = new persegiPanjang(7,5);

echo "<br>Luas persegi panjang 1 = " .$satu->getLuas();
echo "<br>Luas persegi panjang 2 = " .$dua->getLuas();

echo "<br>Keliling persegi panjang 1 = " .$satu->getKeliling();
echo "<br>Keliling persegi panjang 2 = " .$dua->getKeliling();

?>
