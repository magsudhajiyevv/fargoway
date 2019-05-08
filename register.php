<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		<div class="container">
			<div id="branding">
				<h1><i class="logo"></i><span id="highlight">Far</span>GoWay</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="index.php">Home Page</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">About</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section id="register_form">
		<div class="container">
			<form align="center" method="POST" action="register_backend.php" autocomplete="off">
				<span id="formTitle">Name</span><br>
		  		<input class="register_input" type="text" name="username" placeholder="Jack"><br><br>
		  		<span id="formTitle">Surname</span><br>
		  		<input class="register_input" type="text" name="usersurname" placeholder="Wilson"><br><br>
		  		<span id="formTitle">E-mail</span><br>
		  		<input class="register_input" type="email" name="email" placeholder="jackwilson@gmail.com"><br><br>
		 		 <span id="formTitle">Password</span><br>
		  		<input class="register_input"  type="password" name="password" placeholder="password"><br><br>
		  		<span id="formTitle">Repeat password</span><br>
		  		<input class="register_input"  type="password" name="password_check" placeholder="password"><br><br>
		  		 <input type="submit" class="register_button_1" name="register_btn" value="Register">
			</form>

			<!-- Error Messages -->
			<?php
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

				if(strpos($fullUrl, "register=empty") == true){
					echo "<p class='error'>You did not fill in all fields!</p>";
				}elseif(strpos($fullUrl, "register=takenemail") == true){
					echo "<p class='error'>This email is already in use!</p>";
				}elseif(strpos($fullUrl, "register=password") == true){
					echo "<p class='error'>Your passwrods doesn't match!</p>";
				}

			?>
		</div>
	</section>

	<footer id="footer">
		<p>FarGoWay, Copyright &copy; 2019 </p>
	</footer>


</body>
</html>