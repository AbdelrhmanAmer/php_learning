<?php
    /*
        <------Modifiers------>
        i : Performs a case-insensitive search
        m : Performs a multiline search(patterns that search
            for the beginning or end of a string will match
            the beginning or end of each line)
        u : Enables correct matching of UTF-8 encoded patterns
    */

    $text = "Hello world!\nThis is a multiline text.\nCafé is a great place.";
    echo preg_match('/^hello/im', $text);        // 1
    echo preg_match('/is/m', $text);             // 1
    echo preg_match('/café/iu', $text) . "<br>"; // 1

    /*
        <------Patterns------>
        [abc]  : Find one character from the options between the brackets
        [^abc] : Find any character NOT between the brackets
        [0-9]  : Find one character from the range 0 to 9
    */
    $text = "The Quick brwon fox jumps over the lazy dog";
    echo preg_match("/[abc]/", $text) ;         // 1
    echo preg_match("/[^abc]/", $text) ;        // 1  
    echo preg_match("/[0-9]/", $text) . "<br>"; // 0

    /*
        <------Quantifiers------>
        n+      : Matches any string that contains at least one n
        n*      : Matches any string that contains zero or more occurrences of n
        n?      : Matches any string that contains zoro or one occurrences of n
        n{3}    : Matches any string that contains a secquence of 3 n's
        n{2, 5} : Matches any string that contains a secquence of at least 2,
                  but not more than 5 n's 
    */
    $text = "banana";
    echo preg_match('/n+/', $text);              // 1
    echo preg_match('/a*/', $text);              // 1
    echo preg_match('/b?/', $text);              // 1
    echo preg_match('/a{3}/', $text);            // 0
    echo preg_match('/a{2,5}/', $text) . "<br>"; // 0

    /*
        <------Metacharacters------>
        |  : Find a match for any one of the patterns seperated by |
             as in: cat|dog|fish
        .  : Find just one instance of any character
        ^  : Finds a match as the beginning of a string in: ^Hello
        $  : Finds a match at the end of the string as in: Wordl$
        \d : Find a digit
        \s : Find a whitespace character
        \b : Find a match 
             at the beginning of a word like this:\bWORD, 
             or 
             at the end of a word like this: WORD\b 
    */
    $text = "Hello world!";
    echo preg_match('/H..lo world/', $text);      // 1
    echo preg_match('/^Hello/', $text);           // 1
    echo preg_match('/world$/', $text);           // 0
    echo preg_match('/\d/', $text);               // 0
    echo preg_match('/\s/', $text);               // 1
    echo preg_match('/\bworld/', $text) . "<br>"; // 1

    /*
        <------Grouping------>
        You can use parentheses ( ) to apply quantifiers to entire patterns.
        They also can be used to select parts of the pattern to be 
        used as a match.
    */
    $str = "Apples and bananas ";
    $pattern = "/ba(na){2}/i";
    echo preg_match($pattern, $str) ."<br>";  // 1



    // Expample 1 
    $txt = "you are better than\nyou think \nYOURself";
    $pattern = "/^you/mi";
    echo preg_match_all($pattern, $txt);          // 3
    
    $pattern = "/^you/m";
    echo preg_match_all( $pattern, $txt) ."<br>"; // 2


    // Expample 2
    $txt = "W3Sch*ols";
    $pattern = "/^[a-zA-Z].*\d{1}.{7,10}$/";
    echo preg_match_all($pattern, $txt); // 1

    $pattern = "/^[a-zA-Z].*\d{1}.{8,10}$/";
    echo preg_match_all($pattern, $txt); // 0
?>