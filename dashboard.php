<?php  
	session_start();

	if(empty($_SESSION) or empty($_SESSION['login_usr']) or empty($_SESSION['name_usr'])): //User must have permission to the Restrict Page
		header("location: index.php");
	else:
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página Restrita</title>
</head>
<body>

	<h1>Seja Bem Vindo <?php echo "<em>" .$_SESSION['name_usr'] ."!</em>"; ?></h1>
	<p>Se acessou esta página é porque tem autorização para estar aqui!</p>
	<p>Se deseja <strong>sair clique <a href="logout.php">aqui</a></strong></p>

</body>
</html>

<?php  endif;?>