<?php
	session_start();
	if(isset($_POST['proc_btn'])){

	include_once "db_connect.php";
 
	$from = $_POST['from'];
	$where = $_POST['where'];
	$date = $_POST['date'];
	$price = $_POST['price'];
	$info = $_POST['info'];
	$type = $_POST['type'];
	$name = $_SESSION['name'];
	$surname = $_SESSION['surname'];

	if(empty($from) || empty($where) || empty($date) || empty($price) || empty($info)){
		header("Location: profile.php?proc=empty");
		exit();
	}else{
		$sql = "INSERT INTO proc (p_name, p_surname, p_from, p_where, p_date, price, info, type) VALUES ('$name', '$surname', '$from', '$where', '$date', '$price', '$info', '$type')";
		mysqli_query($conn, $sql);
					echo "<script type='text/javascript'>";
					echo "alert('Succesfull post');";
					echo "</script>";
		require "profile.php";
	}

}else{
	header("index.php?register=error");
}



