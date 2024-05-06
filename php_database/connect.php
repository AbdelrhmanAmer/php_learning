<?php

$name = '%';
$Conn = mysqli_connect('localhost', 'root', '')
    or die('No Connection: ' .mysqli_errno($Conn));

mysqli_select_db($Conn, 'phptestdb')
    or die('database will not open' .mysqli_errno($Conn));

$sql = "SELECT * FROM LAWYER";
$result = mysqli_query($Conn, $sql)
    or die("Invalid Query");

$resultView = '';

$numFields = mysqli_num_fields($result);
echo "Number of fields in<br>    Lawyer Table is: {$numFields} <br><br>"; // 4

$num = mysqli_num_rows($result);

for($i= 1; $i<=$num; $i++) {
    $row = mysqli_fetch_row($result);

    $resultView .= $row[0]
        . ' ' . $row[1]
        . ' ' . $row[3]
        . ' ' . $row[4]
        . '<br>';
}
mysqli_free_result($result); // frees up memory during a program

echo $resultView;

mysqli_close($Conn);

