<?php

//$session_start();

function getCategories()
{
	$sql = 'SELECT * FROM tblCategories WHERE parent_id is NULL';
         
	$result = mysql_query($sql);
	if(!$result)
	{
		echo 'fail';
		echo mysql_error(); //debugging purposes, uncomment when needed
	}
	else
	{
		$catHtml = '<tr>';

		while($row = mysql_fetch_assoc($result))
		{	
			$catHtml = $catHtml . '<td><h3><a href="category.php?id=' . $row['cat_id'] . '">' . $row['category_name'] . '</a></h3></td>';
		}
	}	
	echo $catHtml . '</tr>';
}

function getSubCategories($cat)
{
	if($cat == 0)
	{
		getCategories();
	}
	else
	{
		$sql = 'SELECT * FROM tblCategories WHERE parent_id = ' . $cat;
		$result = mysql_query($sql);
		if(!$result)
		{
			echo 'fail';
			echo mysql_error(); //debugging purposes, uncomment when needed
		}
		else
		{
			while($row = mysql_fetch_assoc($result))
			{
				$catHtml = $catHtml . '<td><h4><a href="topic.php?id=' . $row['cat_id'] . '">' . $row['category_name'] . '</a></h4>'; 
				$catHtml = $catHtml . $row['description'] . '</td>';
			}
		}
		echo '<tr>' . $catHtml . '</tr>';
	}	
}

function getCat($cat)
{
	$sql = 'SELECT * FROM tblCategories WHERE cat_id = ' . $cat;
	$result = mysql_query($sql);
	if(!$result)
	{
		echo 'fail';
		echo mysql_error(); //debugging purposes, uncomment when needed
	}
	else
	{
		while($row = mysql_fetch_assoc($result))
		{
			$catHtml = '<li class="active"><a href="category.php?id=' . $row['cat_id'] . '">' . $row['category_name'] . '</a></li>';
		}
	}
	echo $catHtml;
}

function getCatName($cat)
{
	$sql = 'SELECT * FROM tblCategories WHERE cat_id = ' . $cat;
	$result = mysql_query($sql);
	$catHtml = '';
	if(!$result)
	{
		echo 'fail';
		echo mysql_error(); //debugging purposes, uncomment when needed
	}
	else
	{
		while($row = mysql_fetch_assoc($result))
		{
			$catHtml = $row['category_name'];
		}
	}
	echo $catHtml;
}

function makePost($cat, $post)
{
	setcookie('posted', 'true', time() + 15); // wait 15sec before able to post again
}

function getPosts($cat)
{
	$sql = 'SELECT * FROM tblPosts WHERE category = ' . $cat;
	$result = mysql_query($sql);
	if(!$result)
	{
		echo 'fail';
		echo mysql_error(); //debugging purposes, uncomment when needed
	}
	else
	{					
		while($row = mysql_fetch_assoc($result))
		{
			$users[] = getUser($row['user']);
			$postDates[] = $row['post_date'];
			$posts[] = $row['post'];
		}
				
		for($x=0;$x<count($users);$x++)
		{
			$catHtml = $catHtml . '<tr>';				
			$catHtml = $catHtml . '<td class="post-user">' . $users[$x] . '</td>';
			$catHtml = $catHtml . '<td class="post-date">' . $postDates[$x] . '</td>';
			$catHtml = $catHtml . '<td class="post">' . $posts[$x] . '</td>';
			$catHtml = $catHtml . '</tr>';
		}	
	}
	echo $catHtml;
}

function getUser($userID)
{
	$sql = 'SELECT * FROM tblUsers WHERE user_id = ' . $userID;
	$result = mysql_query($sql);
	if(!$result)
	{
		echo 'fail';
		echo mysql_error(); //debugging purposes, uncomment when needed
	}
	else
	{
		$row = mysql_fetch_assoc($result);
		return $row['username'];
	}
}

?>