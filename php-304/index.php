<?php

// copyright year
$year = date("Y");
echo "© $year PHP Training - C&T<BR><BR>";

// days before my birthday
$now = date("Y-m-d");
$birthday = date("Y-06-14");
if (strtotime(date("Y-06-14")) < strtotime($now)) {
    $birthday = date('Y-06-14', strtotime('+1 year'));
}

$start = strtotime($now);
$end = strtotime($birthday);
$days = round(($end - $start) / (60 * 60 * 24));

echo "Days before my next birthday: " . number_format($days) . " day(s)<BR><BR>";

// difference between two dates
$start = strtotime("1933-09-01");
$end = strtotime("2021-09-01");
$days = round(($end - $start) / (60 * 60 * 24));

echo "Difference between the two dates: " . number_format($days) . " day(s)";
