<?php
	include('conn.php');
    
    $st_code=$_POST['st_code'];
	$st_firstname=$_POST['st_firstname'];
    $st_lastname=$_POST['st_lastname'];
    $st_sex=$_POST['st_sex'];
	$st_age=$_POST['st_age'];
 
    $conn -> query("insert into `students` (st_code,st_firstname,st_lastname,st_age,st_sex) values  
    ('$st_code','$st_firstname','$st_lastname','$st_age','$st_sex')");

    include_once('index.php');
?>