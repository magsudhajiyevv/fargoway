<?php
	session_start();
?>
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

		<section id="login_form">
			<div calss="container">
				<form align="center" method="POST" action="login_backend.php">
			  		<span id="formTitle">E-mail</span><br>
			  		<input class="login_input" type="text" name="email" placeholder="E-mail"><br><br>
			 		 <span id="formTitle">Password</span><br>
			  		<input class="login_input"  type="password" name="password" placeholder="password"><br><br>
			  		 <input type="submit" class="login_button" value="Submit" name="submit_btn">
			  		 <a href="register.php"><button type="button" class="register_button">Register</button></a>
				</form>
				
				<!-- Error Messages -->
				<?php
				$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

					if(strpos($fullUrl, "login=empty") == true){
						echo "<p class='error'>You did not fill in all fields!</p>";
					}elseif(strpos($fullUrl, "login=false") == true){
						echo "<p class='error'>Incorrect username or password!</p>";
					}

				?>

			</div>
		</section>

	<footer id="footer">
		<p>FarGoWay, Copyright &copy; 2019 </p>
	</footer>

</body>
</html>