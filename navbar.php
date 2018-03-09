
<?php 
  $directoryURI = $_SERVER['REQUEST_URI'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('/', $path);
  $first_part = $components[1];
?>
<!DOCTYPE HTML>
<html>
<head>
  
  <meta charset="utf-8">

<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <script src="bootstrap/js/bootstrap.js"></script>
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Jzo</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="<?php if ($first_part == "home.php") {echo "active";}  else  {echo "noactive";}?>"><a href="home.php">Home</a></li>
     
      <li class="<?php if ($first_part == "ENDORSEMENTS.php") {echo "active";}  else  {echo "noactive";}?>"> <a href="ENDORSEMENTS.php">ENDORSEMENTS</a></li>
      <li class="<?php if ($first_part == "RESUME.php") {echo "active";} else  {echo "noactive";} ?>"><a href="RESUME.php">RESUME</a></li>
       <li class="<?php if ($first_part == "Projects.php") {echo "active";}  else  {echo "noactive";}?>" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="Projects.php">Projects
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
       <li><a href="Projects.php?slide=0">Project 1</a></li>
        <li><a href="Projects.php?slide=1">Project 2</a></li>
        <li><a href="Projects.php?slide=2">Project 3</a></li>
        </ul>
      </li>
     
      <li class="<?php if ($first_part == "contacts.php") {echo "active";} else  {echo "noactive";} ?>"><a href="contacts.php">CONTACT</a></li>
  
      
        <li class="<?php if ($first_part == "login.php") {echo "active";} else  {echo "noactive";} ?>"><a href="login.php">Login</a></li>
         <li class="<?php if ($first_part == "logout.php") {echo "active";} else  {echo "noactive";} ?>"><a href="logout.php">Logout</a></li>
    
    </ul>
  </div>
</nav>
<body>
</html>