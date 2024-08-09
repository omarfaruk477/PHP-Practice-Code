<?php



/*
// Function 1
/**
 * @param $name
 * @param $age
 * @param $skill
 */
/*
function info( string $name, int $age, string $skill = null){

    if ( $skill ){
        echo "Hello {$name}, You are {$age} years old and you are a {$skill} developer.";
    } else{
        echo "Hello {$name}, You are {$age} years old.";
    }
}
*/

// Function 2
/**
 * @param $elementor header parameters
 * @param $title
 * @param $tag
 * @param $align
 * @param $fontsize
 * @param $background color
 */
function creatTitle(string $title, string $tag = 'h1', string $align = 'center', string $fontSize = '50px', string $bg="red" ){

    echo "<{$tag} style='text-align:{$align}; font-size:{$fontSize}; background-color: {$bg};'>{$title}</{$tag}>";
    
}





?>


