<?php
	session_start();
	require_once "db_connect.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="wrapper">
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
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section id="profileNav">
		<div class="container">
			<section id="welcome">

				<?php
				if(isset($_SESSION['email'])){
				$sql = "SELECT username, usersurname FROM users WHERE email = '".$_SESSION['email']."'";
				$result = $conn -> query($sql);

				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				    	$_SESSION['name'] = $row["username"];
				    	$_SESSION['surname'] = $row["usersurname"];
				    	echo "Welcome ". $_SESSION['name']." ". $_SESSION['surname']."";
				    }
				} else {
					echo "You have to <a href='login.php'> log in </a>";
				}

				}
					?>
		</section>
			<nav>
				<ul>
					<li><a href="postproc.php">Post Proc</a></li>
					<li><a href="#">Edit</a></li>
					<li><a href="profile.php">Profile Info</a></li>
				</ul>
			</nav>
		</div>
	</section>


			<section id="profile">
				<div class="container">
					<h3 align="center">Post Proc.</h3>
						<form align="center" method="POST" action="proc.php">
							<span id="formTitle">From</span><br>
							<input class="register_input" type="text" name="from"><br>
							<span id="formTitle">Where</span><br>
							<input class="register_input" type="text" name="where"><br>
							<span id="formTitle">Date</span><br>
							<input id ="procDate" class="register_input" type="date" name="date"><br><br>
							<span id="formTitle">Price</span><br>
							<input class="register_input" type="number" min="0" name="price"><br>
							<span id="formTitle">Info</span><br>
							<textarea name="info" rows="2" cols="10">
							</textarea><br>
							<select class="register_input" name="type">
								<option value="package">Package</option>
								<option value="paper">Paper</option>
							</select>
							<input id="profile_submit" type="submit" name="proc_btn">
						</form>
				</div>
			</section>

			<?php
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

			if(strpos($fullUrl, "proc=empty") == true){
				echo "<p class='error'>You did not fill in all fields!</p>";
			}elseif(strpos($fullUrl, "register=takenemail") == true){
				echo "<p class='error'>This email is already in use!</p>";
			}elseif(strpos($fullUrl, "register=password") == true){
				echo "<p class='error'>Your passwrods doesn't match!</p>";
			}
			?>



	<div class="push">
		
	</div>


	<footer id="footer">
		<p>FarGoWay, Copyright &copy; 2019 </p>
	</footer>

</div>
</body>
</html>