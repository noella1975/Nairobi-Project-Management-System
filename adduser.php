<?php
	include 'connection.php';
  include 'includes/header.php';
  include 'includes/sidebar.php';
  include 'includes/topbar.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title>
    County Project Management System
  </title>
  <link rel="stylesheet" type="text/css" href="./css/server.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
  <?php if (isset($_GET['message'])) { ?>
    <p class="msg">
        <?php 
            echo $_GET['message']; 
            unset($_GET['message']);
        ?></p>
        <?php }
       ?>

<div class="header">
    <h2 style="text-align: center;">Add User</h2>
  </div>
  
  <form method="post" action="usr.php">
    
    <div class="input-group">
      <label></label>
      <input type="hidden" name="id" value="">
    </div>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value=""> 
    </div>
    <div class="input-group">
      <label>Give Role</label>
      <select name="role_as" class="form-control" required="">
        <option value="">Select</option>
        <?php 
       $role = mysqli_query($con, "SELECT role_name From roles");  // Use select query here 

        while($data = mysqli_fetch_array($role))
        {
            echo "<option value='". $data['role_name'] ."'>" .$data['role_name'] ."</option>";  // displaying data in option menu
        } 
       ?>
        
      </select>
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="add_user">ADD</button>
    </div>
  </form>
    
</body>
</html>
