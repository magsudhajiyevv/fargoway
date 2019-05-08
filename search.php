<<!DOCTYPE html>
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


		<div class="search-form">
			<form id="form" align="center" action="search.php" method="POST">
				<input class="search_input" type="text" name="from" placeholder="From...">
				<input class="search_input" type="text" name="where" placeholder="Where...">
				<input class="search_input" type="date" name="date" placeholder="Date...">
				<select class="register_input" name="type" style="height: 50px; border-radius: 10px;">
					<option value="package">Package</option>
					<option value="paper">Paper</option>
				</select>
				<input class="submit_button" name="search_btn" type="submit" value="Search" style="border-radius: 10px;">

			<div style="margin-top: 120px; margin-left: 10px;">
				<table id="searchResults">
					<tr>
						<a href="#"><th>Name</th></a>
						<th>Where</th>
						<th>From</th>
						<th>Date</th>
						<th>Price</th>
						<th>Type</th>
					</tr>

						<?php
							if(isset($_POST['search_btn'])){
								include_once "db_connect.php";

								$from = $_POST['from'];
								$where = $_POST['where'];
								$date = $_POST['date'];
								$type = $_POST['type'];

							if(empty($from) || empty($where) || empty($date) || empty($type)){
								header("Location: index.php?search=empty");
								exit();
							}else{
								$sql = "SELECT * FROM proc WHERE p_from = '".$from."' and p_where = '".$where."' and type= '".$type."' ";
								$querry = mysqli_query($conn, $sql);
								$num_rows = mysqli_num_rows($querry);
									while ($rows = mysqli_fetch_array($querry, MYSQLI_ASSOC)) {

										echo "<tr><td>" . $rows['p_name'] . " " . $rows['p_surname']. " </td><td>" .$rows['p_from']. "</td><td>" .$rows['p_where']. "</td><td>" .$rows['p_date']. "</td><td>" .$rows['price']. "</td><td>" .$rows['type']. "</td></tr>" ;
									}
									echo "</table>";
								}

							}else{
									echo "Error!";
								}

						?>

				
					<?php
						$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

						if(strpos($fullUrl, "search=empty") == true){
							echo "<p class='error'>You did not fill in all fields!</p>";
							}

						?>
			</div>

			</form>
		</div>
			
</body>
</html>
