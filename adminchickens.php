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

  <div class="w3-container w3-red">
    <h1>Chicken Menu Display</h1>
  </div>

  <table align="center">
        <tr>
          <th>sauce</th>
          <th>size</th>
          <th>price</th>
        </tr>

  <?php

     include("settings.php");
      
     $sql = "SELECT * FROM chicken";
      
     $result = mysqli_query($db,$sql); 

     $check = mysqli_num_rows($result);

     if($check > 0){
      while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row['sauce'] . "</td>";
        echo "<td>" . $row['size'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<tr>";
      }
     }
     
  ?>

  </table><br><br>

</div>

</div>
</body>
</html>