<?php
    /*
    To delete a cookie, use teh setcookie() function with an 
    expiration date in the past.
    
    Setting the expiration time in the past effectively
    instructs the browser to delete the cookie.
    */
    setcookie("user", "", time() - 3600);
?>