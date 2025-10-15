<?php

$tall1 = $_POST["tall1"];
$tall2 = $_POST["tall2"];

$sum = $tall1 + $tall2;
$differanse = abs($tall1 - $tall2);
$produkt = $tall1 * $tall2;
$kvotient = $tall1 / $tall2;

print ("Tall 1 er $tall1<br>");
print ("Tall 2 er $tall2<br><br>");

print ("Summen er $sum<br>");
print ("Differansen er $differanse (absolutt verdi)<br>");
print ("Produktet er $produkt<br>");
print("Kvotienten ($tall1 / $tall2) er $kvotient<br>");

?>