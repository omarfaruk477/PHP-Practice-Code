<?php

$textCapital = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$textSmall = "abcdefghijklmnopqrstuvwxyz";
$numbers = "0123456789";
$specialCharector = "@#$%^&*?";


$capitalData = substr(str_shuffle($textCapital), 5, 2 );
$smallData = substr(str_shuffle($textSmall), 9, 2 );
$numbersData = substr(str_shuffle($numbers), 5, 1 );
$specialCharectorData = substr(str_shuffle($specialCharector), 5, 1 );

echo str_shuffle($capitalData.$smallData.$numbersData.$specialCharectorData);


?>