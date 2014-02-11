<?php
$mysqli = new mysqli("localhost", "php", "php-pass", "php_db");
if ($mysqli->connect_errno)
{
	echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}

$result = $mysqli->query("SELECT * FROM tblUsers");

while ($row = $result->fetch_assoc())
{
	echo "Name: " . $row["username"] . "<br />";
	$userID = $row["user_id"];
	$posts = $mysqli->query("SELECT * FROM tblPosts WHERE user = $userID");
	$count = 0;
	while ($post = $posts->fetch_assoc())
	{
		echo "\tPost (" . ++$count . ") : " . $post["post"] . "<br />";
	}
}
?>