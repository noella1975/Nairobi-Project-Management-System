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
    <link rel="stylesheet" type="text/css" href="tables.css">
    <title>Contractors</title>
</head>
<body>
	
	<h1 style="margin: 0px 35px;">CONTRACTORS</h1>
	
    
	<table id="example1" class="content-table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Action</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
					$query = "SELECT * FROM contractor";
					$query_run = mysqli_query($con, $query);

					if(mysqli_num_rows($query_run) > 0)
					{
						foreach($query_run as $row)
						{
							?>
			<tr>
			<td><?php echo $row['contractor_ID']; ?></td>
			<td><?php echo $row['contractor_name']; ?></td>
			<td><?php echo $row['contractor_email']; ?></td>
			<td><?php echo $row['contractor_phone']; ?></td>
			<td><?php echo $row['contractor_address']; ?></td>

			<td>
				<form action="editcontractor.php" method="post">
					<input type="hidden" name="edit_contractor" value="<?php echo $row['contractor_ID']; ?>">
				<button type="submit" name="_btnedit" class="edit_btn" >Edit</button>
				</form>
			</td>
			<td>
				<form action="contractr.php" method="post">
					<input type="hidden" name="delete_contractor" value="<?php echo $row['contractor_ID']; ?>">
				<button type="submit" name="_btndelete" class="del_btn">Delete</button>
				</form>
			</td>
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
<div class="align-right">
      <a href="addcontractor.php" class="btn">Add Contractor</a>
      </div>
</body>
</html>