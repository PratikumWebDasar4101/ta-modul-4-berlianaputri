<?php

session_start();

if (!empty($_POST['user']) && !empty($_POST['pass'])){
	$_SESSION['logged-in'] = "True";
	$_SESSION['user'] = $_POST['user'];
	header("Location: utama.php");
}else{
	header("Location: login.html");
}

?>