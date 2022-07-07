<?php

echo "<strong>FOR loop</strong><BR><BR>";

for ($i = 1; $i <= 10; $i++) {
    $output = "$i. The quick brown fox jumps over a lazy dog";
    if ($i == 5) {
        $output .= " but the dog woke up and barked at the fox";
    }

    echo $output . "<BR>";
}

echo "<BR><strong>WHILE loop</strong><BR><BR>";

$i = 1;
while ($i <= 10) {
    $output = "$i. The quick brown fox jumps over a lazy dog";
    if ($i == 5) {
        $output .= " but the dog woke up and barked at the fox";
    }

    echo $output . "<BR>";

    $i++;
}

echo "<BR><strong>DO WHILE loop</strong><BR><BR>";

$i = 1;
do {
    $output = "$i. The quick brown fox jumps over a lazy dog";
    if ($i == 5) {
        $output .= " but the dog woke up and barked at the fox";
    }

    echo $output . "<BR>";

    $i++;
} while ($i <= 10);
