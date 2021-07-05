<?php
session_start();

	
	if (!isset($_SESSION['auth'])) 
	{
		$_SESSION['auth_status'] = "Login to Access Dashboard";
		header('Location: login.php');
		exit(0);
	}
	else
	{
		if ($_SESSION['auth'] == "1") 
		{
			# code...
		}
		else if ($_SESSION['auth'] == "2") 
		{
			header("Location: projectsupervisor.php");
			exit(0);
		}
		elseif ($_SESSION['auth'] == "3") {
			header("Location: anotherrole.php");
			exit(0);
		}
		else
		{
			
			header("Location: contractor.php");
			exit(0);
		}
	}
	
?>