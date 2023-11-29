<?php
//Code that will give access to database data

session_start();

if(empty($_POST) or empty($_POST['usr_email']) or empty($_POST['usr_psw']))://verify if the user don't made Hacks to acess any data
	header('location: index.php');

else:
	include("config.php");//Database Conection
	$usrEmail = $_POST['usr_email'];
	$usrPassword = $_POST['usr_psw'];

	$sql = "SELECT * FROM user WHERE login_usr = '{$usrEmail}' AND password_usr = '{$usrPassword}'";

	$query = $link->query($sql) or die($link->error);

	$row = $query->fetch_object(); //Fetch and Transform the next row of a result set as an object

	$num_rows = $query->num_rows;//Getting the number of rows(records) in the result set(query)


	if($num_rows > 0){
		$_SESSION['login_usr'] = $usrEmail;
		$_SESSION['name_usr'] = $row->name_usr;
		$_SESSION['type_usr'] = $row->type_usr;
		
		//Redirecting to Restrict Page(with JS)
		print" <script>location.href='dashboard.php';</script>";

	}
	
	else{
		
		print" <script>alert('Verify Your Email and Password');</script>";
		print" <script>location.href='index.php';</script>";
	}

endif;