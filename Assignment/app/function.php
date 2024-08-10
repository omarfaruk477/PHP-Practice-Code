<?php

/**
 * Creat OTP
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
 * Elementor_Title
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
 * TimeAgo
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
 $weeks = round($day / 7);
 $month = round($day / 30);
 $year = round($month / 12);

if ($sec < 10){
    echo "Just now";
}elseif($sec >= 10 && $sec <= 30){
    echo "A few second ago";
}elseif($sec > 10 && $sec < 60){
    echo "{$sec} seconds ago";
}elseif($sec >= 60 && $min < 60){
    if($min > 1){
        echo "{$min} minuts ago";
    }else{
        echo "{$min} minut ago";
    }
}elseif($min >= 60 && $hour <= 24){
    if($hour > 1){
        echo "{$hour} hours ago";
    }else{
        echo "{$hour} hour ago";
    }
}elseif($hour >= 24 & $day < 7){
    echo "{$day} days ago";
}elseif($day >= 7 && $weeks <= 4){
    echo "{$weeks} weeks ago";
}elseif($weeks > 4 && $month < 12){
    echo "{$month} month ago";
}elseif($month >= 12){
    echo "{$year} year ago";
}else{
    echo "invalid time";
}

}



?>