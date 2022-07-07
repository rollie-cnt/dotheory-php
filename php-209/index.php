<?php

// preg_match
preg_match('/cake/', 'He was eating cake in the cafe', $res);
echo $res[0] . "<BR>";

// preg_replace
$res = preg_replace('/[\s\-\\\n]+/', '-', 'Earth  revolves around\nthe\tSun');
echo $res;

// preg_split
$res = preg_split('/\s*,\s*/', 'My favourite colors are red, green and blue');
echo "<PRE>";
print_r($res);
echo "</PRE>";
