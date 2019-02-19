<?php
session_start();
if(isset($_SESSION['email'])==false)
header('location:http://localhost/login/log.php');


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    
<h3>Hello , <?php echo $_SESSION['email']; ?></h3>

<form action="https://www.google.com/search" class="searchform" method="get" name="searchform" target="_blank">
<input name="sitesearch" type="hidden" value="example.com">
<input autocomplete="on" class="form-control search" name="q" placeholder="Search in google.com" required="required"  type="text">
<button class="button" type="submit">Search</button>
</form>


<br><br> <br> <br>
<form action="upload.php"method="post" enctype="multipart/form-data" >

<div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <br>
    <textarea class="form-control"name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
 <br><br> </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload file input</label>
    <input type="file"  name="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <br>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
  <br>
  <br>
</form>


<section id="about">
  <div class="container">
    <div class="row">
     
      <div class="col-md-8">
        <form action="insert.php"  onsubmit="return validation()" method="post">
           <table>
           <tr>
            <div class="form-group">
           <th>Book Id</th>
               <td> <input type="text" class="form-control" placeholder="Enter name" name="title" >
     </td>          
              </div></tr>
<tr>
            <div class="form-group">
           <th>Book Title</th>
               <td> <input type="text" class="form-control" placeholder="Enter name" name="title" >
     </td>          
              </div></tr>
         <tr> <div class="form-group">
           <th>Price</th>
          <td>  <input type="text" class="form-control" placeholder="Enter price " name="price">       
          </td></div></tr>
  
          <tr><div class="form-group">
           <th>Writer</th>
           <td> <input type="text" class="form-control" placeholder="Enter writer" name="writer">       
          </td> </div></tr>
          <th></th>
          <td><input type="submit" value="Insert"></td>
          
          
        </table>
        </form>
        </div></div></section>

<br>
<br>
<br>
<p>
View List  ???
    <a href="view.php">Click Here...</a> </p>
    <p>
Delete List  ???
    <a href="deleteform.php">Click Here...</a> </p>

  <a href="Logout.php">Logout</a>
</body>
</html>