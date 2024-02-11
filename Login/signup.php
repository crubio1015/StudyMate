<?php 


	require_once 'autoloader.php';
$user_name = "";
$email = "";
$major = "";
$grad_year = "";
$password = "";
$gender = "";
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{

		$signup = new signup();
		$result = $signup->evaluate($_POST);

		if($result != "")
		{
			echo "<div style='text-align:left; font-size:12px; color:white; background-color:grey;'>";
			echo "The following errors occured<br>";
			echo $result;
		}
		else
		{
			header("Location: login.php");
			die;
		}
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$major = $_POST['major'];
		$grad_year = $_POST['grad_year'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
	}


?>





<!DOCTYTPE html>
<html>
<head>
<title>
Signup
</title>
	<link rel="stylesheet" type="text/css" href="stylesign.css">
</head>
<body>
	<div class="loginbox">
	<img src="avatar.png" class="avatar">
		<h1>Signup</h1>
		<form method="post">
			<p>Username</p>
			<input type="text" name="user_name" placeholder="Enter Username">
			<p>Email</p>
			<input type="text" name="email" placeholder="Enter valid email address">
			<p>Gender</p>
			<select id="text" name="gender">
				<option>Male</option>
				<option>Female</option>
				<option>Other</option>		
			</select>
			<p style="padding-top: 15px;">Major</p>
			<input type="text" name="major" placeholder="Enter your major">
			<p>Graduation Year</p>
			<input type="text" name="grad_year" placeholder="Enter expected year of Graduation">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" value="Signup">
			<a href="#">Forgot Password</a><br>
			<a href="login.php">Already have an account?</a>
		</form>
	</div>
</body>
</html>