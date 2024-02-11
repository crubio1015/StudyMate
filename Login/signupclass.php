<?php

class signup
{

	private $error = "";
	public function evaluate($data)
	{

		foreach ($data as $key => $value) {
			if(empty($value))
			{
				$this->error .= $key . " is empty!<br>";
			}
		}

		if($this->error == "")
		{
			$this->create_user($data);
		}
		else
		{
			return $this->error;
		}
	}

	public function create_user($data)
	{
	
		$user_name = $data['user_name'];
		$email = $data['email'];
		$major = $data['major'];
		$grad_year = $data['grad_year'];
		$gender = $data['gender'];
		$password = $data['password'];

		$userid = $this->create_userid();

		$query = "insert into users (user_id,user_name,email,major,grad_year,gender,password) values ('$userid','$user_name','$email','$major','$grad_year','$gender','$password')";
		
		$DB = new Database();
		$DB->save($query);

	}

	private function create_userid()
	{
		$length = rand(4, 19);
		$number = "";

		for ($i=0; $i < $length; $i++) { 
			
			$new_rand = rand(0,9);
			$number = $number . $new_rand;
		}

		return $number;
	}

}