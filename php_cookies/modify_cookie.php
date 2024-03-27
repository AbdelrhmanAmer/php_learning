<?php
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + 86400);

    /*
    to modify a cookie, just set(again) the cookie
    using the setcookie() function:

    / : sets the path to '/'(root directory), meaning the cookie will
        be accessible across the entire domain  
    */
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>