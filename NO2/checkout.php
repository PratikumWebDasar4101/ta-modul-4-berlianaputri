<?php

session_start();
$total = 0;
$kurur = 0;

function hitung($b, $k){

	$c = $b + $k;

	return $c;
}

function hitung_barang($a){

if ($a == "Sayuran") {
	$GLOBALS['total'] = $GLOBALS['total'] + 5000;
}

if ($a == "Bumbu") {
	$GLOBALS['total'] = $GLOBALS['total'] + 3000;
}

if ($a == "Facial Wash") {
	$GLOBALS['total'] = $GLOBALS['total'] + 15000;
}

if ($a == "Shampoo") {
	$GLOBALS['total'] = $GLOBALS['total'] + 10000;
}

if ($a == "Pasta Gigi") {
	$GLOBALS['total'] = $GLOBALS['total'] + 7000;
}

if ($a == "Snack") {
	$GLOBALS['total'] = $GLOBALS['total'] + 3000;
}

return $GLOBALS['total'];

}

$belanja = array("br" => $_POST['belanja']);

echo "<b>Hello ".$_SESSION['user']."</b><br><br>";
echo "Belanjaan anda : <br>";
foreach ($belanja['br'] as $aj) {
	echo "1x ".$aj."<br>";
	hitung_barang($aj);
}

if ($_POST['kurir'] == "JNE") {
	$kurur = $kurur + 10000;
}

if ($_POST['kurir'] == "TIKI") {
	$kurur = $kurur + 11000;
}

if ($_POST['kurir'] == "Go - Send") {
	$kurur = $kurur + 20000;
}

echo "<br>Kurir : ".$_POST['kurir']."<br>";
echo "<br>Total  : ".hitung($total, $kurur);

?>