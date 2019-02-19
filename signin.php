# Apoorva_Rathore.github.io
<!doctype html>
<html lang="en">
  <head>
    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>LOGIN</title>
   
    

<style>
       body {
  padding-top: 5rem;
}
section{
  padding: 40px 0 40px 0;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }
      .jumbotron h1{
        margin-top: 60px;
      } 
      .jumbotron p{
margin-bottom: 40px;
}
@media(min-width: 768px) and (max-width: 990px){
  body{
    display:none !important;
  }
}
@media(max-width: 991px){
  .imgsize{
    max-width: 200%;
    display : none;

  }
}
#foot{
      background-color: black;
      padding: 30px 0 20px 0;
    }
  </style>


  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand em-text" href="#" ><span  style="color:rgb(0, 255, 179)">Project Name</span> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="signin.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item ">
        <a class="nav-link " href="about.html">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="contact.html">Contact<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Project Name</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          
          <a class="dropdown-item" href="#">About</a>
          <a class="dropdown-item" href="#">Contact</a>        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


  
  
<div style="background-image: url(https://static1.squarespace.com/static/533d9c71e4b0f77e1bd13c8a/t/56b40ac9d210b80a81392783/1454639827291/)" class="jumbotron" id="jump"  onmouseover="effect()" onmouseout="noeffect()">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <h1><span  style="color:rgb(0, 255, 179)">Capture Life<hr><h6>A fun and easy way to capture & share the moments you live for</h6></span></h1>
       
      

      </div>
      <div class="col-md-4">

      </div>
       <div class="col-md-4">
  <a href="#"></a><img class="imgsize " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQd3cmLz5CAl5EzBjaLkcpbEdKshQJIKzUvDAyxNvz9mpUYiRWd" ></a>
  </div>
    </div>
  </div>
  </div>
  
    </section>
      

      <section id="about">
  <div class="container">
    <div class="row">

     
        <div class="col-md-6">
        <h1>New User?? Create new account</h1>
        <form action="svalid.php"  onsubmit="return validation()" method="post">
           <table>
           <tr>
            <div class="form-group">
           <th>First Name</th>
               <td> <input type="text" class="form-control" placeholder="Enter first name" name="first" >
     </td>          
              </div></tr>
<tr>
            <div class="form-group">
           <th>Last Name</th>
               <td> <input type="text" class="form-control" placeholder="Enter last name" name="last" >
     </td>          
              </div></tr>
         <tr> <div class="form-group">
           <th>Email</th>
          <td>  <input type="text" class="form-control" placeholder="Enter email " name="email">       
          </td></div></tr>
  
          <tr><div class="form-group">
           <th>Re-enter email</th>
           <td> <input type="text" class="form-control" placeholder="Enter email again" name="remail">       
           </td></div></tr>
          <tr> <div class="form-group">
    <th>Password</th>
   <td> <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"></td>
   </div></tr>
 <tr>  <div class="form-group">
           <th>Date of Birth</th>
               <td> <input type="text" class="form-control" placeholder="--/--/--" name="birthday" >
     </td>          
              </div></tr>


         
          </td> </div></tr>
          <th></th>
          <td><input class="btn btn-primary" type="submit" value="Sign-up"></td>

          
          
        </table>
        </form>
  </div>
  

       
        
    <div class="col-md-6">
    <h1>Already have an account ??</h1>
        <form action="log.php"  onsubmit="return validation()" method="post">
        <table>
          <tr>
       <h3>Sign in here -> <input class="btn btn-primary" type="submit" value="Sign-in"></h3></tr></table></form>
  </div></div></div></section>

<br>
<br>
<br>
<section id="foot">
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <ul>
                <li><a href="signin.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#">Privacy Policy</a></li>
               
              </ul>
        </div>
        <div class="col-md-6">
          <p><a href="#">Copyright &copy; 2015, All Rights Reserved</a></p>
        </div>
      </div>
    </div>
  </footer>
  </section>

</body>
</html>
