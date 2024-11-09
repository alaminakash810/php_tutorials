<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio_btn.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American_express">
        American_express<br>
        <input type="submit" name="confirm" value="Confirm">
    </form>
</body>
</html>


<?php 

    if(isset($_POST["confirm"])){

        $credit_card = null;

        if(isset($_POST["credit_card"])) {
            $credit_card = $_POST["credit_card"];
        }
        /*
        if($credit_card == "Visa"){
            echo "You selected VISA card";
        }
        elseif($credit_card == "Mastercard"){
            echo "You selected MASTERCARD card";
        }
        elseif($credit_card == "American_express"){
            echo "You selected AMERICAN EXPRESS card";
        }
        else{
            echo "Please select a card";
        }
        */

        // create switch for the statements for practice

        switch($credit_card){
            case "Visa":
                echo "You selected VISA card";
                break;
            case "Mastercard":
                echo "You selected MASTERCARD card";
                break;
            case "American_express":
                echo "You selected AMERICAN EXPRESS card";
                break;
            default:
                echo "Please select a card";
                break;
        }

    }



?>