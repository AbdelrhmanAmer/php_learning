<?php

$name = '%';
$Conn = mysqli_connect('localhost', 'root', '')
    or die('No Connection: ' .mysqli_errno($Conn));

mysqli_select_db($Conn, 'phptestdb')
    or die('database will not open' .mysqli_errno($Conn));

print('Database Connected.');

$sql = "SELECT * FROM LAWYER";
$result = mysqli_query($Conn, $sql)
    or die("Invalid Query");

$resultView = '';

while ($row = $result->fetch_assoc()) {
    $resultView .=
        '<br>' . $row['LawyerID']
        . ' ' . $row['LawyerName']
        . ' ' . $row['LawyerAddress']
        . ' ' . $row['Specialty']
        . '<br>';
}
echo $resultView;

