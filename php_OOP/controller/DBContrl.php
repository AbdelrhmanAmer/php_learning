<?php

include '../model/DBModel.php';
include '../view/DBView.php';

$name = $_POST['name'];

$dbModel = new DBModel();
$dbView = new DBView();

$result = $dbModel->get_names($name);

if ($result) {
    $resultView = $dbView->viewResults($result);
    echo $resultView;
} else {
    echo "No results found.";
}
