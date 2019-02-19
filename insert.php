

<?php
            $n=$_POST['title'];
            $a=$_POST['price'];
            $e=$_POST['writer'];
            $con=mysqli_connect('localhost','root');
            mysqli_select_db($con,'bookms');
            $q="INSERT INTO book(title,price,writer) values ('$n','$a','$e')";
           $i= mysqli_query($con,$q); 
           
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
     if($i==1) 
          echo "Record Inserted";
    else 
          echo "Insertion Failed"; 
    ?>
<p>
Do you want to insert more data  ????
    <a href="home.php">Click Here...</a> </p>
    <p>
View List  ???
    <a href="view.php">Click Here...</a> </p>
</body>
</html>