<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize_validate.php" method="post">
        Username:<br>
        <input type="text" name="username"><br>
        Age:<br>
        <input type="number" name="age"><br>
        Email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="Login"><br>
    </form>
</body>
</html>

<?php 
    if(isset($_POST["login"])) {
        // to sanitize to dangerous codes that could destroy the system

        /*
        $username= filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        //$username = $_POST["username"];
        echo "hello {$username}!";

        $age=filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        echo "you are {$age} years old!";

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        echo "Your email address is {$email}!";
        */


        // validation if it doesn't pass it returns an empty string

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            if(empty($age)) {
                echo "Please enter a valid age";
            }
            else {
                echo "that is a valid number your age is $age";
            }
            if(empty($email)) {
                echo "Please enter a valid email";
            }
            else {
                echo "that is a valid email and that is $email";
            }
    }

?>