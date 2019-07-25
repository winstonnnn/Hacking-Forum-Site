<?php include("header.php");?>
<?php include("session.php");?>

<?php
	include("connection.php");
	if(isset($_GET['search_btn'])){
		$search = $_GET['search'];

		$select = mysqli_query($connection, "SELECT * from questions inner join users on users.username = questions.username where title like '%$search%' order by post_id desc") or die(mysqli_error($connection));
	}

	else{
		$select = mysqli_query($connection, "SELECT * from questions inner join users on users.username = questions.username order by post_id desc") or die(mysqli_error($connection));
	}
?>

<div class="col-md-7" id="center_content">
	<div class=" col-sm-3" id="ask_container">
		<div id="numbers">
			<?php
			$rowss = mysqli_num_rows($select);
				echo "<span>$rowss</span><a> questions</a>"
			?>
		</div>
	</div>

	<div class="col-md-12" id="status_output">
		<span>ALL QUESTIONS</span>
		<div id="button_div"><button class="search_button" data-toggle="modal" data-target="#ask_question"> Ask Question</button></div>
		<div id="search_container">
			<form action="forum.php" method="get">
				<input type="text" name="search" id="search_text" placeholder="Search topic">
				<input type="submit" class=" search_button" name="search_btn" value="Search">
			</form>
		</div>

	</div>
	
	<?php
		include ("connection.php");
		while($row=mysqli_fetch_array($select)){
			$select1 = mysqli_query($connection, "SELECT * from post_like where post_id = '$row[0]'") or die(mysqli_error($connection));
			$rows = mysqli_num_rows($select1);

	?>
	<div class="col-sm-12" id="post_container">
		<div class="col-md-1" id="like_dislike">
			<div class="col-sm-12" id="like" >
				<span><?php echo $rows['num_like'];?></span><p>&nbsp; <i class="fa fa-thumbs-up"></i></p>
			</div>
			<div class="col-md-12" id="like">
				<span><?php echo $rows['num_dislike'];?></span><p>&nbsp; <i class="fa fa-thumbs-down"></i></p>
			</div>
		</div>
		<div class="col-md-11" id="post_question">
			<div class="col-sm-12" id="post_title">
				<span><?php echo $row['title'];?></span>
			</div>
			<div class="col-sm-12" id="post_status">
				<p><?php echo $row['details'];?></p>
			</div>
			<div class="col-sm-12" id="post_comment">
				<div class="col-sm-6"><span><b>Posted By:</b> <?php echo $row['firstname']; echo " "; echo $row['lastname'];?>  </span><span>on <?php echo $row['date'];?></span></div>
				<div class="col-sm-4" id="comment">
					<?php echo "<a href=like.php?id=".$row ['post_id'].">Like</a> "; ?> &nbsp;&nbsp; <?php echo "<a href=dislike.php?id=".$row ['post_id'].">Dislike</a> "; ?>&nbsp;&nbsp; <?php echo "<a href=comment.php?id=".$row ['post_id'].">Comment</a> "; ?>&nbsp;&nbsp;<?php 
					if($row['username'] == $username){	?>
						<a style="cursor: pointer;" data-toggle="modal" data-target="#update_question<?php echo $row['post_id'];?>">Edit</a>
						
					<?php } ?> 
					<?php include ('update_modal_post.php');?>
				</div>
			</div>
			
		</div>
	</div>
	<?php } ?>
</div>
<!--add post-->
<div class="modal fade" id="ask_question" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #252323;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: orange;">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel" style="color: orange;"> Post a Question</h4></center>
                </div>
                <div class="modal-body" style="background-color: #484848;">
                <div class="container-fluid">

               
                    <form role="form" method="POST" action="" enctype="multipart/form-data">
                     <div class="form-group input-group">
                     	<span class="input-group-addon">Title</span>
                     	<input type="text" name="title" class="form-control" placeholder="Whats your hacking question? Be spicific" required=""> 	
                     </div>
                     <textarea class="form-control" name="details" rows="6" placeholder="Provide details about your question..."></textarea>
                </div>
                </div>
                <div class="modal-footer" style="background-color: #252323;">
                    <button type="submit" name="add_post" class="btn" style="background-color: orange; color: black;"> Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include("logout.php");?>
<?php include('script.php'); ?>

<?php
	$select = mysqli_query($connection, "SELECT * from questions") or die(mysqli_error($connection));
	$rows = mysqli_num_rows($select);
	if(isset($_POST['add_post'])){
		$post_id = $rows + 1;
		$title = $_POST['title'];
		$details = $_POST['details'];
		$date = date("y/m/d");

		$insert = mysqli_query($connection, "INSERT into questions(title, details, date, username) values('$title', '$details', '$date', '$username')") or die(mysqli_error($connection));
			if($insert){
				echo "<meta http-equiv='refresh' content='0'; url=forum.php >";
			}
	}
?>