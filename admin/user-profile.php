<h2><i class="fa fa-dashboard"></i> Dashborad <small> User Profile </small></h2>
<ol class="breadcrumb">
    <li class="active"> Dashboard </li>
</ol>

<?php

$session_user = $_SESSION['user_login'];

$user_row =mysqli_query($link,"SELECT * FROM `users` WHERE `username`='$session_user'");
$user_data =mysqli_fetch_assoc($user_row);

?>

<div class="row">
    <div class="col-md-6">

        <table class="table table-bordered">

            <tr>
                <td>User Id </td>
                <td><?php echo $user_data['id']; ?> </td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo $user_data['name']; ?> </td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo $user_data['username']; ?> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $user_data['email']; ?> </td>
            </tr>
            <tr>
                <td>Status</td>
                <td><?php echo $user_data['status']; ?> </td>
            </tr>
            <tr>
                <td>Sign Up Date</td>
                <td><?php echo $user_data['datetime']; ?> </td>
            </tr>

        </table>
        <a href="#" class="btn btn-success text-right"> Edit Profile </a>

    </div>
    <div class="col-md-6">
        <a href="">
            <img class="img-thumbnail" src="images/<?php echo $user_data['photo']; ?>" alt="" height="200px" width="200px"/>
        </a>
       <br/>
       <br/>

        <form action="" enctype="multipart/form-data" method="POST">

            <?php
              if(isset($_POST['upload'])){
                  $photo =explode('.',$_FILES['photo']['name']);
                  $photo =end($photo);
                  print_r($photo);
                  $photo_name = $session_user.'.'.$photo;
                  $upload = mysqli_query($link,"UPDATE `users` SET  `photo`='$photo_name' WHERE `username`='$session_user'");
                  if($upload){
                      move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo_name);
                  }
              }
            ?>

            <label for="photo">Profile Picture</label>
            <input type="file" name="photo" required id="photo">
            <input type="submit" name="upload" value="Upload" class="btn btn-info">
        </form>

    </div>
</div>
