<?php

/**
 * Calculate BMI English - Calculate and print your weight status based on your BMI.
 *
 * @param Float $heightInches
 * @param Float $weightPounds
 * @return String - Your BMI result
 */
function calculate_bmi_english($heightInches, $weightPounds)
{
    // variable declaration.
    $index = 0;
    $bmi = "";

    // check if height and weight has values.
    if ($heightInches != 0 && $weightPounds != 0) {
        // calculate the BMI and round it off by 2 decimals.
        $index = round($weightPounds / ($heightInches * $heightInches) * 703, 2);
    }

    // check index values
    if ($index < 18.5) {
        $bmi = "underweight - BMI : " . $index;
    } elseif ($index < 25) {
        $bmi = "normal - BMI : " . $index;
    } elseif ($index < 30) {
        $bmi = "overweight - BMI : " . $index;
    } else {
        $bmi = "obese - BMI : " . $index;
    }

    // print out your weight status
    echo $bmi;
}

calculate_bmi_english(69, 150);
