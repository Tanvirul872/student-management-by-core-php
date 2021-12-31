<?php 

session_start(); 

if(!isset($_SESSION['user_login'])){
 header('location:login.php'); 
}   
?>   

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <title> Dashboard </title>
  </head>
  <body>
   
  



        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"> STudent Management </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

           <div class="collapse navbar-collapse" id="navbarText"> 

            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fa fa-user"></i> Welcome :Tanvirul karim </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Add user</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> Profile </a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link" href="#"> Logout </a>
            </li>

            </ul>
    
    </div>
</nav> 

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
        <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active">
           <i class="fa fa-dashboard"></i>  Dashboard
        </a> 
        <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-user-plus"></i>   Add student </a> 
        <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-user"></i>   All student </a> 
        <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-user"></i>   All User </a> 
        </div> 
    </div> 
    <div class="col-md-9"> 

    <div class="content">
        <h2><i class="fa fa-dashboard"></i> Dashborad <small> statistics overview </small></h2>
    </div>
        
    </div>
    </div>
</div>
  


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 
  </body>
</html>