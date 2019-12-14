<?php
	include('db_con.php');
	$id=$_REQUEST['id'];
	$query = "DELETE FROM medilist WHERE id=$id"; 
	$result = mysqli_query($conn,$query) or die ( mysqli_error());
	header("Location: show_all.php"); 
?>