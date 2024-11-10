<?php 
    // cookie= information about a user stored in a user's web browser
    //         targated advertisements, browsing preferences, and other
    //         non-sensitive data

    setcookie("fav_food", "pizza", time() + (86400*2), "/");
    setcookie("fav_drink", "coffee", time()-0, "/");
    // to delete a cookie add -0 to the time
    setcookie("fav_dessert", "ice cream", time() - 0, "/");

    foreach($_COOKIE as $key=> $value) {
        echo "{$key} = {$value} <br>";
    }

        // to access individual elements in the array of cookies
    if(isset($_COOKIE["fav_drink"])) {
        echo" buy some {$_COOKIE["fav_drink"]} !!";
    }
    else {
        echo"i don't know your favorite drink";
    }


?>