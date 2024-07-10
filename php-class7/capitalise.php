<?php

$love = "i love you";
$txt = "Ami valo sele. ami valo valo kaj kori. ami valo valo khai";

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

?>