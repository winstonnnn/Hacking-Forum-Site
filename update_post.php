<?php
    include("connection.php");
    if(isset($_POST['update_post'])){
        $post_id = $_GET['post_id'];
        $title = $_POST['title'];
        $details = $_POST['details'];

        $update = mysqli_query($connection, "UPDATE questions set title = '$title', details = '$details' where post_id = '$post_id' ") or die(mysqli_error($connection));
            if($update){
                echo "<meta http-equiv='refresh' content='0; url=forum.php'>";
            }
        }
?>
<?php
    include("connection.php");
    if(isset($_POST['delete_post'])){
        $post_id = $_GET['post_id'];

        $delete = mysqli_query($connection, "DELETE from questions where post_id = '$post_id' ") or die(mysqli_error($connection));
        if($delete){
            echo "<script>window.alert('Successfully Deleted')</script>;";
            echo "<meta http-equiv='refresh' content='0;url=forum.php'>";
        }
    }
    

?>