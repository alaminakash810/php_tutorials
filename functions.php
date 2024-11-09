<?php 
    // function = write some code once and reuse it when you need it
    // type () after name to invoke
    // ex. add() subtract() multiply() divide() 

    /*
    function happy_birthday($first_name, $age) {
        echo "happy_birthday to you {$first_name} <br>";
        echo "happy_birthday dear {$first_name} <br>";
        echo "happy_birthday and sorry for late wish {$first_name} <br>";
        echo "You are {$age} years old <br>";
        echo "happy_birthday to my best friend {$first_name}<br><br>";

    }

    happy_birthday("akash", 22);
    happy_birthday("anik", 20);
    happy_birthday("rahim", 23);
    

    function is_even($number) {
        if ($number % 2 == 0){
            return "even number";
        }
        else{
            return "odd number";
        }
        
    }
    echo is_even(113);
    */

    function hypotenuse($a, $b){ // can declear data types
        $c = sqrt($a ** 2 + $b **2);
        return $c;
    }

    echo hypotenuse(4,5);

?>