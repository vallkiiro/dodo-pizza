<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "DodoPizza");
	$delete = "DELETE FROM basket
				WHERE id = ".$_GET["id"];
	$query = mysqli_query($connect, $delete);

	if ($_GET["id"]==0) {
		$deleteAll = "DELETE FROM basket";
		$query = mysqli_query($connect, $deleteAll);
	}
	header("location:index.php");
?>