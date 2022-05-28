<?php
// get value from user form
$dbname = $_POST['dbname'];
// include database connection file
include('dbconnect.php');
if (isset($dbname) && !empty($dbname)) {
	
	// create your query 
	$query = "CREATE DATABASE ".$dbname;
	// run query 
	$run_query = mysqli_query($conn, $query);
	if ($run_query) {
		session_start();
		$_SESSION['sucess_msg'] = "Database has been successfully created!";
		header('location:createdb.php');
	}
	else{
		echo "Error in database creatation!".mysqli_connect_error();
	}
}
else{
	session_start();
	$_SESSION['error_msg'] = "Please Enter your Database Name!";
	header('location:createdb.php');

}
?>