<?php
	include 'connection.php';
  include 'head_section.php';
  
  
?>
<!DOCTYPE html>
<html> 
<head>
	<link rel="stylesheet" type="text/css" href="tables.css">
	<title></title>
</head>
<body>
		<div class="container">
			<?php 
		include 'navbar.php';
	?>
		<h1 style="text-align: center;">PROJECTS</h1>
		
     
      
		<table id="example1" class="content-table">
			<thead>
				<tr>
					<th>Project ID</th>
					<th>Name</th>
					<th>Location</th>
					<th>Sub-location</th>
					<th>Department</th>
					<th>Cost</th>
					<th>Financial Year</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = "SELECT * FROM project";
					$query_run = mysqli_query($con, $query);

					if(mysqli_num_rows($query_run) > 0)
					{
						foreach($query_run as $row)
						{
							?>
							<tr>
					<td><?php echo $row['project_ID']; ?></td>
					<td><?php echo $row['project_name']; ?></td>
					<td><?php echo $row['project_location']; ?></td>
					<td><?php echo $row['project_sublocation']; ?></td>
					<td><?php echo $row['project_department']; ?></td>
					<td><?php echo $row['project_cost']; ?></td>
					<td><?php echo $row['financial_year']; ?></td>
					
					
				</tr>
				<?php
					}
				}
				else
				{
					?>
					<tr>
						<td>No Record Found</td>
					</tr>
					<?php
				}
				?>
				
			</tbody>
		</table>
	<?php 
		include 'footer.php';
	?>
</div>
</body>
</html>