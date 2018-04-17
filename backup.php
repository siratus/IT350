<?php

exec("python /var/www/backitup.py");
header ("Location: backuppage.php");

?>
