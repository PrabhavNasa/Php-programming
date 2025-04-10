<?php
    // Setting a cookie
    setcookie("username", "Prabhav Nasa", time()+30*24*60*60);
    // Verifying whether a cookie is set or not
    if(isset($_COOKIE["username"])){
        echo "Hi " . $_COOKIE["username"] . "<br>";
    } else{
        echo "Welcome Guest!<br>";
    
    }
    print_r($_COOKIE);
    echo "<br>This program is written by Prabhav Nasa<br>ERPID-0221BCA011";
?>