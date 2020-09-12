<?php
require('db.php');

$id = $_GET['id'];

$deleteInfo = "DELETE FROM reg WHERE id = $id";
$executeQuery = $conn->query($deleteInfo);

if($deleteInfo == true){
    header('Location: display.php');
} else{
    echo "Data Deletion Failed $conn->error";
}