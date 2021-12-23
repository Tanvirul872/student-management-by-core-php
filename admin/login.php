<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> Login Form </title>
  </head>
  <body>
    
  <div class="container">
      <div class="row">  
        
          <div class="col-md-4 offset-4">
          <h2 class="text-center"> Admin login form </h2>
               <form action="login.php" method="POST">
                    <div>
                         <input class="form-control" type="text" placeholder="Username" name="username" required  >
                    </div>
                    <div>
                    <input class="form-control" type="password" placeholder="Password" name="password" required  >
                    </div>
                    <div>
                       <input type="submit" value="Login" class="btn btn-success mt-4" />
                    </div>
               </form>
          </div>
      </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>