<?php
session_start();
$f=$_POST['first'];
$l=$_POST['last'];
$e=$_POST['email'];
$r=$_POST['remail'];
$p=$_POST['password'];
$b=$_POST['birthday'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'login');
$q = "INSERT into signin (first,last,email,remail,password,birthday) values ('$f','$l','$e','$r','$p','$b')";
$result=mysqli_query($con,$q);

mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>InsertData</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    
    <?php
     if($result==1) 
          echo "Signin Successfull";
    else 
          echo "Insertion Failed"; 
    ?>
<p>    <a href="log.php">Click Here to login ...</a> </p>
</body>
</html>





