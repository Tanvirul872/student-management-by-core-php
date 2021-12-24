<?php 
 
 require_once'./dbcon.php'; 

if(isset($_POST['registration'])){ 
  
 $name = $_POST['name'];
 $email = $_POST['email'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $c_password = $_POST['c_password'];

 $photo = explode('.',$_FILES['photo']['name']);   
 $photo = end($photo);  
 $photo_name = $username.'.'.$photo; 

 $input_error = array(); 
if(empty($name)){
  $input_error['name'] = "The name field is required"; 
}

if(empty($username)){
  $input_error['username'] = "The username field is required"; 
}
if(empty($email)){
  $input_error['email'] = "The email field is required"; 
}
if(empty($password)){
  $input_error['password'] = "The password field is required"; 
}
if(empty($c_password)){
  $input_error['c_password'] = "The confirm password field is required"; 
}

if(count($input_error)=="0"){
  $email_check = mysqli_query($link,"SELECT * FROM `users` WHERE `email` = '$email';"); 
 if(mysqli_num_rows($email_check)==0){
  $user_check = mysqli_query($link,"SELECT * FROM `users` WHERE `username` = '$username';"); 
  if(mysqli_num_rows($user_check)==0){
     if($password==$c_password){ 

      //database insert code start from here... 

     }else{
       $c_pass_error="confirmd password not match!"; 
     }
  }else{
    $user_error = "This user has already exists.please try again!"; 
  } //suser check end 

 }else{
       $email_error = "This email has already exists.please try again!";
  }

} 

//   echo '<pre>'; 
//  print_r($input_error);
//    echo '</pre>' ; 
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

    <title> Registration Form </title>
  </head>
  <body>
    
  <div class="container">
      <div class="row">  
    
          <div class="col-md-12">
          <h2 class="text-center"> Admin registration form </h2>
               <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                   <div class="">
                      <label for="name" class="control-label col-md-1"> Name  </label>
                      <input class="form-control" id="name" type="text" name="name" value="<?php if(isset($name)){echo $name; }?>" placeholder="write your name here" />   
                   </div>
                   <label style="color:red;">
                     <?php if(isset($input_error['name'])){ echo $input_error['name']; }?>
                  </label>
                  
                    <div class=""> 
                        <label for="username" class="control-label col-md-1"> Username  </label>
                        <input class="form-control" id="username" type="text" name="username" value="<?php if(isset($username)){echo $username; }?>" placeholder="write your username here" />  
                    </div>
                    <label style="color:red;">
                     <?php if(isset($input_error['username'])){ echo $input_error['username']; }?>
                  </label>
                  <label style="color:red;">
                     <?php if(isset($user_error)){ echo $user_error; }?>
                  </label>
                  <div class="">
                  <label for="email" class="control-label col-md-1"> email  </label>
                  <input class="form-control" id="email" type="email" name="email" value="<?php if(isset($email)){echo $email; }?>" placeholder="write your email here" />  
                  </div>
                  <label style="color:red;">
                     <?php if(isset($input_error['email'])){ echo $input_error['email']; }?>
                  </label> 
                  <label style="color:red;">
                     <?php if(isset($email_error)){ echo  $email_error; }?>
                  </label>
                 
                    <div class=""> 
                    <label for="password" class="control-label col-md-1"> Password  </label>
                   <input class="form-control" id="password" type="password" name="password" value="<?php if(isset($password)){echo $password; }?>" placeholder="write your name here" />  
                    </div>
                    <label style="color:red;">
                     <?php if(isset($input_error['password'])){ echo $input_error['password']; }?>
                  </label>
                  
                    <div class=""> 
                    <label for="c_password" class="control-label col-md-1">Confirm  Password  </label>
                   <input class="form-control" id="c_password" type="password" name="c_password"  value="<?php if(isset($c_password)){echo $c_password; }?>" placeholder="Comnfirm password" />  
                    </div>
                    <label style="color:red;">
                     <?php if(isset($input_error['c_password'])){ echo $input_error['c_password']; }?>
                    </label>
                     <label style="color:red;">
                     <?php if(isset($c_pass_error)){ echo $c_pass_error; }?>
                    </label>
                  
                  <div class="div">
                  <label for="photo" class="control-label col-md-1"> Photo  </label>
                   <input class="form-control" id="photo" type="file" name="photo" />   
                  </div>
                 
                  <div class="">
                    <input type="submit" value="registration" name="registration" class="btn btn-primary" />
                  </div>

               </form>
          </div>
      </div>
      <div class="col-md-12">
         <h2> do you have any account ? then <a href="login.php">Login</a> </h2>
      </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>