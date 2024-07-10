<?php

$textChoto = "abcdefghijklmnopqrstuvwxyz";
$textBoro = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$textNumber = "1234567890";

$chotoData = substr(str_shuffle($textChoto), 10, 2);
$boroData = substr(str_shuffle($textBoro), 10, 3);
$numberData = substr(str_shuffle($textNumber), 5, 1);

echo $chotoData.$boroData.$numberData;

echo "<br><br>";

echo str_shuffle($chotoData.$boroData.$numberData);










?>