<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "DodoPizza");
	$insert = "INSERT INTO basket (id, name, price, img)
	VALUES ('','{$_GET["name"]}', '{$_GET["price"]}', '{$_GET["img"]}')";
	$query = mysqli_query($connect, $insert);
	header("location:index.php");
?>