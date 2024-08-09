<?php


/**
 * @param $name
 * @param $age
 * @param $skill
 */

function info( string $name, int $age, string $skill ){

    if ( $skill ){
        echo "Hello {$name}, You are {$age} years old and Your are a {$skill} developer.";
    } else{
        echo "Hello {$name}, You are {$age} years old.";
    }

}



/*
function creatTitle(string $title, string $tag = 'h1', string $align = 'center', string $fontSize = '50px', string $bg="red" ){
    echo "<{$tag} style='text-align:{$align}; font-size:{$fontSize}; background-color: {$bg};'>{$title}</{$tag}>";
}
*/




?>


