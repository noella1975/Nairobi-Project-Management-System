<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		County Project Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			
			<h1 style="color: black;">COUNTY PROJECT MANAGEMENT SYSTEM</h1>
		</div>
		<div id="nav">
			<nav>
				<ul>
					<a href="index.html" id="linkref"><img src="county-logo.png" ></a>
					<li><a href="admin.php" id="linkref">HOME</a></li>
					<li><a href="projects.php" id="linkref">MANAGE PROJECTS</a></li>
					<li><a href="users.php" id="linkref">MANAGE USERS</a></li>
					<li><a href="logout.php" id="linkref">LOGOUT</a></li>
					
					
					
				</ul>
			</nav>
		</div>
		</header>
		<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">Welcome Admin</h1><br><br>
				<div class="button">
				<a href="../ADMIN/projects.php">
					<button>PROJECTS</button>
				</a></div><br>
				<div class="button2">
				<a href="../ADMIN/users.php">
					<button>USERS</button>
				</a>
				</div>
			</div>
		</div>
		</section>

		<?php
include('includes/footer.php');
?>