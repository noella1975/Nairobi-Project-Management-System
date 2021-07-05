<?php  include('config.php'); ?>
<?php  include('registration_login.php'); ?>
<?php  include('head_section.php'); ?>
	<title>County Project Management System | Sign in </title>
</head>
<body>
<div class="container">
	<!-- Navbar -->
	<?php include( ROOT_PATH . '/navbar.php'); ?>
	<!-- // Navbar -->

	<div class="login" style="width: 40%; margin: 20px auto;">
		<form method="post" action="logincode.php" >
			<h2>Login</h2>
			<?php 
				if (isset($_GET['error'])) { ?>
					<p class="error">
						<?php echo $_GET['error']; ?></p>
				<?php }
			 ?>
			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</form>
	</div>
</div>
<!-- // container -->

<!-- Footer -->
	<?php include( ROOT_PATH . '/footer.php'); ?>
<!-- // Footer -->