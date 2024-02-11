<?php
	session_start();
	$_SESSION;

	require_once 'autoloader.php';


	if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $login = new login();

        $result = $login->check_login($id);

        if($result)
        {

        }
        else
        {
            header("Location: login.php");
            die;
        }
    }
    else
    {       
        header("Location: login.php");
        die;
    }
    
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$post = new post();
		$id = $_SESSION['user_id'];
		$result = $post->create_post($id, $_POST);
		
		if($result == "")
		{
			header("Location: posttest.php");
			die;
		}
		else
		{
			echo "<div style='text-align:left; font-size:12px; color:white; background-color:grey;'>";
			echo "The following errors occured<br>";
			echo $result;
			echo "</div>";
		}
	}

	$post = new post();
	$id = $_SESSION['user_id'];
	$posts = $post->get_posts($id);

	$user = new user();
	$id = $_SESSION['user_id'];
	$friends = $user->get_friends($id);
?>





<!DOCTYTPE html>
<html>
<head>

<body>
	<div style="border: solid thin #aaa; padding: 10px; background-color: white;">
		<p>Post</p>
		<form method="post">	
			<textarea name="post" placeholder="What's on your mind?"></textarea>
			<input id="post_button" type="submit" value="Post">
			<br>		
		</form>

	</div>
	<div>
		<?php
			if($posts)
			{
				foreach ($posts as $row) {

					$postUser = new user();
					$row_user = $postUser->get_user($row['userid']);
					include("poststyle.php");
				}
			}

		?>


	</div>
	
	<div id="post_bar">
		
		<?php
			$DB = new database();
			$user_class = new user();

			$followers = $user_class->get_friends($_SESSION['user_id'], "user");

			if(is_array($followers))
			{
				$follower_ids = array_column($followers, "user_id");
				$follower_ids = implode("','", $follower_ids);

			}
			if($follower_ids)
			{

				$sql = "select * from posts where userid in('" .$follower_ids. "') limit 30";
				$posts = $DB->read($sql);
			}
			if($posts)
			{
				foreach ($posts as $row) {

					$timeUser = new user();
					$row_user = $timeUser->get_user($row['userid']);
					include("poststyle.php");
				}
			}

		?>

	</div>

	<div id="friends_bar">
		Friends<br>
		
		<?php
			if($friends)
			{
				foreach ($friends as $friend_row) {


					include("user.php");
				}
			}

		?>


	</div>
</body>
</head>
</html>