<?php
	include("connection.php");
	 include('config.php'); 
   include('head_section.php'); 
	
?>
<!DOCTYPE html>
<html>
<head>
<title> ADMIN LOGIN </title>
  <link rel="stylesheet" type="text/css" href="design.css">
  </head>
<body>

<!-- Navbar -->
	<?php include( ROOT_PATH . '/navbar.php'); ?>
	<!-- // Navbar -->
<section>
 <div class="loginbox">
 <h1>LOG IN HERE</h1>
<form method="post" action="logincode.php">
    
     Username : <input type="text" name="username" placeholder="Enter username">
	 
	 Password : <input type="password" name="password" placeholder="Enter password">

	 <input type="Submit" name="login_btn" value="Login"> 
 </form>
 </div>
</section>
<!-- Footer -->
	<?php include( ROOT_PATH . '/footer.php'); ?>
<!-- // Footer -->
</body>

</html>
