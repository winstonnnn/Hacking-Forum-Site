<?php
	include("connection.php");
	include("session.php");
	$post_id = $_GET['id'];
	$insert = mysqli_query($connection, "INSERT into post_like(num_like,username,post_id) Values(1, '$username','$post_id')") or die(mysqli_error($connection));
	if($insert){
	 echo " <script>window.location.href='forum.php';</script>";
	}

?>