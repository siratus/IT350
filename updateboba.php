<?php
	include ("settings.php");

	// $sql="UPDATE ports SET flavor='".$_POST['flavor']."', size='".$_POST['size']."' tapioca='".$_POST['tapioca']."', price='".$_POST['price']."', WHERE bobaID='".$_POST['bobaID']."'";

	// 	$result=mysqli_query($sql)or 
	// 	die ("this stuffedup");



	$sql = "UPDATE boba SET flavor=?, size=?, tapioca=?, price=? WHERE bobaID=?";
	
	$flavor = mysqli_real_escape_string($db, $_POST['flavor']);
	$size = mysqli_real_escape_string($db, $_POST['size']);
	$tapioca = mysqli_real_escape_string($db, $_POST['tapioca']);
	$price = mysqli_real_escape_string($db, $_POST['price']);
	
	$stmt = mysqli_stmt_init($db);
	if(!mysqli_stmt_prepare($stmt, $sql))
	{
		echo "SQL failed";
	}
	else
	{
		//echo "SUCCESS";
		mysqli_stmt_bind_param($stmt, "ssss", $flavor, $size, $tapioca, $price);
		mysqli_stmt_execute($stmt);
	}
	header("Location:adminbobas.php");
?>