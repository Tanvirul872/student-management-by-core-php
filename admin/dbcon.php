<?php 
 
  $link = mysqli_connect("localhost","root","","student_management"); 
  if($link){
echo "yes";  
  }else{
      echo "no";
  }

?>