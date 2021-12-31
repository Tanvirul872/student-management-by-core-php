<h2><i class="fa fa-user-plus"></i> Add Student </h2>
      <ol class="breadcrumb">
          <li class="active"> <a href="index.php?page=dashboard"> Dashboard </a> </li>
      </ol> 
     <?php 
        if(isset($_POST['add-student'])){
         echo '<pre>'; 
            print_r($_POST); 
            print_r($_FILES); 
         echo '</pre>'; 

         $name =$_POST['name']; 
         $roll =$_POST['roll']; 
         $city =$_POST['city']; 
         $pcontact =$_POST['pcontact']; 
         $class =$_POST['class']; 

         $picture = explode('.',$_FILES['picture']['name']); 
         $picture_ex = end($picture); 
         $picture = $roll.'.'.$picture_ex; 
          echo $picture; 

          }
     ?>

<div class="row">
    <div class="col-md-6">
        <form action="" method="POST" enctype="multipart/form-data"> 
          
            <div class="form-group">
                 <label for="name"> Student Name </label>
                 <input type="text" name="name" placeholder="Student name" id="name" class="form-control">
            </div> 
            <div class="form-group">
                 <label for="roll"> Student Roll </label>
                 <input type="text" name="roll" placeholder="Student roll" id="roll" class="form-control">
            </div> 
            <div class="form-group">
                 <label for="city"> Student city </label>
                 <input type="text" name="city" placeholder="Student city" id="city" class="form-control">
            </div> 
            <div class="form-group">
                 <label for="pcontact"> Student Phone </label>
                 <input type="text" name="pcontact" placeholder="Student Phone Number" id="pcontact" class="form-control"/> 
            </div> 
            <div class="form-group">
                 <label for="class"> Student Class </label>
                 <select id="class" class="form-control" name="class">
                    <option value=""> Select </option>  
                    <option value="1st"> 1st </option>  
                    <option value="2nd"> 2nd </option>  
                    <option value="3rd"> 3rd </option>  
                    <option value="4th"> 4th </option>  
                    <option value="5th"> 5th </option>  
                 </select>
                </div> 
            <div class="form-group">
                <label for="pcontact"> Student Image </label>
                <input type="file" name="picture" id="pcontact" class="form-control"/> 
            </div> 
            <div class="form-group">
                
                <input type="submit" value="Submit" name="add-student" class="btn btn-success mt-4" /> 
            </div> 
        </form>
    </div>
</div>