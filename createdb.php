<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>DB Form</title>
	<?php
	 include('asset.php');
	 include('dbconnect.php');
	?>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<div class="row">
				<?php
					if (isset($_SESSION['error_msg'])) {
				     ?>
				     	<div class="alert alert-danger">
				     		<?php
				     		   echo $_SESSION['error_msg'];
				     		   unset($_SESSION['error_msg']);
				     		?>
				     	</div>
				     <?php
					}
				?>
				<?php
					if (isset($_SESSION['sucess_msg'])) {
				     ?>
				     	<div class="alert alert-success">
				     		<?php
				     		   echo $_SESSION['sucess_msg'];
				     		   unset($_SESSION['sucess_msg']);
				     		?>
				     	</div>
				     <?php
					}
				?>
				<form action="dbController.php" method="post">
					 <div class="row form-group">
					 	Enter Database Name
					 	<input type="text" name="dbname" class="form-control">
					 </div>
					 <div class="row form-group">
					 	<input type="submit" class="btn btn-primary" value="Create!">
					 </div>
				</form>
			</div>
			
		</div>
	</div>
	<!-- second row of the content -->
	<div class="row">
		<?php
			$query = "SHOW DATABASES";
			// run query
			$run_q = $conn->query($query);
			// create table structure
			?>
			<table class="table table-bordered table-stripped">
				<tr>
					<th>ID</th>
					<th>Database Name</th>
					<th colspan="2">More Actions</th>
				</tr>
			<?php

			while ($rows = $run_q->fetch_assoc()) {
				$i++;
				?>
				 <tr>
				 	<td><?php echo $i;?></td>
				 	<td><?php echo $rows['Database']; ?></td>
				 	<td><a href="dropdb.php?dbname=<?php echo $rows['Database']; ?>" class="btn btn-danger" onclick="confirm('Do you want to delete this database?');">Drop</a></td>
				 	<td><a href="" class="btn btn-primary">Show Tables</a></td>
				 </tr>
				<?php
			}
		?>
		</table>
	</div>

	<!-- end of second row -->
</div>
</body>
</html>