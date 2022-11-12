<?php require("login.class.php") ?>
<?php 
	if(isset($_POST['submit'])){
		$user = new LoginUser($_POST['username'], $_POST['password']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="styles.css">
	<title>Log in form</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<h2>Login form</h2>
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
		
</table>
	
	      
		<button type="submit" name="submit">Log in</button>

		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
		

<a href="forgot pass.php"; display: block; text-align: left;">Forgot Password?</a></P>
<p> <a href="change pass.php"; display: block; text-align: left;">Change Password?</a></P>
</form>
<div class="social-icons">
<p>Create Account! <a href="index.php">Register</a>.</p>
		
	</form>

</body>
</html>