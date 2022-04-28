<?php
require_once('oop.php');
require_once('ape.php');

$sheep = new Animal("shaun");

echo "Nama Binatang : ". $sheep->name ."<br>" ; // "shaun"
echo "Jumlah Kaki : ". $sheep->legs ."<br>" ;// 4
echo "Berdarah Dingin : ". $sheep->cold_blooded ."<br>" ;// "false"
echo "<br>";

$sungokong = new Ape("kera sakti");

echo "Nama Binatang : ". $sungokong->name ."<br>" ; // "shaun"
echo "Jumlah Kaki : ". $sungokong->legs ."<br>" ;// 4
echo "Berdarah Dingin : ". $sungokong->cold_blooded ."<br>" ;// "false"
echo $sungokong->yell() ."<br>"; // "Auooo"
echo "<br>";

$kodok = new Frog("buduk");

echo "Nama Binatang : ".$kodok->name ."<br>" ; // "shaun"
echo "Jumlah Kaki : ".$kodok->legs ."<br>" ;// 4
echo "Berdarah Dingin : ".$kodok->cold_blooded ."<br>" ;// "false"
echo $kodok->jump() ."<br>"; // "Auooo"
?>