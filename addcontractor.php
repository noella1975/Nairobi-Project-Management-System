<?php
	
  include 'includes/header.php';
  include 'includes/sidebar.php';
  include 'includes/topbar.php';
  include 'server.php'; 

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/server.css">
    <title>Add Contractor</title>
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


    <h1 style="text-align: center;">Add Contractor</h1>
    <form method="post" action="contractr.php" >
        <div class="input-group">
            <label></label>
            <input type="hidden" name="contractor_id" value="">
        </div>
        <div class="input-group">
            <label>Name</label>
            <input type="text" name="contractor_name" value="">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="contractor_email" value="">
        </div>
        <div class="input-group">
            <label>Phone</label>
            <input type="text" name="contractor_phone" value="">
        </div>
        <div class="input-group">
            <label>Address</label>
            <input type="text" name="contractor_address" value="">
        </div>
        <div class="input-group">
            <button type="submit" class="btn"  name="add_contractor">ADD</button>
        </div>
    </form>
</body>
</html>