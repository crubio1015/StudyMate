<?php

class login
{

	private $error = "";


	public function evaluate($data)
	{
	
		$user_name = $data['user_name'];
		$password = $data['password'];

		$query = "select * from users where user_name = '$user_name' limit 1";
		
		$DB = new database();
		$result = $DB->read($query);

		if($result)
		{
			$row = $result[0];

			if($password == $row['password'])
			{
				$_SESSION['user_id'] = $row['user_id'];
			}
			else
			{
				$this->error .= "Wrong password<br>";
			}
		}
		else
		{
			$this->error .= "No such username was found<br>";
		}
		

		return $this->error;
		
	}

	public function check_login($id)
	{
		$query = "select user_id from users where user_id = '$id' limit 1";
		
		$DB = new database();
		$result = $DB->read($query);

		if($result)
		{
			return true;
		}

		return false;
	}


}