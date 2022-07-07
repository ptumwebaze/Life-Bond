<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
  <?php
  $fnm=$_POST['email'];
  $lnm=$_POST['tel'];
  $ctc=$_POST['loc'];
  $em=$_POST['psw'];
  $pass=$_POST['psw-repeat'];
  $con=mysqli_connect("localhost","root","","domd") or die("Could not connect");
  mysqli_select_db($con,"domd");
  $que1=mysqli_query($con,"insert into hospital values('$fnm','$lnm','$ctc','$em', '$pass')");
  if($que1)
  echo"Your details have been submitted successfully"; 
  else
  echo"operation unsuccessful"
  ?>
 </body>
</html>
