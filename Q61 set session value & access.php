<?php
    // Starting session
    session_start();
    // Storing Session Variables
    $_SESSION["firstname"] = "Prabhav";
    $_SESSION["lastname"] = "Nasa";
    //Accessing Session Variables
    echo "First name is " . $_SESSION["firstname"] . "<br>";
    echo "Last name is " . $_SESSION["lastname"] . "<br>";
    echo "<br>This program is written by Prabhav Nasa<br>ERPID-0221BCA011";
?>
