<div id="post">
	<div>
	</div>
		<?php
			$image = "user_male.jpg";
			if($row_user['gender'] == "Female")
			{
				$image = "user_female.jpg";
			}
			elseif($row_user['gender'] == "Other")
			{
				$image = "avatar.png";
			}
		?>	
		<img src="<?php echo $image ?>" style="width: 75px;margin-right: 4px;">
	
	<div>
		<div style="font-weight: bold;color: #405d9b;"><?php echo $row_user['user_name']?></div>
		<?php
		echo $row['post'];
		?>
		<br/><br/>
		<a href="#" style="color:#007bff;text-decoration: none;font-weight: bold;margin-right: 10px;" class="like-btn">Like</a>
		<a href="" style="color:#007bff;text-decoration: none;font-weight: bold;margin-right: 10px;" class="comment-btn">Comment</a>  
		<span style="font-size: 12px;color: #999;margin-left: 10px;">
			
			<?php echo $row['date']?>
		</span>
	</div>
</div>