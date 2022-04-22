<?php
	include('conn.php');
 
	$id = $_GET['id'];

	$st_code = $_POST['st_code'];
	$st_firstname = $_POST['st_firstname'];
  $st_lastname = $_POST['st_lastname'];
	$st_age = $_POST['st_age'];
  $st_sex = $_POST['st_sex'];
 
	$conn -> query ("update `students` set st_code='$st_code' , st_firstname='$st_firstname', st_lastname='$st_lastname',
    st_age='$st_age', st_sex='$st_sex' where userid='$id'");
	header('location:index.php');
?>