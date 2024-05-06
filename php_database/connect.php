<?php

$name = '%';
$Conn = mysqli_connect('localhost', 'root', '')
    or die('No Connection: ' .mysqli_errno($Conn));

mysqli_select_db($Conn, 'phptestdb')
    or die('database will not open' .mysqli_errno($Conn));

echo "<br>";

$sql = "SELECT * FROM LAWYER";
$result = mysqli_query($Conn, $sql)
    or die("Invalid Query");

$resultView = '';

$num = mysqli_num_rows($result);

for($i= 1; $i<=$num; $i++) {
    $row = mysqli_fetch_row($result);
    
    $resultView .= 
        $i
        . ' ' . $row['LawyerID']
        . ' ' . $row['LawyerName']
        . ' ' . $row['LawyerAddress']
        . ' ' . $row['Specialty']
        . '<br>';
}
mysqli_free_result($result); // frees up memory during a program

echo $resultView;

mysqli_close($Conn);

