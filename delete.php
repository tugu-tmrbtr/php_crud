<?php
	$id = $_GET['id'];
	
	include('conn.php');
	$conn  -> query("delete from `students` where userid='$id'");
	header('location:index.php');
?>