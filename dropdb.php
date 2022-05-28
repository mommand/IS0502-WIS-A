<?php
$dbname = $_GET['dbname'];
// include conneciton file
include('dbconnect.php');

// drop database query

$query = "DROP DATABASE ".$dbname;
// execute query
$exe_query = $conn->query($query);
// check if query is successfully executed
if ($exe_query) {
	session_start();
	$_SESSION['sucess_msg'] = "Your Database has been successfully Dropped!";
	
	header('location:createdb.php');
}
else{
	session_start();
	$_SESSION['error_msg'] = "Error occurred!".mysqli_error();
	
	header('location:createdb.php');
}

?>