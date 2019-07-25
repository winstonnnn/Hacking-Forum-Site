<?php
	session_start();
	include("connection.php");
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header('location:home.php');
    exit();
	}
	
	include('connection.php');

	$sq=mysqli_query($connection,"select * from users where username='".$_SESSION['id']."'");
	$srow=mysqli_fetch_array($sq);
	
	$username=$srow['username'];
	$firstname=$srow['firstname'];
	$lastname=$srow['lastname'];
?>