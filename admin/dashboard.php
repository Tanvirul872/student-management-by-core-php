<h2><i class="fa fa-dashboard"></i> Dashborad <small> statistics overview </small></h2>
      <ol class="breadcrumb">
          <li class="active"> Dashboard </li>
      </ol>
      <div class="row">

          <?php
            $count_student= mysqli_query($link,"SELECT * FROM `student_info`");
            $total_student = mysqli_num_rows($count_student);
          ?>
          <div class="col-md-4">
             <div class="card">
                   <div class="card-header">
                      <i class="fa fa-users"></i> 
                   </div>
               </div> 
               <div class="card">
                    <div class="card-body">
                        <div class="row">
                         <h4 class="col-md-9"> Students </h4> 
                         <h4 class="col-md-3"> <?= $total_student; ?> </h4>
                        </div> 
                   </div>
                   <div class="card-footer">
                         <a href="index.php?page=all-students">All student</a>
                         <i class="fa fa-right"></i>
                   </div>
               </div>

          </div>
          <div class="col-md-4">
              <?php
              $count_user= mysqli_query($link,"SELECT * FROM `users`");
              $total_user = mysqli_num_rows($count_user);
              ?>
             <div class="card">
                   <div class="card-header">
                      <i class="fa fa-users"></i> 
                   </div>
               </div> 
               <div class="card">
                    <div class="card-body">
                        <div class="row">
                         <h4 class="col-md-9"> Users </h4>
                         <h4 class="col-md-3"> <?= $total_user; ?></h4>
                        </div> 
                   </div>
                   <div class="card-footer">
                         <a href="index.php?page=all-user">All users</a>
                         <i class="fa fa-right"></i>
                   </div>
               </div>

          </div>

        
      </div> 
      <h2> New Students </h2>
      <table class="table" id="example"> 
          <thead>
              <tr>
                  <th> Id </th>
                  <th> Name </th>
                  <th> Roll </th>
                  <th> Class </th>
                  <th> Mobile </th>
                  <th> Photo </th>
              </tr>
          </thead> 
          <tbody>
            
           <?php 
              $db_sinfo = mysqli_query($link,"SELECT * FROM `student_info`");   
               while($row = mysqli_fetch_assoc($db_sinfo)){ ?>  

              <tr>
                  <td> <?php echo $row['id']; ?> </td>
                  <td> <?php echo $row['name']; ?> </td>
                  <td> <?php echo $row['roll']; ?> </td>
                  <td> <?php echo $row['class']; ?> </td>
                  <td> <?php echo $row['pcontact']; ?> </td>
                  <td> <img width="50px" height="50px" src="student_images/<?php echo $row['photo']; ?>"> </td>
              </tr>  

              <?php } ?>

          </tbody>
      </table> 
