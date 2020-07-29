<?php

	$lol="";
	$lol1="";
	$lol2="";
	$lol3="";
	$lol4="";
	$lol5="";
	$lol6="";
	$lol7="";
	$lol8="";
	if (empty($_POST["name"])) 
	{
		$lol1="name_empty";
		$lol="invalid";
	} 
	$namee =  $_POST['name'];
	if (!preg_match("/^[a-zA-Z ]*$/",$namee)) 
	{
		$lol2="name_notchar";
		$lol="invalid";
	}
	
	if (empty($_POST["email"])) {
		$lol3="email_empty";
		$lol="invalid";
	} 

	$emaill = $_POST['email'];
	if (!filter_var($emaill, FILTER_VALIDATE_EMAIL)) 
	{
		$lol4="email_invalid";
		$lol="invalid";
	}

	if (empty($_POST["phone"])) 
		{
			$lol5="phone_empty";
			$lol="invalid";
		} 
		
	if ((strlen($_POST["phone"]))!="10") 
		{
			$lol8="phone_10";
			$lol="invalid";
		} 
	

	if (empty($_POST["message"])) 
		{
			$lol6="message_empty";
			$lol="invalid";
		} 

	if($lol=="")
		{
			$name=$_POST["name"];
			$phone=$_POST["phone"];
			$email=$_POST["email"];
			$message=$_POST["message"];
			require_once("dbconstant.php");
			$mysqli = new mysqli(address, user, pass, db);
			$sql = "insert into contact_us(name, email, phone, message) 
			VALUES ('$name','$email','$phone','$message')";
			if ($mysqli->query($sql))
			{	
				$lol="success";
				echo $lol.$lol1.$lol2.$lol3.$lol4.$lol5.$lol6.$lol7.$lol8;
			}
			else
			{
				$lol="not";
				echo $lol.$lol1.$lol2.$lol3.$lol4.$lol5.$lol6.$lol7.$lol8;
			}
			mysqli_close($mysqli);
		}
		
	if($lol=="invalid")
		{
			echo $lol.$lol1.$lol2.$lol3.$lol4.$lol5.$lol6.$lol7.$lol8;
		}
?>