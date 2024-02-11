<?php 
	session_start();
	require_once 'autoloader.php';

	
	$login = new login();
	$user_data = $login->check_login($_SESSION['user_id']);

	if(isset($_GET['find']))
	{
		$find = addslashes($_GET['find']);

		$sql = "select * from users where major like '%$find%' limit 30";

		$DB = new database();
		$results = $DB->read($sql);
	}

	$searchUser = new user();
	

	if(is_array($results))
	{
		foreach ($results as $row) {
			$friend_row = $searchUser->get_user($row['user_id']);
			echo $friend_row['user_name'] . " " . $friend_row['major'] . "<br>";
		}
	}

?>