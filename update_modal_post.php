<!--add post-->
<div class="modal fade" id="update_question<?php echo $row['post_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #252323;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: orange;">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel" style="color: orange;"> Update Post</h4></center>
                </div>
                <div class="modal-body" style="background-color: #484848;">
                <div class="container-fluid">
                    <?php 
                        include("connection.php");
                        $select_post = mysqli_query($connection, "SELECT * from questions where post_id = ".$row['post_id']." ") or die(mysqli_error($connection));
                        $row = mysqli_fetch_array($select_post);
                    ?>
               
                    <form role="form" method="POST" action="update_post.php<?php echo '?post_id='.$row['post_id']; ?>" enctype="multipart/form-data">
                     <div class="form-group input-group">
                     	<span class="input-group-addon">Title</span>
                     	<input type="text" name="title" class="form-control" value="<?php echo $row['title'];?>"  required=""> 	
                     </div>
                     <textarea class="form-control" name="details" rows="6" ><?php echo $row['details'];?></textarea>
                     <input type="hidden" name="post_id" value="<?php echo $row['post_id'];?>">
                </div>
                </div>
                <div class="modal-footer" style="background-color: #252323;">
                    <button type="submit" name="update_post" class="btn" style="background-color: orange; color: black;"> Update Post</button>
                    <button type="submit" name="delete_post" class="btn" style="background-color: orange; color: black;"> Delete Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



