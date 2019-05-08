<?php
session_start();
require_once "db_connect.php";

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE email = '".$email."' and password = '".$password."'";
$query = mysqli_query($conn, $sql);

if(mysqli_fetch_assoc($query)){
	$_SESSION['loggedin'] = true;
	$_SESSION['email'] = $email;
	header("location:profile.php");
		}elseif(empty($email) || empty($password)){
			header("Location: login.php?login=empty");
			exit();
				}else{
					header("Location: login.php?login=false");
				}

