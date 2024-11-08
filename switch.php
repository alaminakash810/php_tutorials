<?php 
    // switch = replacement to using many else if statements
    //         more efficient, less code to write


    /*$grade = "oiggs";

    switch($grade) {
        case "A":
            echo "You got {$grade}";
            break;
        case "B":
            echo "You got {$grade}";
            break;
        case "C":
            echo "You got {$grade}";
            break;
        case "D":
            echo "You got {$grade}";
            break;
        case "E":
            echo "You got {$grade}";
            break;
        case "F":
            echo "You got {$grade}";
            break;
        default:
            echo "{$grade} is not a valid grade.";
            break;
    }*/

    $date= date("l");
    

    switch($date) {
        case "Monday":
            echo "I Hate Mondays";
            break;
        case "Tuseday":
            echo "I like Tuseday";
            break;
        case "Wednesday":
            echo "I Hate Wednesday";
            break;
        case "Thursday":
            echo "I love Thursday";
            break;
        case "Friday":
            echo "I wake up late in Friday";
            break;
        case "Saturday":
            echo "I love to hang out on Saturday";
            break;    
        case "Sunday":
            echo "I Hate Sunday";
            break;
        default:
            echo"{$date} is not a day";
            break;
    }
?>
