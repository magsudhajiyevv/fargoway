<?php
	session_start();
	require_once "db_connect.php";
	if(!isset($_SESSION['loggedin'])){
		header("location: ./");
	}

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
					<li><a href="#">Profile Info</a></li>
				</ul>
			</nav>
		</div>
	</section>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet ligula mauris. Proin vel porta sem, vel elementum purus. Aenean suscipit nulla id eros fringilla, sed accumsan dui sollicitudin. Aliquam mauris ligula, ultrices a varius quis, dictum a velit. Pellentesque a pellentesque dui. Vivamus velit diam, tincidunt in blandit quis, sodales ut tortor. Praesent hendrerit sed nunc eget porta. Cras ullamcorper tincidunt leo. In maximus, turpis vitae aliquet pretium, diam metus tristique metus, sit amet bibendum mi ex eu velit. Nunc eu mattis tellus. Vivamus eget purus sed dui efficitur vestibulum sit amet quis felis. Donec vestibulum erat nec mattis tempus. Maecenas a blandit risus. Sed vitae enim ullamcorper, finibus nisi et, sollicitudin lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam eu laoreet lectus.

Sed sit amet sem eleifend lectus mattis placerat. Fusce maximus consequat lectus, ut tincidunt lacus tincidunt eget. Praesent viverra et metus id hendrerit. Nam vehicula ut augue eu gravida. Etiam ullamcorper risus vitae augue porttitor, vel rhoncus nunc consequat. Nam laoreet nulla nec ultricies viverra. Suspendisse posuere neque sed enim vestibulum volutpat. Vestibulum bibendum laoreet enim a dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ipsum magna, pellentesque in purus maximus, feugiat lacinia mi. Sed quam diam, rhoncus ut elit ac, consequat ultricies purus.

Nam vitae odio arcu. Donec facilisis dolor et odio commodo consequat consectetur a libero. Mauris sed nunc eu nulla congue viverra ac quis turpis. Vivamus at diam in sem scelerisque egestas in in urna. Sed nec nunc scelerisque, elementum felis vel, tempor enim. Aenean libero justo, vestibulum eu fermentum at, sollicitudin id lorem. Aliquam vel nisl interdum augue iaculis blandit sit amet vitae magna. Nunc sit amet faucibus ipsum. Nulla id lectus ac libero aliquet tincidunt ac id nunc. Fusce condimentum elit lectus, sit amet fermentum metus maximus at. Aliquam et consequat nisi, et dapibus est.</p>

	<footer id="footer">
		<p>FarGoWay, Copyright &copy; 2019 </p>
	</footer>


</div>
</body>
</html>