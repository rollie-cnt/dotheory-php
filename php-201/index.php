<?php

$age = 21;
$country_to_live = '';
$country_to_visit = '';

if ($age > 14 && $age < 19) {
    $country_to_live = 'Singapore';
} elseif ($age == 19) {
    $country_to_live = 'United Kingdom';
} elseif ($age > 19 && $age < 24) {
    $country_to_live = 'Canada';
}

switch ($country_to_live) {
    case 'Singapore':
        $country_to_visit = 'France';
        break;
    case 'United Kingdom':
        $country_to_visit = 'USA';
        break;
    case 'Canada':
        $country_to_visit = 'Philippines';
        break;
}

echo "Country: $country_to_live<BR>";
echo "Vacation: $country_to_visit";
