<?php


// ১ থেকে ১০ এর নামতা
for($i=1; $i<=10; $i++){
    echo "<h2>{$i} এর নামতা</h2><br> ";
    for($j=1; $j<=10; $j++){
        $namota = $i * $j;
        echo "$i x $j = $namota <br>";
    }
}


?>