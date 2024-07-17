<?php

// Function 1
function name(){
    echo "This is Bangladesh";
}
name();

echo "<br><br>";

// Function 2
function info($country){
    echo "This is {$country}";
}
    info("America");

echo "<br><br>";

// Function 3 Calculate age
function ageCal($name, $year){
    $age = date('Y') - $year;
    echo "My name is {$name}. My date of birth is {$year}. I am {$age} years old.";
}
ageCal("Omar Faruk", 1992);

echo "<br><br>";

// Function 4 with return
function dev(){
    return "Hello Omar Faruk";
}
    echo dev();

echo "<br><br>";

// Function 5 with type hinting
function devsInfo(string $name, int $age, float $number){
    return "Hello, I am {$name}. I am {$age} years old. I am {$number} feet.";
}
    echo devsInfo("Omar Faruk", 32, 5);

?>