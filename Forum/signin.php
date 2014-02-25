<?php
//signin.php
include 'connect.php';

session_start();

if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
    echo $_SESSION['user_name'];

}
else
{
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$sql = "SELECT user_id, username
		FROM tblUsers
		WHERE username = '" . mysql_real_escape_string($_POST['user_name']) . "'
		AND password = '" . sha1($_POST['user_pass']) . "'";
                         
            $result = mysql_query($sql);
            if(!$result)
            {
                echo 'fail';
                echo mysql_error(); //debugging purposes, uncomment when needed
            }
            else
            {
                if(mysql_num_rows($result) != 1)
                {
			echo 'wrong';                    
                }
                else
                {
                    $_SESSION['signed_in'] = true;
                     
                    while($row = mysql_fetch_assoc($result))
                    {
                        $_SESSION['user_id']    = $row['user_id'];
                        $_SESSION['user_name']  = $row['username'];
                    }

			echo 'success';
                }
            }
}
}
?>