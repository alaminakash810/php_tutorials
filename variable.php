<?php
    // variable = a reusable container that holds data string integer float boolean

    $name = "Akash";
    $food = "Pizza";
    $mail = "fake123@gmail.com";

    $age = 22;
    $users = 2;
    $quantity = 5;

    $gpa = 3.11;
    $price = 5.99;

    $online = true;
    $employed = true;
    $for_sale = true;

    echo "Hello my name is {$name}<br>";
    echo "I like {$food}<br>";
    echo "My email is {$mail}<br>";
    echo "My age is {$age}<br>";
    echo "There are {$users} users online<br>";
    echo "My gpa is {$gpa}<br>";
    echo "The pizza is \${$price}<br>";
    echo "Online status: {$online}<br>";

    $total = null;
    echo "You have ordered {$quantity}x {$food}s <br>";
    $total = $quantity * $price;
    echo " Your total is \${$total}";
    


?>