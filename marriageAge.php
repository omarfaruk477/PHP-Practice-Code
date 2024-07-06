<?php


$name = "Asma";
$year = 2015;
$gerder = "Female";


// Get Age
$age = 2024 - $year;

// Get Marriage Age
$marriageAge = Null;
$sombodhon = Null;

switch($gerder){
     case "Male" :
          $marriageAge = 21;
          break;
     case "Female" :
          $marriageAge = 18;
          $sombodhon = "Apuu";
          break;
     default:
          $marriageAge = 21;
}


// Now send msg

if($age >= $marriageAge){
     echo "Hello {$name} {$sombodhon}, You are ready for marriage";
}else{
     $w_bosor = $marriageAge - $age;
     echo "Hello {$name} {$sombodhon}, You are not ready for marriage. You have to wait for {$w_bosor} years";
}



?>