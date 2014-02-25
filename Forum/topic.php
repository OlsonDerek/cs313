<?php
	session_start(); 
	include 'header.php';
	include 'process.php';
	$catID = $_GET['id'];
	$catID += 0;
	if(!isset($_SESSION['signed_in']) && $_SESSION['signed_in'] != true)
	{
		header('Location: http://www.dokinetix.com/Forum/signup.php');

	}

?>
<!-- Begin Content -->
            <div class="dvMainContent border">
                <h2>Assignments</h2>
                <ol class="breadcrumb breadcrumb-border">
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../assignments.html">Assignments</a></li>
                    <li><a href="forum.php">Forum</a></li>
                    <?php getCat($catID) ?>
                </ol>
                <div class="dvProfile">
			<h3><?php getCatName($catID) ?></h3>
			<table>
				<tr>
					<th class="post-th">User</th>
					<th class="post-th">Date</th>
					<th class="post-th">Post</th>
				</tr>
				<?php getPosts($catID) ?>
			</table>
		<form id="postForm class="form-horizontal" role="form" method="post">
			Post:<br>
			<textarea id="post" name="post" value="make a post" rows="5" cols="60"></textarea><br><br>
			<div class="col-sm-12 controls">
				<button id="btn-login" type="button" class="btn btn-success" onclick="createPost();"><i class="icon-hand-right"></i>Submit</button>  
			</div>
		</form>

                </div>
            </div>
        <!-- End Content -->

        <!-- Begin Footer -->
        <footer class="footer well well-lg" id="footer">
          <div class="container">
            <p class="muted credit"><a href="http://dokinetix.com/">DOKinetix.com</a></p>
          </div>
        </footer>
        <!-- End Footer -->
        <script type="text/javascript">
            function createPost() {
		  var post = document.getElementById('post').value;
		  var cat = <?php echo json_encode($catID); ?>;
		  var user = <?php echo json_encode($s_userID); ?>;
                $.ajax({
                    type: "GET",
                    url: "createpost.php",
                    datatype: "html",
                    data: {category: cat, 
			      post: post,
			      user: user },
                    success: function (data) {
			switch(data)
			{
				case 'success':
					location.reload();
					break;
				case 'fail':
					alert('Issue creating the post!');
					break;
				default:
					alert(data);
					break;
			}
                    	}
                });
            }            
        </script>
    </body>
</html>