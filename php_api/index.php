<?php
    echo "Welcome to curl";
    
    // 1) create cURL resource
    $ch = curl_init();
    
    // 2) set cURL options
    curl_setopt($ch, CURLOPT_URL, 'https://www.amazon.com');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // https
    // 3) run cURL (execute http request)
    $server_response = curl_exec($ch);

    // 4) close cURL resource
    curl_close($ch);
?>