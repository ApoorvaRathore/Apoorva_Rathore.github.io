<?php 
$size= (sizeof($_POST))/4;
$j=1;
for($i=1;$i<=$size;$i++)
{
    $index1="bookid".$i;
    $bookid[$i]=$_POST[$index1];
    $index2="title".$i;
    $title[$i]=$_POST[$index2];
    $index3="price".$i;
    $price[$i]=$_POST[$index3]; 
    $index4="writer".$i;
    $writer[$i]=$_POST[$index4];
    
}
            $con=mysqli_connect('localhost','root');
            mysqli_select_db($con,'bookms');
            for($i=1;$i<=$size;$i++)
            {
$q="update book SET title='$title[$i]',  price='$price[$i]',  writer='$writer[$i]' where bookid='$bookid[$i]'";
             mysqli_query($con,$q); 
            }
            
            
            mysqli_close($con);



?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php 
echo" Records Updated";
?>
<p>View Form ??? <a href="view.php">Click here....</p>
