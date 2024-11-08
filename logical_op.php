<?php 
    /* logical operator = combines conditional statements 
    if (condition1 && condition2)

    && = true if both conditions are true
    || = true if at least one condition is true
    ! = true if false, false if true 

    $temp = 20;
    $cloudy = true;

    /*if($temp >= 0 && $temp <=30) {
        echo "the temparature is good";
    }
    if($temp <= 0 || $temp >= 30) {
        echo "the temparature is not good <br>";
    }
    else {
        echo "the temparature is good <br>";
    }

    if(!$cloudy) {
        echo "it's sunny";
    }
    else {
        echo "it's cloudy";
    }*/

    $age = 22;
    $citizen = false;
    $child = false;
    $senior = false;
    $ticket = null;

    if($age >= 18 && $citizen) { // can use not operator
        echo "You can vote <br>";
    }
    else {
        echo "You cannot vote <br>";
    }

    if($child || $senior) {
        $ticket = 15;
    }
    else {
        $ticket = 15;
    }

    echo "The ticket price is \${$ticket}";
?>
