<?php

// numeric array
$shoes = ['Nike', 'Addidas', 'Puma', 'Converse'];

echo $shoes[2];

echo "<pre>";
print_r($shoes);
echo "</pre>";

// associative array
$players = [
    'lebron_james' => 'Lakers',
    'derrick_rose' => 'Knicks',
    'stephen_curry' => 'Warriors',
];

echo $players['stephen_curry'];
echo "<BR>";

// multidimensional array
$restos = [
    'jollibee' => [
        'branches' => 12,
        'managers' => 15,
        'employees' => 80,
    ],
    'mcdonalds' => [
        'branches' => 18,
        'managers' => 10,
        'employees' => 70,
    ],
    'kfc' => [
        'branches' => 8,
        'managers' => 9,
        'employees' => 40,
    ],
];

$max_employee_name = '';
$min_manager_name = '';
$min_max_name = 'N/A';

$max_employee = 0;
$min_manager = max(array_column($restos, 'managers')); // get the max value of manager.

// loop through the each resto (jollibee, mcdo and kfc).
foreach ($restos as $name => $resto) {

    // get the lenght of the resto, so that we can use it to break through the while loop later.
    $checker = count($resto) - 1;

    // we will go through each of the resto's data
    while (true) {
        // get the next array
        $temp = next($restos);

        // if we reach the end of the array go back to the start
        $temp = (!isset($temp['employees'])) ? reset($restos) : $temp;

        // compare the current and the next value of employees and get it's max value
        if ($resto['employees'] > $temp['employees'] && $resto['employees'] > $max_employee) {
            $max_employee = $resto['employees'];
            $max_employee_name = $name;
        }
        // compare the current and the next value of manager and get it's min value
        if ($resto['managers'] < $temp['managers'] && $resto['managers'] < $min_manager) {
            $min_manager = $resto['managers'];
            $min_manager_name = $name;
        }

        // get the least manager and most employee
        if ($resto['employees'] > $temp['employees'] && $resto['managers'] < $temp['managers']) {
            $min_max_name = $name;
        }

        $checker--;
        if ($checker < 0) {
            break;
        }
    }
}

echo "the resto with the least manager is <strong>" . $min_manager_name . "</strong>. <BR>";
echo "the resto with the most employee is <strong>" . $max_employee_name . "</strong>. <BR><BR>";

echo "the resto with the most employee and least manager <strong>" . $min_max_name . "</strong>. <BR>";
