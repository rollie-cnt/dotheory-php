<?php

function checkPalindrome($string) {
    $string = strtolower($string);

    $reversed_string = '';
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversed_string .= $string[$i];
    }

    return $string == $reversed_string;
}

echo checkPalindrome('maDam');
