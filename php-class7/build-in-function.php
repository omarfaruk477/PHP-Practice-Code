<?php

$love = "i love you so much";
$txt = "Ami valo sele. ami valo valo kaj kori. ami valo valo khai";
$str = "abcdefghijklmnop";
$shuffle = "abcdefgh";

echo ucfirst($love);

echo "<br><br>";

echo ucwords($love);

echo "<br><br>";

echo strlen($love);

echo "<br><br>";

echo str_word_count($love);
echo "<br><br>";

echo "strrev= ";
echo strrev($love);

echo "<br><br>";

echo strpos($love, "love");
echo "<br><br>";

echo str_replace( "valo", "kharap", $txt);
echo "<br><br>";

echo substr($str, 8, 4);
// OR,
// $sub = substr($str, 7, 5); // Extracts "world" starting from position 7
// echo $sub; // Output: "world"
echo "<br><br>";
echo str_shuffle($shuffle);


?>