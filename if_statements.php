<?php
/*
    $age = -1;

    if ($age >=18) {
        echo "You may enter the site";
    }

    else if ($age == 0) {
        echo "You cna't be 0 years old";
    }

    else {
        echo "You must be 18+ to enter";
    }


    $adult = false;

    if ($adult) {
        echo "you may enter the site";
    }

    else {
        echo "you must be an adult to enter the site";
    }
*/
    $hours = 40;
    $rate = 15;
    $weekly_pay = null;

    if ($hours <=0) {
        $weekly_pay =0;
    }
    else if ($hours <= 40) {
        $weekly_pay = $hours * $rate;
    }
    else {
        $weekly_pay = ($rate * 40) + (($hours - 40) * $rate * 1.5);
    }
    echo "You made \${$weekly_pay} this week";



?>