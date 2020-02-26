


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>Register</title>

    
</head>
<body>
<nav>
<?php

include ("student_nav.php");

?>
</nav>


<?php
include("sidebar/side_bar.php");

?>

  
<?php 
if(isset($_GET['check_lists'])){
  if(!empty($_GET['check_lists'])){
  // print_r($_GET['check_list']);
  // Loop to store and display values of individual checked checkbox.
  foreach($_GET['check_lists'] as $index => $selected){
   
      reset_sub_mark($_SESSION['email'],$_SESSION['password'],$_GET['stu_id1'][$index],$_GET['sub_id1'][$index]
      );
  

  
  }
  }
  }



?>
  <div class="dis" style="display: block;
justify-content: center;height: 22rem;margin-left: 28rem;"  >
<table class="table table-light" style="width: 65rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">SUBJECT YOU HAVE TO CHECK FIRST</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;margin-top: -18rem;"
          <tr>
      <th scope="col">Subject Code</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Hours</th>
      <th scope="col">Final Mark</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
  <form action="register.php" method="get">
  <?php

subject_failed($_SESSION['email'], $_SESSION['password']);

?>
            <td><input type ='submit' value='SET' name='submit' style='background:
#f62459;
            border: none;
            height: 3.5rem;
            color:
            white;
            border-radius: 4px;
            width: 9rem;'>
</form>

</tbody>

</table>
<?php


if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
//print_r($_POST['check_list']);
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
$y= explode(" ",$selected);
rgister_subject($y[0],$y[1],$y[2],$_SESSION['email'],$_SESSION['password']);


}
}
}



?>

<form action="register.php" method="POST">
<table class="table table-light" style="width: 65rem;background-color:
#212529;color:
#fff;">
<div class="dis" style="display: flex;
justify-content: center;"  > 
    <tr>
      <th scope="col">Subject Code</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Hours</th>
      <th scope="col">Year Of Study</th>
    </tr>
  </thead>
  <tbody>
  <?php
get_uncommn_subject($_SESSION['email'],$_SESSION['password']);

?>
   
  </tbody>
 <td><input type="submit" name="submit"  style="background:#f62459;border: none;height: 3.5rem;color:white;border-radius: 4px;width: 9rem;"  value="REGISTER">
</td>
</table>
</form>
</div>


</body>
</html>
