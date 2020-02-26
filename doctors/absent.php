


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
<!-- <script src = "js/bootstrap.js" ></script>    -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
    
<nav>
<?php

include ("doctor_nav.php");

?>
</nav>
<?php
include("sidebar/side_bar.php");
?>



<?php

if(isset($_GET['stu_id1'])){
    if(!empty($_GET['stu_id1'])){
    // print_r($_GET['check_list']);
    // Loop to store and display values of individual checked checkbox.
    foreach($_GET['stu_id1'] as $index => $selected){
       
        @Set_Absent_Present($_SESSION['email'],$_SESSION['password'],$_GET['stu_id1'][$index],$_GET['sub_id1'][$index],$_GET['checks'][$index],1);

    
    }
    }
    }

    




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>

<form action="absent.php" method="get">
    <div class="tabbable" style="width: 101rem;"> <!-- Only required for left/right tabs -->
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">First year</a></li>
        <li><a href="#tab2" data-toggle="tab">second year</a></li>
        <li><a href="#tab3" data-toggle="tab">third year</a></li>
        <li><a href="#tab4" data-toggle="tab">forth year</a></li>
        <li><a href="#tab5" data-toggle="tab">fifth year</a></li>
        <li><a href="#tab6" data-toggle="tab">VIEW ALL STUDENTS REGISTER</a></li>

      </ul>
      
      <div class="tab-content">
        <div class="tab-pane active" id="tab1">
        <?php 
             
//Get_subjects($_SESSION['email'],$_SESSION['password']);
         ?>
         <div class="set_mark_container">
         
         
         <div class="set_mark">
         <table class="table">
  <thead>
    <tr>
    <th scope="col">Student Name</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Student ID</th>
      <th scope="col">Subject ID</th>
      <th scope="col">Absent</th>
      <th scope="col">Present</th>
     
    </tr>
  </thead>
  <tbody>
 
<?php


Absent_Present($_SESSION['email'],$_SESSION['password'],1);

?>

    <!-- <tr>
      <th scope="row">Mostfa</th>
      <td>Alogrithms</td>
      <td>   <div class="form-group col-md-2 ">
     
     <select name = "selected_year" id="inputState" class="form-control" style="width:auto;height: 28px;">
       <option selected >......</option>
       <option value = 1>first exam</option>
       <option value = 2>second exam</option>
       <option value = 3>Final</option>
       
     </select>
   </div></td>
      <td><input type="text" name="" id="" placeholder="Mark"></td>
      <td><input type="text" name="" id="" placeholder="Degree"></td>
      <td style="color:green;">successful</td>
      
    </tr> -->
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
</div></div></div>
        
        
        <div class="tab-pane" id="tab2">
        <?php 
        //Get_marks($_SESSION['email'],$_SESSION['password']);
        // Get_marks_first_exam($_SESSION['email'],$_SESSION['password']);
        // Get_marks_second_exam($_SESSION['email'],$_SESSION['password']);
        // Get_marks_final($_SESSION['email'],$_SESSION['password']);

        //get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
        // Set_Marks(2);
        ?>
        
         <table class="table">
  <thead>
    <tr>
    <th scope="col">Student Name</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Student ID</th>
      <th scope="col">Subject ID</th>
      <th scope="col">Absent</th>
      <th scope="col">Present</th>
     
    </tr>
  </thead>
  <tbody>

<?php


Absent_Present($_SESSION['email'],$_SESSION['password'],2);

?> </tbody>
</table>

        </div>
        <div class="tab-pane" id="tab3">
       
         <table class="table">
  <thead>
    <tr>
    <th scope="col">Student Name</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Student ID</th>
      <th scope="col">Subject ID</th>
      <th scope="col">Absent</th>
      <th scope="col">Present</th>
     
    </tr>
  </thead>
  <tbody>

<?php


Absent_Present($_SESSION['email'],$_SESSION['password'],3);

?> </tbody>
</table>
</div>
          
        <div class="tab-pane" id="tab4">
     
         <table class="table">
  <thead>
    <tr>
    <th scope="col">Student Name</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Student ID</th>
      <th scope="col">Subject ID</th>
      <th scope="col">Absent</th>
      <th scope="col">Present</th>
    </tr>
  </thead>
  <tbody>

<?php


Absent_Present($_SESSION['email'],$_SESSION['password'],4);

?> </tbody>
</table>


        </div>
        <div class="tab-pane" id="tab5">
       
         <table class="table">
  <thead>
    <tr>
      <th scope="col">Student Name</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Student ID</th>
      <th scope="col">Subject ID</th>
      <th scope="col">Absent</th>
      <th scope="col">Present</th>
      
     
    </tr>
  </thead>
  <tbody>

<?php


Absent_Present($_SESSION['email'],$_SESSION['password'],5);

?> 


</tbody>
</table>

       
    </div> 
    <input type="submit" value="SET" style="border: none;width: 10rem;height: 4rem;background:#f62459;color:white;font-weight: bold;text-transform: uppercase;border-radius: 5px;">
    <input type="reset" value="reset" style="border: none;width: 10rem;height: 4rem;background:#1c1d24;color:white;font-weight: bold;text-transform: uppercase;border-radius: 5px;">
    </form>
   
</body>
</html>