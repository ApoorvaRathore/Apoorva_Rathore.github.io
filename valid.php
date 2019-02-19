<?php
session_start();
$e=$_POST['email'];
$p=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'login');
$q = "SELECT email , password FROM signin where email='$e' && password='$p'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
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
     if($num==1) 
   {
       echo"hii";  
     $_SESSION['email']=$e ?>
       <p><a href="home.php">Home</a> </p>
       <?php }
    else 
        {

        
   echo "Login Failed";  
          
        }
    ?>

</body>
</html>


