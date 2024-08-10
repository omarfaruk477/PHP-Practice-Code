<?php

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



?>