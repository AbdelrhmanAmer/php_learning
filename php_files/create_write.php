<?php
    /* 
        a   -> open file for write only, 
            -> doesn't erase, 
            -> pointer at the end
            -> create if does not exits
    */
    $myfile = fopen("newfile.txt","a") 
    or die("Unable to open file!");

    $txt = "Donald Duck\n";
    fwrite($myfile, $txt);

    $txt = "Goofy Goof\n";
    fwrite($myfile, $txt);

    fclose($myfile);

?>