<?php
//create function with an exception
function checkNum($number)
{
    try {
        if ($number > 1) {
            throw new Exception("Value must be 1 or below");
        }
        echo $number;
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    return true;
}

//trigger exception
checkNum(1);
