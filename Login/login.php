<?php 
session_start();

	require_once'autoloader.php';

$user_name = "";
$password = "";

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{

		$login = new login();
		$result = $login->evaluate($_POST);

		if($result != "")
		{
			echo "<div style='text-align:left; font-size:12px; color:white; background-color:grey;'>";
			echo "The following errors occured<br>";
			echo $result;
			echo "</div>";
		}
		else
		{
			header("Location: index.php");
			die;
		}

		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
	}
?>

<!DOCTYTPE html>
<html>
<head>
<title>
Login Form
</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
	<div class="loginbox">
	<img src="avatar.png" class="avatar">
		<h1>Login</h1>
		<form method="post">
			<p>Username</p>
			<input type="text" name="user_name" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" value="Login">
			<a href="#">Forgot Password</a><br>
			<a href="signup.php">Don't have an account?</a>
		</form>
	</div>
</body>
</html>