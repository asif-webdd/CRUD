<?php 
require('db.php');

$id = $_GET['uid'];

if(isset($_POST['submit'])){
    $fname  = $_POST['fname'];
    $lname  = $_POST['lname'];
    $user   = $_POST['user'];
    $email  = $_POST['email'];
    $gender = $_POST['gender'];
    $pass   = $_POST['pass'];
    $repass = $_POST['repass'];

    $updateInfo = "UPDATE reg 
    SET fname='$fname', lname='$lname', user='$user', email='$email', gender='$gender', pass='$pass', repass='$repass' 
    WHERE id = $id";

    $information = $conn->query($updateInfo);

    if($information == true){
        header('location: display.php');
    } else{
        echo "Data update failed $conn->error";
    }
}


?>