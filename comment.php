<?php
	
$comments = "\"" . $_POST['comments'] . "\"";
$name = "\"" . $_POST['user'] . "\"";

shell_exec("bash addcomments.sh " . $comments . " " . $name);

header("Location: thanksforcomments.php")

?>