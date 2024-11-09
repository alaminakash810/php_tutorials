<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">
        Taco<br>
        <input type="submit" name="submit"><br>
    </form>
    -->

    <!--for putting the elements of checkbox in an array-->
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco">
        Taco<br>
        <input type="submit" name="submit"><br>
    </form>
</body>
</html>

<?php 
    /*
    if(isset($_POST["submit"])) {

        if(isset($_POST["pizza"])) {
            echo "You have selected Pizza!<br>";
        }
        if(isset($_POST["hamburger"])) {
            echo "You have selected Hamburger!<br>";
        }
        if(isset($_POST["hotdog"])) {
            echo "You have selected Hotdog!<br>";
        }
        if(isset($_POST["taco"])) {
            echo "You have selected Taco!<br>";
        }

        if(empty($_POST["pizza"])) {
            echo "You haven't selected Pizza!<br>";
        }
        if(empty($_POST["hamburger"])) {
            echo "You haven't selected Hamburger!<br>";
        }
        if(empty($_POST["hotdog"])) {
            echo "You haven't selected Hotdog!<br>";
        }
        if(empty($_POST["taco"])) {
            echo "You haven't selected Taco!<br>";
        }
    }
    */

    if(isset($_POST["submit"])) {
        $foods = $_POST["foods"];

        foreach($foods as $food) {
            echo $food . "<br>";
        }
    }

?>