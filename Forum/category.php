<?php
	session_start(); 
	include 'header.php';
	include 'process.php';
	$catID = $_GET['id'];
	$catID += 0;
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
			<?php getSubCategories($catID) ?>
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
            function whoIs() {
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