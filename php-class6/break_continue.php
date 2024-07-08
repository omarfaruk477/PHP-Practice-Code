<?php


// Loop break
for ($i=1; $i<=100; $i = $i + 3){

    echo "$i <br>";
    if ($i%5==0 && $i%10==0){
        break;
    }
 

}
 
echo "<br><br><br>";
// Loop continue
for ($j=5; $j<=100; $j = $j + 5){

    // echo "$j <br>"   == echo condition er upore dile loop contineu kaj kore na
    if ($j%10==0 && $j%20==0){
        continue;
    }
    echo "$j <br>"; // Ekhane echo print korle loop contineu kaj kokre
}
// Ekhane 50 te break howar kotha kintu hosse, kew ki bolte parben eta thik ase naki..

?>