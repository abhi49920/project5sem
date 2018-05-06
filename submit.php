<?php
	$name=$_POST['name'];
	//echo $name;
	$fname=$_POST['fname'];
	//echo $fname;
	$qualification=$_POST['qualification'];
	//echo $qualification;
	$address=$_POST['address'];
	//echo $address;
	$gender=$_POST['gender'];
	//echo $gender;
	$mobile=$_POST['mobile'];
	//echo $mobile;
	$email=$_POST['email'];
	//echo $email;
	$password=$_POST['password'];
	//echo $password;
	
	mysql_connect('localhost','root','');
	mysql_select_db("project");
	$query="insert into registration2(name,fname,quallification,address,gender,mobile,email,password) values ('$name','$fname','$qualification','$address','$gender','$mobile','$email','$password')";
	mysql_query($query);
	header("location:online.html");
?>