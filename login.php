<?php
	//LOGIN.PHP
	//echo $_POST["email"];
	$email_error = "";
	$password_error = "";
	$name_error = "";
	
	//kontrollin et input nuppu vajutati
	if($_SERVER["REQUEST_METHOD"]== "POST") {
		//echo "Keegi vajutas nupppu";
		
		if(empty($_POST["email"])) {
			$email_error = "See v�li on kohustuslik";
		}
		//Kontrollin, et parool ei ole t�hi
		if(empty($_POST["password"])) {
			$password_error = "See v�li on kohustuslik";
		}	else {
			//kui siia j�udnud siis pole t�hi
			//Kontrollin parooli pikkust
			if(strlen($_POST["password"]) <8) {
				$password_error = "Peab olema v�hemalt 8 t�hem�rki pikk!";
			}
		}
	}
	
	//Kontrollin, et input nuppu vajutati
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		//echo "keegi vajutas nuppu";
		
		if (empty($_POST["firstname"]))
				$name_error = "See v�li on kohustuslik";
			
	}
?>

<html>
<head>
	<title>Login page></title>
</head>
<body>
	<h2>Log in</h2>
	<form action="login.php" method="post" >
		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
		<input type ="submit" value="Logi sisse">
	</form>
	<h2>Create user</h2>
	<form action="createuser.php" method="post" >
		<input name="firstname" type="name" placeholder="Eesnimi"> <?php echo $name_error; ?> <br><br>
		<input name="surname" type="name" placeholder="Perekonnanimi"> <?php echo $name_error; ?> <br> <br>
	</form>	
</body>
</html>