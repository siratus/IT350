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
                  <label>Email  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />

                  <input type = "submit" value = "Submit"/><br />
                  
               </form>
               


<!-- THIS IS THE SIGN UP FORM/MODAL!!!!!!!!!!!!!!!!!!!@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<h2>Don't have an Account?</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

  <form class="modal-content" action="register.php" method = "post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="fName"><b>First Name</b></label>
      <input type="text" placeholder="Bob" name = "fName"required>

      <label for="lName"><b>Last name</b></label>
      <input type="text" placeholder="Jones" name = "lName" required>

      <label for="phonenumber"><b>Phone Number</b></label>
      <input type="text" placeholder="(123)456-7890" name = "phonenumber" required>

      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="123 street" name="address" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="bob@gmail.com" name = "email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name = "passwd" required>
  
     

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

              

               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
          
            </div>
        
         </div>
      
      </div>

   </body>

</head>
<body>

</body>
</html>