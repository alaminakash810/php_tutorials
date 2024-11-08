<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action ="for_loop.php" method="post">
        <label>enter a number to count to:</label><br>
        <input type="text" name="counter"><br>
        <input type="submit" value="start"><br>
    </form>

</body>
</html>


<?php 
    /* for loop = repeat some code a certain # of times

    for($i = 10; $i >0 ; $i--) {
        echo "Hello <br>";
        echo $i . "<br>";
    } */

    $counter = $_POST["counter"];

    for($i =  $counter; $i > 0; $i--) {
        echo $i . "<br>";
    }

?>