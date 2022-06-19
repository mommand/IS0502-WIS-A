<?php
// create database connection
include('../dbconnect.php');
// get posted data from user inputs

$title = $_POST['title'];
$category = $_POST['category'];
$news_content = $_POST['content'];
$status = 'inactive';
$author_id = 1;

$p_date = date("Y-m-d");
$update_date = date("Y-m-d h:i");


// create an insert query 

$insert_query = "INSERT INTO news (id, title, status, content, publish_date, updated_date, Author_id, cat_id) values(null, '$title','$status','$news_content','$p_date','$update_date', $author_id, $category)";

$exe_query = mysqli_query($conn, $insert_query);
// check if the query is success 

if ($exe_query) {
	
	 echo "Record is created!";
}
else{
	echo "Error".mysqli_error();
}


?>