<?php
	include ("settings.php");

	// $sql = "UPDATE boba SET flavor = ?, size = ?, tapioca = ?, price = ? WHERE bobaID = ?";

	$id = mysqli_real_escape_string($db, $_POST['bobaID']);
	$flavor = mysqli_real_escape_string($db, $_POST['flavor']);
	$size = mysqli_real_escape_string($db, $_POST['size']);
	$tapioca = mysqli_real_escape_string($db, $_POST['tapioca']);
	$price = mysqli_real_escape_string($db, $_POST['price']);
	
	
	// $stmt = mysqli_stmt_init($db);
	// if(!mysqli_stmt_prepare($stmt, $sql))
	// {
	// 	echo "SQL failed";
	// }
	// else
	// {
	// 	//echo "SUCCESS";
	// 	mysqli_stmt_bind_param($stmt, "isssd", $id, $flavor, $size, $tapioca, $price);
	// 	mysqli_stmt_execute($stmt);
	// }

	$stmt = $db->prepare("UPDATE boba SET flavor = ?, size = ?, tapioca = ?, price = ? WHERE bobaID = ?");
	$stmt->bind_param("sssdi", $flavor,$size,$tapioca,$price, $id);
	//the bind param needs to match the sql ORDER!!!!!
	$stmt->execute();
	$stmt->close();

	header("Location:adminbobas.php");
?>