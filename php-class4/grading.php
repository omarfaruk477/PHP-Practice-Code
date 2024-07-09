<?php


$bangla = 100;
$english = 170;
$math = 155;
$g_science = 60;
$s_science = 101;
$islam = 75;

$t_marks = $bangla + $english + $math + $g_science + $s_science + $islam;
$average = $t_marks / 6;

echo "Total marks : {$t_marks} <br>";
echo "Total marks average: {$average}";
echo "<br>";
// 80-100=A+, 71-80=A, 61-70=A-, 51-60=B, 41-50=C, 33-40=D,

if ($average < 33){
    echo "Letter grad : F ";
}elseif ($average > 33 && $average < 40){
    echo "Letter grad : D ";
}elseif ($average >= 40 && $average < 50){
    echo "Letter grad : C ";
}elseif ($average >= 50 && $average < 60){
    echo "Letter grad : B ";
}elseif ($average >= 60 && $average < 70){
    echo "Letter grad : A- ";
}elseif ($average >= 70 && $average < 80){
    echo "Letter grad : A ";
}elseif ($average >= 80 && $average <= 100){
    echo "Letter grad : A+ ";
}else{
    echo "Invalid Number";
}


?>