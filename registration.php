<?php
require("db.php");

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];


    $insertQuery = "INSERT INTO reg (fname, lname, user, email, gender, pass, repass) VALUES ('$fname', '$lname', '$user', '$email', '$gender', '$pass', '$repass'); ";


    if($conn->query($insertQuery) == true){
        header('Location: display.php');
    } else{
        echo "Error $conn->error";
    }
}



















