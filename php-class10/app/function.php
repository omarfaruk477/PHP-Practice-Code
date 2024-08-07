<?php

function creatTitle(string $title, string $tag = 'h1', string $align = 'center', string $fontSize = '50px', string $bg="red" ){
    echo "<{$tag} style='text-align:{$align}; font-size:{$fontSize}; background-color: {$bg};'>{$title}</{$tag}>";
}

?>


