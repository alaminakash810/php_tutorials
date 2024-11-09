<?php 
    // string functions

    $username = "Al Amin Akash";
    $phonenumber = "019-75-827-810";

    //$username = strtolower($username); to lowercase the string
    //$username = strtoupper($username);  to uppercase the string
    //$username = str_pad($username, 18, "oi"); to add anything to a string for a certain range
    //$phonenumber = str_replace("-", "/", $phonenumber); to replace anything in the string
    //$username = strrev($username); to reverse the string
    //$username = str_shuffle($username); to shuffle the characters in a string
    //$equals = strcmp($username, "AlAmin Akash"); to compare with another string or variable
    //$count = strlen($username); to find the length of the string
    //$index = strpos($username, " "); to find the 1st index of the given character
    //$firstname= substr($username, 0, 2); to create a sub string from the main string
    //$lastname = substr($username, 8);

    // explode function to create an array of strings
    $fullname = explode(" ", $username);
    foreach($fullname as $name) {
        echo $name . "<br>";
    }

    // implode function that creates a single string from array
    $usname = array("al", "amin", "akash");
    $usname= implode("-", $usname);
    echo $usname;



    //echo $phonenumber;
    //echo $lastname;

?>