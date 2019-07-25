<?php

  session_start();
  include("connection.php");
  if (isset($_SESSION['id'])){
    $query=mysqli_query($connection,"select * from users where username='".$_SESSION['id']."'");
    $row=mysqli_fetch_array($query);
    
  }
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="css/login.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <section style="width: 100%; height: 100vh; background: url(e.jpg); background-size: cover;">
      <div class="container">
        <div class="form_content">
          <h2>What is Hacking?</h2>
          <p>Hacking is to gain computer and informations ilegally. And writing computer programs for enjoyment.
 </p>
            
        </div>
          <div class="login_form">
          <h1>Sign In</h1>
          <form action="process.php" method="post">
            <input type="text"  required="" name="username" placeholder="Enter Username">
            <input type="password"  required="" name="password" placeholder="Enter Password">
            <input type="submit" name="login" id="btn" value="Login">
          </form>
          <input type="submit" name="signup" value="Sign Up">
        </div>
        </div>
    </section>

  </body>
</html>
