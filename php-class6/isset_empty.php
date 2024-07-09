<?php

// Isset & Empty uses

// Isset
$name = NULL;
if (isset($name)){
    echo "Value is OK";
}else{
    echo "Value is not OK";
}

echo "<br>";

// Empty
$name = "Omar";
if (empty($name)){
    echo "Value is empty";
}else{
    echo "Value is not empty";
}

echo "<br><br>";

// Die
echo "This is die test 1 <br>";
echo "This is die test 2 <br>";
echo "This is die test 3 <br>";
echo "This is die test 4 <br>";
echo "This is die test 5 <br>";
echo "This is die test 6 <br>";
die("Here is finish.");
echo "This is die test 7 <br>";
echo "This is die test 8 <br>";
echo "This is die test 9 <br>";



?>