<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    
   
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <br/> 
      <a class="btn btn-primary text-right" href="admin/login.php"> Login </a>
      <br/>
      <br/>
      <br/> 
        <h2 class="text-center"> Student managemnet system </h2>
   
        <div class="row">
            <div class="col-md-4 offset-4 mt-4">
            <form action="" method="POST">
               <table class="table table-borderd">
                  <tr>
                    <td colspan="2"> <label>Student Information</label> </td>
                  </tr>

                  <tr>
                    <td><label for="choose"> Choose Class </label></td>
                    <td>
                      <select class="form-control" name="choose" id="choose">
                          <option value=""> Select </option>
                          <option value="1st"> 1st </option>
                          <option value="2nd"> 2nd </option>
                          <option value="3rd"> 3rd </option>
                          <option value="4th"> 4th </option>
                          <option value="5th"> 5th </option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td><label for="roll"> Roll </label></td>
                    <td><input type="text" name="roll" placeholder="Enter your roll"  /></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td colspan="2"> <input class="form-control" type="submit" value="show Info" name="show_info" />  </td>
                   
                  </tr>
               </table>
            </form>

            </div>
        </div>

       <?php
         require_once './admin/dbcon.php';
         if(isset($_POST['show_info'])){
             $choose = $_POST['choose'];
             $roll = $_POST['roll'];
             $result = mysqli_query($link,"SELECT * FROM `student_info` WHERE `class`='$choose' and `roll`='$roll'");
              if(mysqli_num_rows($result)==1){

                  $row = mysqli_fetch_assoc($result);

              ?>
                  <div class="row">
                      <div class="col-md-8 offset-2">
                          <table class="table table-bordered">

                              <tr>

                                  <img src="admin/images/<?= $row['photo'];?>" width="500px" height="200px">

                              </tr>

                              <tr>

                                  <td>Name</td>
                                  <td><?= $row['name'];?></td>
                              </tr>

                              <tr>

                                  <td>Roll</td>
                                  <td><?= $row['roll'];?></td>
                              </tr>
                              <tr>

                                  <td>Class</td>
                                  <td><?= $row['class'];?></td>
                              </tr>
                              <tr>

                                  <td>Phone</td>
                                  <td><?= $row['pcontact'];?></td>
                              </tr>
                          </table>
                      </div>
                  </div>

              <?php
              }else{
                  echo 'No data found';
              }
          }
        ?>
          
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>