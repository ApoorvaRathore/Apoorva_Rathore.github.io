<?php 
$size= sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++)
{
    $index=$j;
    if(isset($_POST[$index])==true)
    { 
         $bid[$i]=$_POST[$index];
    }
        else
        $i--;
        $j++;
}
            $con=mysqli_connect('localhost','root');
            mysqli_select_db($con,'bookms');
            for($k=1;$k<=$size;$k++)
            {
$q="DELETE from book where bookid= ".$bid[$k];
             mysqli_query($con,$q); 
    
            }
            
            
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
<?php 
echo $size." Records Deleted";
?>
<p>Do you want to update form ??? <a href="updateform.php">Click here....</a></p>
<p>Do you want to insert more record ??? <a href="home.php">Click here....</a></p>