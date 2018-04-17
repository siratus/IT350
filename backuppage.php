<!DOCTYPE html>
<html>
<head>

  <title>Jae Yu</title>
<!--   <meta charset="utf-8">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="img/favicon.ico" rel="icon" type="image/x-icon" /> -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

  <header class="container">
   <!--  <?php include('navbar.php');?>
    <br><br><br> -->
    
    <h1>Welcome Admin (title/name)</h1>

</head>
<body>
<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item"><a href="admin.php" class="w3-bar-item w3-button">Menu</h3>
  <a href="admincust.php" class="w3-bar-item w3-button">CUSTOMERS</a>
  <a href="adminorders.php" class="w3-bar-item w3-button">ORDERS</a>
  <a href="adminbobas.php" class="w3-bar-item w3-button">BOBA MENU</a>
  <a href="adminchickens.php" class="w3-bar-item w3-button">CHICKEN MENU</a>
  <a href="backuppage.php" class="w3-bar-item w3-button">MANAGE DATABASE</a>

</div>


<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-purple">
  <h1>MANAGE DATABASE</h1>
</div>





<br><br>
<h2>BACK IT UP UP UP</h2>
<form action="backup.php" method="POST">
  

    <button name="backup">BACK UP DB</button>
  

</form>
<br><br><br>
<h2>MONGO DB STATUS</h2>
<?php
    $old_path = getcwd();
    chdir('/var/www/');
    $bashit = shell_exec('./mongostat.sh');
    chdir($old_path);
  

    echo $bashit;

?>
<h2>MONGO DB LOG</h2>
<?php
    $old_path = getcwd();
    chdir('/var/www/');
    $bashit = shell_exec('./mongolog.sh');
    chdir($old_path);
  

    echo $bashit;

?>
<br><br>
<h2>MYSQL DB STATUS</h2>
<?php
    $old_path = getcwd();
    chdir('/var/www/');
    $bashit = shell_exec('./sqlstat.sh');
    chdir($old_path);
  

    echo $bashit;

?>
<h2>MYSQL DB LOG</h2>
<?php
    $old_path = getcwd();
    chdir('/var/www/');
    $bashit = shell_exec('./mysqllog.sh');
    chdir($old_path);
  

    echo $bashit;

?>
<br><br>
<h2>ELASTIC SEARCH STATUS</h2>
<?php
    $old_path = getcwd();
    chdir('/var/www/');
    $bashit = shell_exec('./ESstat.sh');
    chdir($old_path);
  

    echo $bashit;

?>
<h2>ELASTIC SEARCH LOG</h2>
<?php
    $old_path = getcwd();
    chdir('/var/www/');
    $bashit = shell_exec('./ESlog.sh');
    chdir($old_path);
  

    echo $bashit;

?>
<br><br>
<h2>USAGE LOGS</h2>
<?php
    $old_path = getcwd();
    chdir('/var/www/');
    $bashit = shell_exec('./ESstat.sh');
    chdir($old_path);
  

    echo $bashit;

?>

</div>

</div>
</body>
</html>