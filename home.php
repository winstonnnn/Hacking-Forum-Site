<?php include("session.php");?>
<html>
<head>
	<title>Hacking Site</title>
	<script src="script/jquery-1.10.2.min.js"></script>
	<script src="script/menu.js"></script>
	<link href="script/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>

	<div class="col-sm-12 nav" >
	<div id="title"><a>ANONYMOUS <span><i>HACK SITE</i></span></a></div>
		<div id="modules">
			<ul>
				<li style="width: 90px;" class="active"><a href="#"> HOME</a></li>
                <li style="width: 100px;" class="active"><a href="#"> VIDEOS</a></li>
				<li style="width: 100px;" class="active"><a href="forum.php"> FORUMS</a></li>
                <li style="width: 80px;" class="active"><a href="#"> ABOUT US</a></li>
                <li style="width: 80px;" class="active"><a href="#logout" data-toggle="modal"> LOGOUT</a></li>
			</ul>
		</div>
	</div>
	<div class="col-sm-12 con">
		<div class="col-md-6">
			<img src="images/contain1.png">
		</div>
	
		<div class="col-md-6 sec">
			<center><img src="images/logo1.png"></center>
			<center><h1><i>WE ARE ANONYMOUS<br> WE ARE LEGION <br> WE DO NOT FORGIVE <br> WE DO NOT FORGET</i></h1></center>
		</div>
	
	</div>
	<div class="col-sm-12 icons">
		<div class="col-md-4">
			<center><img src="images/icon1.png"><br></center>
			<center><span>"Stuck in a generation where loyalty is just a tattoo, love is just a qoute and lying is the new truth."</span></center>
		</div>
		<div class="col-md-4">
			<center><img src="images/icon2.png"><br></center>
			<center><span>"One of the greatest challenge in life is being yourself in a world thats trying to make you like everyone else"</span></center>
		</div>
		<div class="col-md-4">
			<center><img src="images/icon3.png"><br></center>
			<center><span>"go to work, get married. have some kids, pay your taxes. pay your bills, watch your TV. OBEY THE LAW and repeat after me. I AM FREE"</span></center>
		</div>
	</div>

<?php include("logout.php");?>
<?php include('script.php'); ?>
</body>
</html>