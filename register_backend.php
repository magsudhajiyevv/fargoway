<?php
if(isset($_POST['register_btn'])){

	include_once "db_connect.php";
 
	$name = $_POST['username'];
	$surname = $_POST['usersurname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$rpassword = $_POST['password_check'];

	if(empty($name) || empty($surname) || empty($email) || empty($password) || empty($rpassword)){
		header("Location: register.php?register=empty");
		exit();
	}else{
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location: register.php?register=invalidiemail");
			exit();
		}else{
			//epassword check
		if($password != $rpassword){
			header("Location: register.php?register=password");
			}else{
				$sql_u = "SELECT * FROM users WHERE email='".$email."'";
				$query = mysqli_query($conn, $sql_u);
				if(!mysqli_fetch_assoc($query)){
					$sql = "INSERT INTO users (username, usersurname, email, password) VALUES ('$name', '$surname', '$email', '$password')";
					mysqli_query($conn, $sql);
					echo "<script type='text/javascript'>";
					echo "alert('Succesfull registeration, please sign in now!');";
					echo "</script>";
					require "login.php";
				}else{
					header("Location: register.php?register=takenemail");
				}
			}
		}
	}

}else{
	header("index.php?register=error");
}

