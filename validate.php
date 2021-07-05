<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project_db";
$pass ="";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

  $sql = "SELECT * FROM users WHERE username='$username' and password = '$password'";
  $result= mysqli_query($conn,$sql);

  if($result && mysqli_num_rows($result) >0) 
  {
		session_start();
     $_SESSION['auth']='true';
	 header('Location: http://localhost/PMS/ADMIN/admin.php');
     
	} 
	else {
		echo'Invalid Username or Password!';
	}
$conn->close();
}
else{
  echo "Password should not be empty";
  die();
}
}
 else{
  echo "Username should not be empty";
  die();

}

?>