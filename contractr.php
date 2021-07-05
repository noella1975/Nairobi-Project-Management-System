<?php
	session_start();
	include('connection.php');
// initializing variables
$id = ""; 
$username = "";
$email    = "";
$phone = "";
$address = "";
$errors = array(); 

// REGISTER CONTRACTOR
if (isset($_POST['add_contractor'])) {
  /*
  // receive all input values from the form
  $id = mysqli_real_escape_string($con, $_POST['contractor_id']);
  $username = mysqli_real_escape_string($con, $_POST['contractor_name']);
  $email = mysqli_real_escape_string($con, $_POST['contractor_email']);
  $phone = mysqli_real_escape_string($con, $_POST['contractor_phone']);
  $address = mysqli_real_escape_string($con, $_POST['contractor_address']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "Phone number is required"); }
  if (empty($address)) {array_push($errors, "Address is required");}

  // first check the database to make sure 
  // a contractor does not already exist with the same name and/or email
  $contractor_check_query = "SELECT * FROM contractor WHERE contractor_name='$username' OR contractor_email='$email' LIMIT 1";
  $result = mysqli_query($con, $contractor_check_query);
  $contractor = mysqli_fetch_assoc($result);
  
  if ($contractor) { // if contractor exists
    if ($contractor['contractor_name'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['contractor_email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }
*/
   // Finally, register contractor if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO contractor(contractor_ID,contractor_name,contractor_email,contractor_phone,contractor_address) 
  			  VALUES('$id','$username','$email','$phone','$address')";
  	$contractor_query_run= mysqli_query($con, $query);
    if($contractor_query_run)
    {
      $_SESSION['message'] = "Contractor Edited Successfully";
      header("Location: contractors.php");
    }
    else
    {
      echo "New record creation fail";
    }
  	
      /*  exit();
  	$_SESSION['message'] = "User Added Successfully";*/
  	
  }

}
 
//UPDATE CONTRACTOR
if(isset($_POST['updatebtn'])){
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];  
    $email = $_POST['edit_email'];
    $phone = $_POST['edit_phone'];
    $address = $_POST['edit_address'];
    /*$profile_picture = $_POST['profile_picture']; */

    $query = "UPDATE contractor SET contractor_name='$name',contractor_email='$email',contractor_phone='$phone',contractor_address='$address' WHERE contractor_ID='$id' ";
    $contractor_query_run = mysqli_query($con, $query);

    if($contractor_query_run)
    {
      $_SESSION['message'] = "Contractor Edited Successfully";
      header("Location: contractors.php");
    }
    else
    {
      $_SESSION['message'] = "Contractor Edit Failed";
      header("Location: contractors.php");
    }
}


//DELETE USER
if(isset($_POST['_btndelete'])){
    $id = $_POST['delete_contractor'];
    
    

    $query = "DELETE FROM contractor WHERE contractor_id='$id' ";
    $contractor_query_run = mysqli_query($con, $query);

    if($contractor_query_run)
    {
      $_SESSION['message'] = "Contractor Deleted Successfully";
      header("Location: contractors.php");
    }
    else
    {
      $_SESSION['message'] = "Contractor Delete Failed";
      header("Location: contractors.php");
    }
  }

?>