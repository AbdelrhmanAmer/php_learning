<?php
    /*
        r  : open a file for ready only, pointer at beginning
        w  : open file for write only, erase content or craete new
        a  : open file for write only, doesn't erase, pointer at the end
        x  : creates new file for write only, returns error if exists
        r+ : open file for read/write, pointer at beginning 
        w+ : open file for read/write, erase content, or create new
        a+ : open file for read/write, doesn't erase, pointer at the end
        x+ : creates new file for read/write, returns error if exists 
    */
    $myfile = fopen("webDictionary.txt", "r")
    or die("Unable to open file!"); // die is exit
    
    echo fread($myfile, filesize("webDictionary.txt"));

    fclose($myfile);
?>