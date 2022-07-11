<?php

$xml = simplexml_load_file('students.xml');

$list = $xml->student;

$output = '';
for ($i = 0; $i < count($list); $i++) {
    $output .= '<b>ID:</b> ' . $list[$i]->id . '<br>'
        . 'Name: ' . $list[$i]->name . '<br>'
        . 'Gender: ' . $list[$i]->gender . '<br>'
        . 'Section: ' . $list[$i]->section . '<br><br>';
}

echo $output;
