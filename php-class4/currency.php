<?php


$amount = 1;
$currency = "Dollar";

//Rate
$rate = Null;


switch($currency){
     case "Dollar" :
          $rate = 117.6;
          break;

     case "EUR" :
          $rate = 126.3494;
          break;
          
     case "Pound" :
          $rate = 149.1638;
          break;
     case "Rupee" :
          $rate = 1.4080;
          break;
     default:
          $rate = 117.6;

}

$totalAmount = $amount * $rate;

echo "{$amount} {$currency} = {$totalAmount} Bangladeshi taka";


?>