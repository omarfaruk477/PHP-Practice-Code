<?php

/**
 * @param $password generator
 */
function creatOtp(){

    $textCapital = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $textSmall = "abcdefghijklmnopqrstuvwxyz";
    $numbers = "0123456789";
    $specialCharector = "@#$%^&*?";
    
    $textCapitalShuffle = str_shuffle($textCapital);
    $textSmallShuffle = str_shuffle($textSmall);
    $numbersShuffle = str_shuffle($numbers);
    $specialCharectorShuffle = str_shuffle($specialCharector);

    $textCapitalData = substr($textCapitalShuffle, 4, 2);
    $textSmallData = substr($textSmallShuffle, 8, 2);
    $numbersData = substr($numbersShuffle, 4, 1);
    $specialCharectorData = substr($specialCharectorShuffle, 2, 1);
    
    echo str_shuffle($textCapitalData.$textSmallData.$numbersData.$specialCharectorData);

}



/**
 * @param $elementor_header
 * @param $title
 * @param $tag
 * @param $alignment
 * @param $font_size
 * @param $bg
 */

function creatTitle(string $title, $tag = "h1", string $align = "center", string $fontsize = "100px", string $bg = "tomato"){
    echo "<{$tag} style=\"text-align:{$align}; font-size:{$fontsize}; background-color:{$bg};\">{$title}</{$tag}>";
}


/**
 * @param $timestamp
 */
function timeAgo($timestamp){

 //find timestamp to time
 $timestampNum = strtotime($timestamp);

 // Current time
 $currentTime = time();

 // Time Different
 $timeDiff = $currentTime - $timestampNum;

 // get times unit
 $sec = $timeDiff;
 $min = round($timeDiff / 60);
 $hour = round($timeDiff / (60 * 60));
 $day = round($hour / 24);
 $week = round($day / 7);
 $month = round($day / 30);
 $year = round($month / 12);

if ($sec < 10){
    echo "Just now";
}elseif($sec >= 10 && $sec <= 30){
    echo "A few second ago";
}elseif($sec > 10 && $sec < 60){
    echo "{$sec} second ago";
}elseif($sec >= 60 && $min < 60){
    echo "{$min} minuts ago";
}else{
    echo "{$hour} hours ago";
}


}



?>