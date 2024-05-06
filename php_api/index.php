<!DOCTYPE html>
<html>
    <body>
        <?php
            $ch = curl_init();

            $search_string = "pc+video+games+2016";
            $url = "https://google.com/";

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            
            $result_url = curl_exec($ch);
            echo $result_url;

            curl_close($ch);
        ?>
    </body>
</html>
