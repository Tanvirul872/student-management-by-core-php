<h2><i class="fa fa-user-plus"></i> Update Student </h2>
<ol class="breadcrumb">
    <li class="active"> <a href="index.php?page=dashboard"> Dashboard </a> </li>
</ol>


<?php

    $id = base64_decode($_GET['id']);
    $db_data = mysqli_query($link,"SELECT * FROM `student_info` WHERE `id`= '$id'");
    $db_row = mysqli_fetch_assoc($db_data);


?>
<?php
if(isset($_POST['update-student'])){

    $name =$_POST['name'];
    $roll =$_POST['roll'];
    $city =$_POST['city'];
    $pcontact =$_POST['pcontact'];
    $class =$_POST['class'];

    $query = "UPDATE `student_info` SET `name`='$name',`roll`='$roll',`class`='$class',`pcontact`='$pcontact' WHERE `id`='$id'";
//    $query = "UPDATE `student_info` SET `name`='$name',`roll`='$roll',`class`='$class',`pcontact`='$pcontact' WHERE `id`='$id'";
    $result = mysqli_query($link,$query);
    print_r($_POST);
    if($result){
        header('location:index.php?page=all-students');
    }else{

    }


}


?>

<div class="row">

</div>
<div class="row">
    <div class="col-md-6">
        <form action="" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="name"> Student Name </label>
                <input type="text" name="name" placeholder="Student name" id="name" class="form-control" value="<?= $db_row['name']; ?>">
            </div>
            <div class="form-group">
                <label for="roll"> Student Roll </label>
                <input type="text" name="roll" placeholder="Student roll" id="roll" class="form-control" value="<?= $db_row['roll']; ?>">
            </div>
            <div class="form-group">
                <label for="city"> Student city </label>
                <input type="text" name="city" placeholder="Student city" id="city" class="form-control">
            </div>
            <div class="form-group">
                <label for="pcontact"> Student Phone </label>
                <input type="text" name="pcontact" placeholder="Student Phone Number" id="pcontact" class="form-control" value="<?= $db_row['pcontact']; ?>"/>
            </div>
            <div class="form-group">
                <label for="class"> Student Class </label>
                <select id="class" class="form-control" name="class">
                    <option value=""> Select </option>
                    <option value="1st" <?php echo $db_row['class']=='1st'?'selected=""':'';   ?> >  1st </option>
                    <option value="2nd" <?php echo $db_row['class']=='2nd'?'selected=""':'';   ?> > 2nd </option>
                    <option value="3rd" <?php echo $db_row['class']=='3rd'?'selected=""':'';   ?>> 3rd </option>
                    <option value="4th" <?php echo $db_row['class']=='4th'?'selected=""':'';   ?>> 4th </option>
                    <option value="5th" <?php echo $db_row['class']=='5th'?'selected=""':'';   ?>> 5th </option>
                </select>
            </div>
<!--            <div class="form-group">-->
<!--                <label for="pcontact"> Student Image </label>-->
<!--                <input type="file" name="picture" id="pcontact" class="form-control"/>-->
<!--            </div>-->
            <div class="form-group">

                <input type="submit" value="Submit" name="update-student" class="btn btn-success mt-4" />
            </div>
        </form>
    </div>
</div>