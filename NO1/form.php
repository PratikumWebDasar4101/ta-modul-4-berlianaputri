<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		Genre Film yang disukai : <br>
		<input type="hidden" name="password" value="<?php echo $_POST['password'] ?>">
		<input type="hidden" name="username" value="<?php echo $_POST['username'] ?>">
		<input type="checkbox" name="Film[]" value="Horror">Horror<br>
		<input type="checkbox" name="Film[]" value="Action">Action<br>
		<input type="checkbox" name="Film[]" value="Anime">Anime<br>
		<input type="checkbox" name="Film[]" value="Thriller">Thriller<br>
		<input type="checkbox" name="Film[]" value="Romance">Romance<br>
		<br>
		Tempat wisata tujuan travelling : <br>
		<input type="checkbox" name="Travelling[]" value="Lawang Sewu">Lawang Sewu<br>
		<input type="checkbox" name="Travelling[]" value="Bali">Bali<br>
		<input type="checkbox" name="Travelling[]" value="Raja Ampat">Raja Ampat<br>
		<input type="checkbox" name="Travelling[]" value="Lombok">Lombok<br>
		<input type="submit" name="submit" value="Submit"> <input type="submit" name="logout" value="Logout">
	</form>
	
</body>
<?php
	
	if(!empty($_POST['logout'])){
		header("Location: login.php");
	}
	
	$data = array("Username" => "", "Password" => "");
	
	if(!empty($_POST['username']) && !empty($_POST['password'])){
		$data = array("Username" => $_POST['username'], "Password" => $_POST['password']);
	}
	
	echo "<br> User : ".$data['Username']."<br>";
	
	$value = array("Fi" => "", "Tr" => "");
	
	if(!empty($_POST['Film']) && !empty($_POST['Travelling'])){
		$value = array("Fi" => $_POST['Film'], "Tr" => $_POST['Travelling']);
	
		echo "<br>Genre film Fav <br>";
		foreach($value['Fi'] as $Fi){
			echo "- ".$Fi."<br>";
		}
		
		echo "<br>Tempat Travelling Fav <br>";
		foreach($value['Tr'] as $Tr){
			echo "- ".$Tr."<br>";
		}
	
	}else{
		echo "";
	}
	
	
	
?>


</html>
