<!DOCTYPE html>

<?php
  //echo "1";
   include("settings.php");
   //echo "2";
   session_start();
  //echo "3";
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      //include('session.php');
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      // hashs the mypassword php variable 
      $hashpw = sha1($mypassword);

      //$sql = "SELECT * FROM Users WHERE username = '$myusername' AND password = '$hashpw'";
      $sql = "SELECT * FROM person WHERE email = '$myusername' AND password = '$hashpw' AND (roleID = 2 or roleID = 1)";
     //echo "$sql";
      $result=mysqli_query($db,$sql);
      //$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count=mysqli_num_rows($result);
      //echo "$count";
      
      // If result matched $myusername and $haspw, table row must be 1 row
      
      if($count == 1) {
         //session_register("username");
         $_SESSION['login_user'] = $myusername;
         $_SESSION['loggedin']=1;
         //need to update loggedin 
         $query = "UPDATE person SET loggedIn = 1 WHERE email = '$myusername'";
         mysqli_query($db,$query);
         header("location: admin.php");
      }
      else{

          $sql2 = "SELECT * FROM person WHERE email = '$myusername' AND password = '$hashpw' AND roleID = 0";
         //echo "$sql";
          $result2=mysqli_query($db,$sql2);
          //$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
          $count2=mysqli_num_rows($result2);
          //echo "$count";
          
          // If result matched $myusername and $haspw, table row must be 1 row
          
          if($count2 == 1) {
             //session_register("username");
             $_SESSION['login_user'] = $myusername;
             $_SESSION['loggedin']=1;
             //need to update loggedin 
             $query = "UPDATE person SET loggedIn = 1 WHERE email = '$myusername'";
             mysqli_query($db,$query);
             header("location: items.php");
          }else {
             echo "Your user credentials have failed";
             header("location: loginfail.php");

          }
      }


   }
?>

<html>
<head>

  <title>Jae Yu</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="img/favicon.ico" rel="icon" type="image/x-icon" />


  <header class="container">
    <?php include('navbar.php');?>
    <br><br><br>
    <!-- login page -->
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
  
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
        
            <div style = "margin:30px">
               
               <form action = "login.php" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />

                  <input type = "submit" value = "Submit"/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
          
            </div>
        
         </div>
      
      </div>

   </body>

</head>
<body>

</body>
</html>