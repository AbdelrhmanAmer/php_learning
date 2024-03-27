<?php
/*
    - session is a way to store information(in variables)
      to be used across multiple pages.
    
    - Unlike the cookie, the information is not stored on
      the users computer
    
    - It allows the appliaction to knows when you start the
      application and when you end.
    
    - Sessions variables hold information about one user, 
      and are availabe to all pages in one application
    
    - Session variables are set with PHP global Variable: 
      $_SESSION
*/

session_start();
?>

<html>
    <body>
        <?php
            // set session variables
            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";
            echo "Session variables are set.";
            print_r($_SESSION);

            // modify session variable
            $_SESSION["favcolor"] = "yellow";
        ?>
    </body>
</html>