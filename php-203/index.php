<?php

// 1st
$words = explode(" ", "The quick brown fox");
echo $words[0]. "<BR>";

// 2nd
$words = explode(" ", "'The quick brown fox jumps over the lazy dog");
$output = '';
foreach ($words as $index => $word) {
    if ($index > 4) {
        break;
    }
    $output .= $word . " ";
}
echo $output . "<BR>";

// 3rd
echo str_replace(",", "", "2,543.12");