<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="assets/normalize.css">
	<link rel="stylesheet" href="assets/style.css">

</head>
<body>
	<div class="container">

		<div class="form-container">

			<form action="login.php" method="POST">
				
				<h1>Login System</h1>

				<div class="field-container">
					<label for="usr_email">Email</label>
					<br>
					<input type="email" name="usr_email">	
				</div>
			
				<div class="field-container">
					<label for="usr_psw">Password</label>
					<br>
					<input type="password" name="usr_psw">	
				</div>
			
				<div class="field-container">
					<button id="btn-login">Login</button>
				</div>
			</form>
		</div>
	</div>

</body>
</html>