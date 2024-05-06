<?php

$name = '%';
$Conn = mysqli_connect('localhost', 'root', '', 'phptestdb');
$sql = "SELECT * FROM LAWYER WHERE LawyerName Like ?";
$stmt = mysqli_stmt_init($Conn);

if(mysqli_stmt_prepare($stmt, $sql))
{
    mysqli_stmt_bind_param($stmt, "s", $name);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    while($row = $result->fetch_assoc()){
        echo $row['LawyerID'].' '.$row['LawyerName']. ' ' .$row['LawyerAddress']. ' '.$row['Specialty'] .'<br>';
    }
}

$Conn->close();