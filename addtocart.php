 <?php
 session_start();


  $prodname = $_SESSION["itemz"];  
  // $prodprice = $total;
  $string = 'python cart.py ' .'"'.$prodname.'"';
  $cmd = escapeshellcmd($string);
  $add = shell_exec($cmd);
  //header ("Location: thankyou.php");
  echo $prodname;

 ?>

