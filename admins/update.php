<?php
include ("DATABASE_CONNECTION.php");
if(isset($_POST['stu_id'])){
   if(!empty($_POST['stu_id'])){
   // print_r($_POST['check_list']);
   // Loop to store and display values of individual checked checkbox.

   foreach($_POST['stu_id'] as $index => $selected){
       // echo $selected."</br>";
       // echo $_POST['stu_id1'][$index]."</br>";
       // echo $_POST['selected_type'][$index]."mmm</br>";
    //    if(isset($_POST['name'][$index])&&isset($_POST['age'][$index])&&isset($_POST['email'][$index])&&isset($_POST['password'][$index])&&
    //    isset($_POST['year_of_study'][$index])&&isset($_POST['date'][$index])&&isset($_POST['collage'][$index])){
  update_student_insert(
           $selected,$_POST['name'][$index],
       $_POST['email'][$index],$_POST['password'][$index],$_POST['year_of_study'][$index],
       $_POST['date'][$index],$_POST['collage'][$index]);
       }
    //    echo "someting";
       // ($email,$password,$stu_id,$sub_id,$toe,$mark,$grade)
       // ($stu_id,$name,$age,$email,$password,$year,$date,$collage)
   // echo $selected[1]."</br>";
   
   }
//    }
   }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPDATE STUDENTS INFO</title>

<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>



</head>
<body>
<?php include ("header.php");
// include ("DATABASE_CONNECTION.php");

?>
<?php include ("sidebar.php");

?>
</div></div>

<!-- ------------------- -->
<div class="dis" style="display: flex margin-top:12rem;justify-content: center;padding-top: 4rem;height: 22rem;margin-left: 2rem;"> 

<table class="table table-light table-sm" style="color:
#fff;
background-color:
#212529;
width: 100%;
margin-left: 18rem;
width: 56.5rem;
align-self:center;

">

  <thead>
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">YEAR OF STUDY</th>
      <th scope="col">collage</th>
      <th scope="col">DATE OF REG</th>
    </tr>
  </thead>
  <form method="POST" action="update.php">

     <?php 
    //  view_student(); 
    Update_student();
     
     ?>  </table>

   </form>
  
  </div>
 
  
  
   
</body>
</html>