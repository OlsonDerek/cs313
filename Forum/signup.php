<?php
	session_start(); 
	include 'header.php';
	if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
	{
		header('Location: forum.php');
	}
?>
        <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>                   
                </div>     
                <div style="padding-top:30px" class="panel-body" >
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>                            
                    <form id="loginform" class="form-horizontal" role="form">                                    
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="loginusername" type="text" class="form-control" name="username" placeholder="Username"/>                                        
                                </div>                                
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="loginpassword" type="password" class="form-control" name="password" placeholder="Password"/>
                                </div>
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->                                        
                                <div class="col-sm-12 controls">
                                    <button id="btn-login" type="button" class="btn btn-success" onclick="signin();"><i class="icon-hand-right"></i>Sign In</button>  
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Don't have an account? 
                                    <a href="#" onclick="$('#loginbox').hide(); $('#signupbox').show()">
                                        Sign Up Here
                                    </a>
                                    </div>
                                </div>
                            </div>    
                        </form>     
                    </div>                     
                </div>  
    </div>
    <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Sign Up</div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                    </div>  
                    <div class="panel-body" >
                        <form id="signupform" class="form-horizontal" role="form" method="post" action="signup.php">
                                
                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>    
                                  
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="user_email" placeholder="Email Address" id="useremail"/>
                                </div>
                            </div>
                                    
                            <div class="form-group">
                                <label for="username" class="col-md-3 control-label">Username</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="user_name" placeholder="Username" id="username"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="user_pass" placeholder="Password" id="password"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="repassword" class="col-md-3 control-label">Confrim Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="user_pass_check" placeholder="Confirm Password" id="repassword"/>
                                </div>
                            </div>                                   
  
                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <button id="btn-signup" type="button" class="btn btn-info" onclick="signup();"><i class="icon-hand-right"></i> &nbsp Sign Up</button>  
                                </div>
                            </div>

                        </form>
                        </div>
                </div>
         </div>     
    <script type="text/javascript">
        function signup() {
            var username = document.getElementById('username').value;
            var email = document.getElementById('useremail').value;
            var password = document.getElementById('password').value;
            var repassword = document.getElementById('repassword').value;
            if (password != repassword) {
                alert("Passwords don't match!");
                return false;
            }
            $.ajax({
                type: "POST",
                url: "signup.php",
                datatype: "html",
                data: {
                    user_name: username,
                    user_pass: password,
                    user_email: email,
		      user_pass_check: repassword
                },
                success: function (data) {
                    switch(data){
			case 'success':
				alert('Success!');
				window.location = "http://dokinetix.com/Forum/forum.html";
				break;
			case 'fail':
				alert('Unable to create, try again later.');
				break;
			case 'notUnique':
				alert('Username is not unique!');
				break;
			}
                }                
            });
		return false;
        }
	function signin(){
	     var user = document.getElementById('loginusername').value;
            var pass = document.getElementById('loginpassword').value;
            $.ajax({
                type: "POST",
                url: "signin.php",
                datatype: "html",
                data: {
                    user_name: user,
                    user_pass: pass
                },
                success: function (data) {
                    switch(data){
			case 'success':
				alert('Success!');
				//window.location = "http://dokinetix.com/Forum/forum.html";
				break;
			case 'fail':
				alert('Something went wrong while signing in. Please try again later.');
				break;
			case 'wrong':
				alert('Incorrect Username or Password');
				break;
			}
                }                
            });
		whoIs();
		return false;
	}
            function whoIs() {
		  var dataString;
                $.ajax({
                    type: "POST",
                    url: "signin.php",
                    datatype: "html",
                    data: dataString,
                    success: function (data) {
                        document.getElementById('loggedin').innerHTML = "Logged in as: " + data;
                    }
                });
		}
    </script>
</body>
</html>


<?php
//signup.php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $sql = "SELECT * FROM tblUsers WHERE username = '" . mysql_real_escape_string($_POST['user_name']) . "'";
    $result = mysql_query($sql);
    if(mysql_num_rows($result) != 0)
    {
	exit("notUnique");
    }
        $sql = "INSERT INTO
                    tblUsers(username, password, email ,create_date)
                VALUES('" . mysql_real_escape_string($_POST['user_name']) . "',
                       '" . sha1($_POST['user_pass']) . "',
                       '" . mysql_real_escape_string($_POST['user_email']) . "',
                        NOW())";
                         
        $result = mysql_query($sql);
        if(!$result)
        {
            echo 'fail';
            //echo mysql_error(); //debugging purposes
        }
        else
        {
            echo 'success';
        }
}

?>