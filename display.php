<?php require("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- STYLE CSS -->
	<link rel="stylesheet" href="css/style.css">
    <title>Display</title>
</head>
<body>

<?php 
    $displayUserInfo = "SELECT * FROM reg";

    $result = $conn->query($displayUserInfo);
?>
    
<div class="user-information">
    <h1>Users Information</h1>
    <table class="ui-table" border="1px solid">
        <thead>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Password</th>
            <th>RePassword</th>
            <th>Edit</a></th>
            <th>Delete</a></th>
        </thead>
        <tbody>

            <?php 
                if($result->num_rows>0){
                    while($info = $result->fetch_assoc()){
            ?>

            <tr>
                <td><?php echo $info['id']; ?></td>
                <td><?php echo $info['fname']; ?></td>
                <td><?php echo $info['lname']; ?></td>
                <td><?php echo $info['user']; ?></td>
                <td><?php echo $info['email']; ?></td>
                <td><?php echo $info['gender']; ?></td>
                <td><?php echo $info['pass']; ?></td>
                <td><?php echo $info['repass']; ?></td>
                <td><a href="edit.php?id=<?php echo $info['id']; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $info['id']; ?>">Delete</a></td>
            </tr>

            <?php } }?>
        </tbody>
    </table>

    <a href="index.php" class="btrf-btn">Register Form</a>
</div>




</body>
</html>