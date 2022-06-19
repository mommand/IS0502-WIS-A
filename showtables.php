<?php
include('dbconnect.php');
include('asset.php');
$dbname = $_GET['dbname'];
// select database
mysqli_select_db($conn, $dbname);
// create query

$q = "SHOW TABLES";
// execute query

$exe_q = mysqli_query($conn, $q);
// check if the query is ok

if ($exe_q){
	?>
	<div class="container">
		<div class="row">
			<h3>
				<?php echo $dbname; ?>
			</h3>
			 <hr>
		</div>
     <table class="table table-bordered">
     	<tr>
     		<th>ID</th>
     		<th>Table name</th>
     		<th colspan="3">More Actions</th>
     	</tr>
	<?php
  
   while ($records = mysqli_fetch_array($exe_q)) {
   	   $i++;
   	 ?>
   	 	<tr>
   	 		<td><?php echo $i; ?></td>
   	 		<td><?php echo $records[0]; ?></td>
   	 		<td><a href="">Drop</a></td>
   	 		<td><a href="">Describe</a></td>
   	 		<td><a href="">Brows</a></td>
   	 	</tr>
   	 <?php 
   }
}

else{
	echo "Error".mysqli_error();
}


?>
</table>
</div>
