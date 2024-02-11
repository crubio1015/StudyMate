<div id="friends">
		<?php
		
			$image = "user_male.jpg";
			if($friend_row['gender'] == "Female")
			{
				$image = "user_female.jpg";
			}
			elseif($friend_row['gender'] == "Other")
			{
				$image = "avatar.png";
			}
		?>	

			<img id="friends_img" src="<?php echo $image?>" style="width: 10%;height: auto;">
			<br>
			<?php echo $friend_row['user_name']?>
		</div>