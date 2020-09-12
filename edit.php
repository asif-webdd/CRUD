<?php 
require('db.php');

$id = $_GET['id'];
$updateData = "SELECT * FROM reg WHERE id = $id";
$update = $conn->query($updateData);

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/registration-form-1.jpg" alt="">
				</div>
				<form action="update-info.php?uid=<?php echo $id; ?>" method="post">
                    <h3>Edit User Information</h3>
                    
                    <?php 
                        if($update->num_rows>0){
                            while($result = $update->fetch_assoc()){
                    ?>

					<div class="form-group">
						<input type="text" name="fname" value="<?php echo $result['fname'] ?>" placeholder="First Name" class="form-control">
						<input type="text" name="lname" value="<?php echo $result['lname'] ?>" placeholder="Last Name" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="text" name="user" value="<?php echo $result['user'] ?>" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" name="email" value="<?php echo $result['email'] ?>" placeholder="Email Address" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="gender" id="" value="<?php echo $result['gender'] ?>" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="pass" value="<?php echo $result['pass'] ?>" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="repass" value="<?php echo $result['repass'] ?>" placeholder="Confirm Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button type="submit" name="submit">Register
						<i class="zmdi zmdi-arrow-right"></i>
                    </button>
                    
                    <?php } } ?>

				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>