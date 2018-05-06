<?php
session_start();
//echo $_SESSION['user'];

if($_SESSION['user']=="")
{
session_destroy();
header("location:login.php");
}


?>

<html>
	<head>
		<title>user profile</title>
		<link href="user.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div id="header">
		<center>
		<h1>USER PROFILE</h1>
		</center>
		</div>
		<div id="outer">
		<div id="head">
		<div id="head1">
		<marquee direction="right">
		<img src="pi.jpg" height="470px" width="850"/>
		</marquee>
		</div>
		<div id="head2">
		<div id="head3">
		<a href="discussion.php"><h1>Discussion Board</h1></a>
		</div>
		<div id="head4">
		<a href="view.php"><h1>View Profile</h1></a>
		</div>
		<div id="head5">
		<a href="login.php"><h1>Logout</h1></a>
		</div>
		</div>
		</div>
		<marquee direction="right">user profile</marquee>
		</div>
	</body>
</html>