<?php 

session_start(); 
require_once './dbcon.php';

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
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
     <style>
        .footer{
        background: #4a557394;
        padding: 42px 0px;
        text-align: center;
        margin-top: 100px;
           }      
     </style>
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
                <a class="nav-link" href="index.php?page=user-profile"> Profile </a>
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
        <a href="index.php?page=dashboard" class="list-group-item list-group-item-action active">
           <i class="fa fa-dashboard"></i>  Dashboard
        </a> 
        <a href="index.php?page=add-student" class="list-group-item list-group-item-action"><i class="fa fa-user-plus"></i>   Add student </a> 
        <a href="index.php?page=all-students" class="list-group-item list-group-item-action"><i class="fa fa-user"></i>   All student </a> 
        <a href="index.php?page=all-user" class="list-group-item list-group-item-action"><i class="fa fa-user"></i>   All User </a>
        </div> 
    </div> 
    <div class="col-md-9"> 

    <div class="content">  
        
    <?php 
 
        if ($_GET['page']){
            $page = $_GET['page'].'.php';   
        }else{
            $page= 'dashboard.php'; 
        }

        if(file_exists($page)){
          require_once $page; 
        }else{
            require_once "404.php"; 
        }    
    ?>

    </div>
 
    </div>
    </div>
</div>

<div class="footer">
     <h2> Made by Raw Php </h2>
</div>
  
    <!-- Option 1: Bootstrap Bundle with Popper --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/html">
       $(document).ready(function() {
       $('#example').DataTable();
          } );
    </script>
  </body>
</html>