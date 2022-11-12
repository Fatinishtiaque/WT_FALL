<?php require("register.class.php") ?>
<?php
	if(isset($_POST['submit'])){
		$user = new RegisterUser($_POST['username'], $_POST['password']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 	<title>Register form</title>
</head>
<body>


	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<h2>Register Now</h2>
		<h4>All fields are <span>required</span></h4>
<table>

           <tr>
		<td><label>Email:</label></td>
		<td><input type="text" name="username" id="email" placeholder="your email id"></td>
		</tr>

		<tr>
		<td><label>Username:</label></td>
		<td><input type="text" name="username"placeholder="your name"></td>
		</tr>

		<tr>
		<td><label>Password:</label></td>
		<td><input type="text" name="password" id="password" placeholder="your password"></td>
		</tr>
	
	      <tr>
           <td><label for="phoneNumber">Phone Number:</label></td>
           <td><input type="number" name="phoneNumber" id="phoneNumber" placeholder="your phone number"></td>
           </tr>

</table>
		


		<button type="submit" name="submit">Register</button>
		
		

		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
	
	
	</form>

</body>
</html>