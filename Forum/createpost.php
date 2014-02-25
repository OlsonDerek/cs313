<?php	
	include 'connect.php';
	//$session.start();	
	if(isset($_COOKIE['posted']))
	{
		echo "You've posted in the past 15 seconds, please wait!";
	}
	else
	{
		setcookie('posted', 'true', time() + 1); // wait 15sec before able to post again
		$sql = 'INSERT INTO tblPosts (points, user, post, category, post_date, replyTo, postOrder) VALUES (0, ';
		$sql = $sql . mysql_real_escape_string($_GET['user']);
		$sql = $sql . ", '" . mysql_real_escape_string($_GET['post']) . "', " . mysql_real_escape_string($_GET['category']) . ', NOW(), NULL, NULL)';
		$result = mysql_query($sql);
		if(!$result)
		{
			echo 'fail';
			echo mysql_error(); //debugging purposes, uncomment when needed
		}
		else
		{
			echo 'success';
              }
            
	}
?>