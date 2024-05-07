<?php

$name = '%';
$Conn = mysqli_connect('localhost', 'root', '')
    or die('No Connection: ' . mysqli_errno($Conn));

mysqli_select_db($Conn, 'phptestdb')
    or die('database will not open' . mysqli_errno($Conn));

$sql = "SELECT * FROM LAWYER";
$result = mysqli_query($Conn, $sql)
    or die("Invalid Query");

$resultView = '';

$num = mysqli_num_rows($result);

echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Specialty</th>
    </tr>";

for ($i = 0; $i < $num; $i++) {
    $row = mysqli_fetch_row($result);

    echo "<tr>
            <td>" .$row[0]. "</td>
            <td>" .$row[1]. "</td>
            <td>" .$row[2]. "</td>
            <td>" .$row[3]. "</td>
         </tr>";
}
echo "</table>";

mysqli_free_result($result);
echo $resultView;
mysqli_close($Conn);
