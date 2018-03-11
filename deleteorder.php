
<?php
	include ("settings.php");
	$sql = "DELETE FROM orders WHERE orderID = ?";
	$id = mysqli_real_escape_string($db, $_POST['orderID']);

	$stmt = mysqli_stmt_init($db);
	if(!mysqli_stmt_prepare($stmt, $sql))
	{
		echo "SQL failed";
	}
	else
	{
		//echo "SUCCESS";
		mysqli_stmt_bind_param($stmt, "i", $id);
		mysqli_stmt_execute($stmt);
	}
	header("Location:adminorders.php");
?>
