<?php
    echo "Welcome to curl";
    
    $ch = curl_init();
    $search_string = "video+games";
    $url = "https://www.alibaba.com/trade/search?spm=a2700.product_home_newuser.home_new_user_first_screen_fy23_pc_search_bar.keydown__Enter&tab=all&SearchText=$search_string";

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // https
    
    //This option tells cURL to return the fetched web page content as a string
    // from curl_exec() instead of outputting it directly.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    
    // https://m.media-amazon.com/images/I/71BamMUl0VL._AC_UY218_.jpg

    $server_response = curl_exec($ch);
    echo $server_response;
    curl_close($ch);
?>