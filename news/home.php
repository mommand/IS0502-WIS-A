<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<?php 
	  include('../asset.php');
	  include ('../dbconnect.php');
	?>
	<style>
		.hg {
			height: 250px !important;
		}
		.pdd{
			padding-top: 4%;
		}
	</style>
</head>
<body>
 <div class="container pdd">
 	<div class="row">
 		<div class="col-md-6 offset-md-4">
 			<h4>New upload Section</h4>
 			
 	    </div>
 		<hr>
 	</div>
 	<div class="row">
 		<div class="col-md-6 offset-md-4">
 			<div class="row">
 				<form action="newsController.php" method="post">
 					<div class="row form-group">
 						News Title
 						<input type="text" name="title" class="form-control">
 					</div>
 					<div class="row form-group">
 						Category
 						<select class="form-control" name="category">
 							
 							<option>-- Please Select --</option>
 							<?php
									$get_cat = "SELECT * FROM category";
									$run_q = mysqli_query($conn, $get_cat);
									while ($rows = $run_q->fetch_assoc()) {
										  ?>
										  <option value="<?php echo $rows['id']; ?>">
										  	<?php echo $rows['Name']; ?>
										  </option>
										  <?php
									}

								?>
 							
 						</select>
 					</div>
 					<div class="row form-group">
 						<p>News Content</p>
 						<textarea class="form-control hg" name="content">
 							
 						</textarea>
 					</div>
 					<div class="row form-group">
 						<input type="submit" name="" value="Save" class="btn btn-primary">
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>
</body>
</html>