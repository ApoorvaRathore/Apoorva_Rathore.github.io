<?php
/*
$n=$_POST['title'];
$a=$_POST['price'];
$e=$_POST['writer']; */
$con=mysqli_connect('localhost','root');
            mysqli_select_db($con,'bookms');
            $q="select * from book";
            $result= mysqli_query($con,$q); 
            $num=mysqli_num_rows($result);
            mysqli_close($con);

 ?> 
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ViewData</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<table>
<tr>
<th>   Book ID   </th>
<th>   Title   </th>
<th>   Price   </th>
<th>   Author   </th>
</tr>
    
    <?php
    $num=mysqli_num_rows($result);
    for($j=1;$j<=$num;$j++)
    {
      $row=mysqli_fetch_array($result);
      ?>
      <tr>
      <td> <?php echo "   " . $row['bookid']. "   " ?> </td>
      <td> <?php echo "   " . $row['title']. "   " ?> </td>
      <td> <?php echo "   " . $row['price']. "   " ?> </td>
      <td> <?php echo "   " . $row['writer']. "   " ?> </td>
     
      </tr>
      <?php
    }
    ?>
<p>
Do you want to insert more data  ???
    <a href="home.php">Click Here...</a> </p>

</body>
</html>          