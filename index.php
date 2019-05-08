<?php
	session_start();
	echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>FarGoWay</title>
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="Magsud HAJIYEV">
	<link rel="stylesheet" href="style.css">
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
					<li><a href="profile.php">Profile</a></li>
					<?php
						if(empty($_SESSION['loggedin'])){

							echo "<li><a href='login.php'>Login</a></li>";

						}else{

							echo "<li><a href='logout.php>Logout</a></li>";

						}
					?>
					

				</ul>
			</nav>
		</div>
	</header>

	<section id="showcase">
		<div class="container">
			<h1>From Point A to B, Fastest Way</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nulla magna, facilisis ac lectus vel, convallis egestas nibh. Pellentesque fermentum sapien eget ipsum ornare posuere. Pellentesque urna mi, pharetra et tellus eget, imperdiet semper risus. Suspendisse posuere nisi at dui fringilla, a eleifend dolor eleifend. Donec ac maximus odio. Integer viverra aliquam lorem, at mattis lorem vehicula vitae. Phasellus vitae volutpat tellus. Nunc sit amet nisi eros. Aliquam posuere facilisis metus at rutrum. Donec ut mi feugiat, faucibus mauris in, ultrices lorem.</p>
		</div>
	</section>

	<section id="searchForm">
		<div class="container">
			<h1>Search</h1>
			<h3>See Proc</h3>
			<form id="form" align="center" action="search.php" method="POST">
				<input class="search_input" type="text" name="from" placeholder="From...">
				<input class="search_input" type="text" name="where" placeholder="Where...">
				<input class="search_input" type="date" name="date" placeholder="Date...">
				<select id="select" name="type">
					<option value="package">Package</option>
					<option value="paper">Paper</option>
				</select>
				<input class="submit_button" name="search_btn" type="submit" value="Search">
			</form>
		</div>
	</section>

	<div class="push">
		
	</div>


	<footer id="footer">
		<p>FarGoWay, Copyright &copy; 2019 </p>
	</footer>

</div>
</body>
</html>



































