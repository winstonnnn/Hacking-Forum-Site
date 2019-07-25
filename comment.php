<?php include("header.php");?>
<?php include("session.php");?>
<div class="col-md-7" id="center_content">

	<?php
		include ("connection.php");
		$post_id = $_GET['id'];
	
		$select = mysqli_query($connection, "SELECT * from questions inner join users on users.username = questions.username where post_id = '$post_id'") or die(mysqli_error($connection));
		$row = mysqli_fetch_array($select) or die(mysqli_error($connection))
	?>
	<div class="col-sm-12" id="post_container" style="margin-top:85px;">
		<div class="col-md-11" id="post_question">
			<div class="col-sm-12" id="post_titles">
				<span><?php echo $row['title'];?></span>
			</div>
			<div class="col-sm-12" id="post_statuss">
				<p><?php echo $row['details'];?></p>
			</div>
			<div class="col-sm-12" id="post_comment">
				<div class="col-sm-7" id="likes">
						<span>250</span><a> Like</a> <span>300</span><a> Dislike</a>
				</div>
				<div class="col-sm-5" id="name"><span><b>Posted By:</b> <?php echo $row['firstname']; echo " "; echo $row['lastname'];?>  </span><span>on <?php echo $row['date'];?></span>
				</div>
			</div>
		</div>
		
	</div>
	<?php
		$post_id = $_GET['id'];
		$select = mysqli_query($connection, "SELECT * from comment inner join users on users.username = comment.username where post_id = $post_id") or die(mysqli_error($connection));

	 ?>	



	<div class="col-sm-12" id="comment_div">
	<form action="" method="post">
		<div id="input">
			<input type="text" id="input_comment" name="comment" placeholder="Comment here..." required="">
			<input type="submit" class="btn btn_comment" name="comment_button" value="Comment">
		</div>
	</form>
		<?php
			while($row=mysqli_fetch_array($select)){
		?>
		<div id="comments">
			<span><?php echo $row['firstname']; echo " "; echo $row['lastname']; ?></span>
			<p><?php echo $row['comments'];?></p>
			<a href="">Like</a>&nbsp;&nbsp;<a href="">Dislike</a>&nbsp;&nbsp;<a href=""> Reply</a>&nbsp;&nbsp;&nbsp;&nbsp;<span id="comment_date"><?php echo $row['date'];?></span>
		</div>
		<?php } ?>
	</div>
</div>
<?php include("logout.php");?>
<?php
	$select = mysqli_query($connection, "SELECT * from comment") or die(mysqli_error($connection));
	$rows = mysqli_num_rows($select);

	if (isset($_POST['comment_button'])) {
		$comment_id = $rows+1;
		$comment=$_POST['comment'];
		$date = date("y/m/d");
		$post_id = $_GET['id'];

	$insert = mysqli_query($connection, "INSERT into comment(comment_id, comments, date, username, post_id) values('$comment_id', '$comment', '$date', '$username', '$post_id')") or die(mysqli_error($connection));
		if($insert){
			$select = mysqli_query($connection, "SELECT * from comment");
			while($row=mysqli_fetch_array($select)){
				$output = $row['4'];
			}
			$post_id = $output;
			echo "<meta http-equiv='refresh' content='0; url=comment.php?id=".$post_id."'>";   

		}

	}
		
?>