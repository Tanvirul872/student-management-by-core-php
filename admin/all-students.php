<table class="table" id="example"> 
          <thead>
              <tr>
                  <th> Id </th>
                  <th> Name </th>
                  <th> Roll </th>
                  <th> Class </th>
                  <th> Mobile </th>
                  <th> Photo </th>
                  <th> Action </th>
              </tr>
          </thead> 
          <tbody>
            
           <?php 
              $db_sinfo = mysqli_query($link,"SELECT * FROM `student_info`");   
               while($row = mysqli_fetch_assoc($db_sinfo)){ ?>  

              <tr>
                  <td> <?php echo $row['id']; ?> </td>
                  <td> <?php echo ucwords($row['name']); ?> </td>
                  <td> <?php echo $row['roll']; ?> </td>
                  <td> <?php echo $row['class']; ?> </td>
                  <td> <?php echo $row['pcontact']; ?> </td>
                  <td> <img width="50px" height="50px" src="student_images/<?php echo $row['photo']; ?>"> </td>
                  <td>
                      <a href="#"><i class="fa fa-pencil"></i> Edit </a>
                      <a href="delete_student.php?id=<?php echo base64_encode($row['id']); ?>"><i class="fa fa-trash"></i> Delete </a>
                  </td>
                 </tr>  

              <?php } ?>

          </tbody>
      </table> 