


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>Document</title>

    <!-- <script>
   function get_val(){
   var x=0;
  var dom =document.getElementsByName('h');
 for (index = 0; index < dom.length; index++)
 if (dom[index].checked){
  console.log(dom[index].value);
      
    // alert(dom[index].value);
    var spl  = dom[index].value;
    var res = spl.split(" ");
    var d = [res];
    alert(d[0][0]);
    alert(d[0][1]);
  
    }
   
   }
    </script> -->
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
<!-- <div class="dis" style="display: block;justify-content: center;height: 22rem;margin-left: 28rem;"  > -->
<!-- <table class="table table-light" style="width:65rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">ACHIVEMNTS</caption>
      <div class="dis" style="display: flex;
      justify-content: center;margin-top: -18rem;"
          <tr>
      <th scope="col">Subject Code</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Hours</th>
      <th scope="col">Final Mark</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody> -->
  <?php
// Achiev($_SESSION['email'], $_SESSION['password']);
?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
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
  <!-- </tbody>
  </div> -->
<?php 
if(isset($_GET['check_lists'])){
  if(!empty($_GET['check_lists'])){
  // print_r($_GET['check_list']);
  // Loop to store and display values of individual checked checkbox.
  foreach($_GET['check_lists'] as $index => $selected){
      // echo $selected."hhhhhhhhhh</br>";
      // echo $_GET['stu_id1'][$index]."</br>";
      // echo $_GET['selected_type'][$index]."mmm</br>";
      reset_sub_mark($_SESSION['email'],$_SESSION['password'],$_GET['stu_id1'][$index],$_GET['sub_id1'][$index]
      );
  
      // ($email,$password,$stu_id,$sub_id,$toe,$mark,$grade)

  // echo $selected[1]."</br>";
  
  }
  }
  }


// reset_sub_mark($email,$password,$stu_id,$sub_id);

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
<!-- <tr>
  <th scope="row">1</th>
  <td>Mark</td>
  <td>Otto</td>
  <td>@mdo</td>
</tr>
<tr>
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
<?php


if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
//print_r($_POST['check_list']);
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
$y= explode(" ",$selected);
rgister_subject($y[0],$y[1],$y[2],$_SESSION['email'],$_SESSION['password']);
//echo $selected."</br>";
// echo $selected[1]."</br>";

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
<!-- <table class="table table-light" style="color:
#fff;
background-color:
#212529;
width: 100%;
margin-left: 8rem;
width: 56.5rem;
align-self:center;
"> -->
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
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
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
 <td><input type="submit" name="submit"  style="background:#f62459;border: none;height: 3.5rem;color:white;border-radius: 4px;width: 9rem;"  value="REGISTER">
</td>
</table>
</form>
</div>


</body>
</html>