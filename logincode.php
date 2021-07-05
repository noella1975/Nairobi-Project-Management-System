<?php 
include 'connection.php';
$name = "";
$password = "";
$uname = "";
$pass = "";

if (isset($_POST['login_btn'])) {
 	$name = $_POST['username'];
 	$password =$_POST['password'];

     function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }
    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: login2.php?error=User Name is required");
        exit();

    }else if(empty($pass)){
        header("Location: login2.php?error=Password is required");
        exit();

    }
    else{
 	$log_query = "SELECT * FROM users WHERE username='$name' AND password='$password' LIMIT 1 ";
 	$log_query_run = mysqli_query($con, $log_query);
 	if (mysqli_num_rows($log_query_run) > 0) {
 		foreach ($log_query_run as $row) {
 			
 			$user_name = $row['username'];
 			$password = $row['password'];
 			
 		}

 		

 		$_SESSION['status'] = "Logged in sucessfully";
 		header('Location: ./ADMIN/index.php');

 	}
 	
 } 
}
 else{
 	$_SESSION['status'] = "Access Denied";
 	header('Location: login.php');
 }

 ?>




