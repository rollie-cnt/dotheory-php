<?php

if (file_exists(('read.txt'))) {
    echo "file exist<BR>";

    $contents = file_get_contents('read.txt');
    $contents .= "<BR>Prepare for the new King.";
    echo $contents;
} else {
    echo "file doesn't exist";
}

