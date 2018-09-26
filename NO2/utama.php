<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<h2>
		<?php session_start(); ?>
		Hello <?php echo $_SESSION['user']; ?>
	</h2>
	<div>
		<h2>
			Daftar Belanjaan
		</h2>
		<form action="checkout.php" method="post" enctype="multipart/form-data">
			<input type="checkbox" name="belanja[]" value="Sayuran">Sayuran<br>
			<input type="checkbox" name="belanja[]" value="Bumbu">Bumbu<br>
			<input type="checkbox" name="belanja[]" value="Facial Wash">Facial Wash<br>
			<input type="checkbox" name="belanja[]" value="Shampoo">Shampoo<br>
			<input type="checkbox" name="belanja[]" value="Pasta Gigi">Pasta Gigi<br>
			<input type="checkbox" name="belanja[]" value="Snack">Snack<br>

			<h2>
				Pilih kurir pengiriman
			</h2>

			<input type="radio" name="kurir" value="JNE"> JNE <input type="radio" name="kurir" value="TIKI"> TIKI <input type="radio" name="kurir" value="Go - Send"> Go - Send<br>
			<input type="submit" value="Checkout" >
		</form>
	</div>
</body>
</html>