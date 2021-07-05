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
    <h2 style="text-align: center;">Add Project</h2>
  </div>
  
  <form method="post" action="projct.php">
    
    <div class="input-group">
      <label></label>
      <input type="hidden" name="project_ID" value="">
    </div>
    <div class="input-group">
      <label>Project Name</label>
      <input type="text" name="project_name" value="">
    </div>
    <div class="input-group">
      <label>Location</label>
      <input type="text" name="project_location" value="">
    </div>
    <div class="input-group">
      <label>Sub-location</label>
      <select name="project_sublocation" class="form-control" required="">
        <option value="">Select</option>
        <?php 
       $sublocation = mysqli_query($con, "SELECT sublocation_name From sublocations");  // Use select query here 

        while($data = mysqli_fetch_array($sublocation))
        {
            echo "<option value='". $data['sublocation_name'] ."'>" .$data['sublocation_name'] ."</option>";  // displaying data in option menu
        } 
       ?>
      </select>
    </div>
    <div class="input-group">
      <label>Department</label>
      <select name="project_department" class="form-control" required="">
        <option value="">Select</option>
        <?php 
       $department = mysqli_query($con, "SELECT department_name From departments");  // Use select query here 

        while($data = mysqli_fetch_array($department))
        {
            echo "<option value='". $data['department_name'] ."'>" .$data['department_name'] ."</option>";  // displaying data in option menu
        } 
       ?>
      </select>
    </div>
    <div class="input-group">
      <label>Status</label>
      <select name="project_status" class="form-control" required="">
        <option value="">Select</option>
        <option value="0">In-progress</option>
       
      </select>
    </div>
    <div class="input-group">
      <label>Contractor</label>
      <select name="project_contractor" class="form-control" required="">
        <option value="">Select</option>
       <?php 
       $contractor = mysqli_query($con, "SELECT contractor_name From contractor");  // Use select query here 

        while($data = mysqli_fetch_array($contractor))
        {
            echo "<option value='". $data['contractor_name'] ."'>" .$data['contractor_name'] ."</option>";  // displaying data in option menu
        } 
       ?>
        
      </select>

    </div>
    <div class="input-group">
      <label>Cost</label>
      <input type="text" name="project_cost">
    </div>
    <div class="input-group">
      <label>Financial Year</label>
      <input type="text" name="financial_year">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="add_project">ADD</button>
    </div>
  </form>
    
</body>
</html>

