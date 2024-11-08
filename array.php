<?php 

   // array = "variable which can hold more than one value at a time

    $foods = array("apple", "orange", "banana", "coconut");

    // to change a value in array
    //$foods[0] = "pineapple";

    // to add one or more elemennt at the end of the array
    array_push($foods, "pineapple", "kiwi", "papaya");
    // to delete elements at the end of the array
    array_pop($foods);
    // to remove the 1st element of the array
    array_shift($foods);
    // to reverse the array u have to assign a new variable or can use the initial array
    $reversed_foods = array_reverse($foods);
    // to count the elements of the array
    echo count($reversed_foods) . "<br>";

   /*echo $food[0] . "<br>";
    echo $food[1] . "<br>";
    echo $food[2] . "<br>";
    echo $food[3] . "<br>";*/

    foreach($reversed_foods as $food) {  // foreach method to access every element in array
        echo $food . "<br>";
    }

?>