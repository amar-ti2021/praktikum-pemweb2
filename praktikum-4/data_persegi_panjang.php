<?php
require_once "PersegiPanjang.php";
$pp1 = new PersegiPanjang(10, 6);
$pp2 = new PersegiPanjang(12, 7);
echo "uas Persegi Panjang I " . $pp1->getLuas();
echo "<br/>Luas Persegi Panjang II " . $pp2->getLuas();
echo "<br/>Keliling Persegi Panjang I " . $pp1->getKeliling();
echo "<br/>Keliling Persegi Panjang II " . $pp2->getKeliling();
