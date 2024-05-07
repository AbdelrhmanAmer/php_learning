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

// number of rows.
$num = mysqli_num_rows($result);

while($row = mysqli_fetch_array($result)) {
    $resultView .= $row['LawyerID']
        . ' ' . $row['LawyerName']
        . ' ' . $row['LawyerAdress']
        . ' ' . $row['LawyerSpecialty']
        . '<br>';
}
mysqli_free_result($result); // frees up memory during a program

echo $resultView;

mysqli_close($Conn);

