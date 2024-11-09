<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_array.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>


<?php 
    // associative array = An array made of key => value pairs 

    // countries => capitals
    // id => username
    // item => price


    $capitals = array("USA" => "Washington D.C",  
                    "Japan" => "Tokyo", 
                    "South Korea" => "Seoul", 
                    "India" => "New Delhi");

    /* $capitals["USA"] = "Las Vegas"; // to change a value to a key

    $capitals["China"] = "Beijing"; // to add a new key and value

    array_pop($capitals); // to remove the last key 
    array_shift($capitals); // to remove the first key

    // echo $capitals["Japan"]; for single use

    foreach($capitals as $key => $value){ // to show all the values
        echo "{$key} = {$value} <br>";
    } 

    // function to show all the keys

    $keys = array_keys($capitals);

    foreach($keys as $key) {
        echo "{$key} <br>";
    }

    // function to show all the values

    $values = array_values($capitals);

    foreach ($values as $value){
        echo "{$value} <br>";
    } 

    // function to return new associative array that will flip the keys to values

    // $capitals = array_flip($capitals);

    foreach ($capitals as $key => $value){
        echo "{$key} = {$value} <br>";
    } 

    // to reverse the array
    $capitals = array_reverse($capitals);

    foreach ($capitals as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    echo count($capitals); // to show the number of values or keys in the array */

    // practice problem with associative array

    $capital = $capitals[$_POST["country"]];
    echo "the capital of {$_POST["country"]} is {$capital}";

?>