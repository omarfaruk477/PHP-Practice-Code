<?php



// Nasted Loop

for($i=1; $i<=20; $i++){


    if($i%7==0 && $i%14==0){

        //This is nasted loop
        for($j=$i; $j>=0; $j--){
            echo "Omar Faruk $j <br>";
        }


    }


    echo "$i <br>";
}





?>