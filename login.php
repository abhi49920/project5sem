<?php
	error_reporting(0);
	$msg=$_REQUEST['msg'];
	//ech0 $msg;
	if($msg==1)
	{
	echo "does not exist";
	}
?>




<html>
	<head>
		<title>login</title>
		<link href="log.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
<a href="index.html">HOME<a>
	<div id="header">
	<marquee direction="right" behavior="alternate">
	<h1>LOGIN</h1>
	</marquee>
	</div>
	<div id="outer">
	<div id="head1">


	<form action="login2.php" method="post">
	<br/><br/><br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	username<input type="email" name="email"/>
	<br/><br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	password<input type="password" name="password"/>
	<br/><br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" value="login"/>
	</div>
	</form>
	

	</div>
	</body>
</html>