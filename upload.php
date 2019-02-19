<?php
session_start();
$foldername='/photos';
$d=$_POST['desc'];
$f=$_FILES['file'];
echo "  your description of problem is ".$d ;

echo "  Name of file you uploaded is". $f['name'];


echo "  Type of uploaded file is ".$f['type'];

echo "  file Size is". $f['size'];


if(file_exists("photos/".$f['name']))
{
echo "  File already exits\n";
}
else if($f['type']=="image/jpeg")
{

move_uploaded_file($f['tmp_name'],"photos/".$f['name']);
}
else{
    echo "  not uploaded";
}   
?>