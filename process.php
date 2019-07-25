<?php
    include("connection.php");
    session_start();
    if(isset($_POST['login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $query=mysqli_query($connection,"SELECT * from users where username='$username' && password='$password'");
        $row=mysqli_fetch_array($query);
  
        if ($row[0]== $username && $row[1]==$password){
          $_SESSION['id']=$row['username'];
          echo "<meta http-equiv='refresh' content='0; url=home.php'>";    
        }

        else{
          echo " <script>window.alert('Invalid Username or Password');
          window.location.href='login.php';</script>";
     
        }

        
      }
  ?>