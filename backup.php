<?php

exec("python /var/www/html/backitup.py");
header ("Location: backuppage.php");

?>
