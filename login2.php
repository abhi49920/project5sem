<?php
session_start();
	$username=$_POST['email'];
	//echo $username;
	$password=$_POST['password'];
	//echo $password;
	

	mysql_connect('localhost','root','');
	mysql_select_db("project");
	
	$query="select * from registration2 where email='$username' and password='$password'";
	$res=mysql_query($query);
	
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		$_SESSION['user']=$username;
                
		header("location:user_profile.php");
	}
	else
		{
			header("location:login.php?msg=1");
		
		}

?>