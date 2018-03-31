<?php
  //echo "1";
   include("settings.php");
    $sql = "INSERT INTO person (fName, lName, phonenumber, address, email, password ) VALUES (?, ?, ?, ?, ?, ?);";
  //echo "3";
  $custfName = mysqli_real_escape_string($db, $_POST['fName']);
  $custlName = mysqli_real_escape_string($db, $_POST['lName']);
  $custphone = mysqli_real_escape_string($db, $_POST['phonenumber']);
  $custaddress = mysqli_real_escape_string($db, $_POST['address']);
  $custemail = mysqli_real_escape_string($db, $_POST['email']);
  $custpassword = mysqli_real_escape_string($db, $_POST['passwd']);
  $hashpw = sha1($custpassword);
  $stmt = mysqli_stmt_init($db);
  if(!mysqli_stmt_prepare($stmt, $sql))
  {
    echo "SQL failed";
  }
  else
  {
    //echo "SUCCESS";
    mysqli_stmt_bind_param($stmt, "ssssss", $custfName, $custlName, $custphone, $custaddress, $custemail, $hashpw);
    mysqli_stmt_execute($stmt);
  }
  header("Location:login.php");
 
   


   
?>