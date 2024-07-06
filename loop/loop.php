


<?php
// 3 types of loops
// 1. for loop,     2. while loop,     3. Do while loop


// for loop
echo "##-For loop";
echo "<br>";
for ($i=0 ; $i<=10 ; $i++){
    echo "{$i} <br>";
 }

 echo "<br>";
 echo "2 No: For loop<br>";

for ($i=0 ; $i<=10 ; $i++){
    if ($i % 5 ==0){
        echo "{$i} <br>";
    }
    
}

echo "<br>";

// while loop
echo "##-While loop";
echo "<br>";

$i=0;
while($i<=100){
    if ($i%20==0){
        echo "{$i} <br>";
    }  
    $i++;
}

echo "<br>";

// Do while loop
echo "##-Do While loop";
echo "<br>";

$i=0;
do {
    echo "{$i}<br>";
    $i++;
}while ($i<=49);

echo "<br>";

// Foreach loop
echo "##-foreach loop";
echo "<br>";

$name = array('Omar Faruk', 'Alauddin', 'Nuruzzaman');

foreach($name as $value){
    echo $value . ' ' ;
}

echo "<br><br>";

// loop breck & continue
echo "##-loop breck & continue";
echo "<br>";
echo "#-loop breck";
echo "<br>";
for ($i=0; $i<=10; $i++){
    if($i==5){
        break;
    }
    echo $i;
}

echo "<br><br>";

// loop continue
echo "#-loop continue";
echo "<br>";
for ($i=0; $i<=10; $i++){
    if($i==5){
        continue;
    }
    echo $i;
}



?>