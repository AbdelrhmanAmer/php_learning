<?php

$name = '%';
$Conn = mysqli_connect('localhost', 'root', '')
    or die('No Connection: ' .mysqli_errno($Conn));

mysqli_select_db($Conn, 'phptestdb')
    or die('database will not open' .mysqli_errno($Conn));

print('Database Connected.');

