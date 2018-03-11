<!-- Logout page is having information about how to logout from login session. -->

<?php
	include("login.php");
	session_start();
	$logout = $_SESSION['login_user'];
	$log = "UPDATE person SET loggedIn = 0 WHERE email = '$myusername'";
	
    mysqli_query($db, $log);

	session_destroy();

	header("Location: login.php");
?>