<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="while.loop.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>


</body>
</html>



<?php 
    // while loop = do some code infinitely while some condition remains true

    /* 
    $counter = 0;
    while($counter < 10) {
         $counter ++;
         echo $counter . "<br>";
    }
    */

    // stopwatch problem

    $seconds = 0;
    $running = true;

    while($running) {

        if(isset($_POST["stop"])) {
            $running = false;
        }  // isset() function is used to check weather the button is clicked or not

        else {
            sleep(1); 
        // wait 1 seconds use sleep function
                
        $seconds++;
        
        echo $seconds . "<br>";
       
        flush(); // to show the output
        
        }
    }

?>