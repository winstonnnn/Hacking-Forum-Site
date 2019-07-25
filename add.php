<?php
include ("connection.php");
$select = mysqli_query($connection, "SELECT * from comment");
			while($row=mysqli_fetch_array($select)){
				$output = $row['4'];
			}
			$post_id = $output;
echo "<meta http-equiv='refresh' content='0; url=comment.php?id=".$post_id."'>";
?>