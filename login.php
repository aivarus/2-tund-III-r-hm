<?php

		// LOGIN.PHP
		//echo $_POST["email"];
		
		
		
		// Kontrollime et keegi vajutas input nuppu
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			
			//echo "keegi vajutas nuppu";
			
			//kontrollin et e-post ei ole tühi
			$email_error = "";
			if ( empty($_POST["email"] ) ) {	
				$email_error = "see väli on kohustuslik";
			}
				
		//kontrollin et parool ei ole tühi
		
			
		
		
?>
<html>
<head>
		<title>login page</title>
</head>
<body>
		
		<h2>log in</h2>
			
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="e-post"> <?php  echo $email_error; ?> <br><br>
			<input name="password" type="password" placeholder="parool">  <br><br>
			<input type="submit" value="log in">
		</form>
		
			
			
		<h2>Create user</h2>
</body>
</html>