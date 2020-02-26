<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>Document</title>
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
    <div class="tabbable" style="width: 101rem;"> <!-- Only required for left/right tabs -->
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">Subjects</a></li>
        <li><a href="#tab2" data-toggle="tab">New degree</a></li>
        <li><a href="#tab3" data-toggle="tab">Transcript</a></li>      <h6 href="#" style="float: right;

font-size:21px; color:green;">GPA FOR NOW <span style="color:yellowgreen;">[ <?php GPA_FOR_NOW($_SESSION['email'],$_SESSION['password']); ?> ]</span> </h6>
  

      </ul>
   
      <div class="tab-content">
        <div class="tab-pane active" id="tab1">
        <div class="dis" style="display: flex;
justify-content: center;height: auto;"  > 
<table class="table table-light" style="color:
#fff;
background-color:
#212529;
width: 100%;
margin-left: 12rem;
width: 56.5rem;
align-self:center;
margin-top: 4rem;
">
  <thead>
    <tr>
  
      <th scope="col">SUBJECT NAME</th>
      <th scope="col">CODE</th>
      <th scope="col">HOURS</th>
      <th scope="col">YEAR</th>
    
    </tr>
  </thead>

  <?php 
             
             Get_subjects($_SESSION['email'],$_SESSION['password']);
         ?>    <!-- </tr>
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
    </tr>
  </tbody> -->
</table>
</div>


        
        </div>
        <div class="tab-pane" id="tab2">



        <div class="dis" style="display: flex;
justify-content: center;height: 22rem;
width: 130rem;


margin-top: 6rem;"  > 
        <table class="table table-light" style="width: 39rem;background-color:
#212529;margin-right: 1rem;color:
#fff;
">
 
      <caption style="background-color: #212529;">FIRST EXAM</caption>

<!-- <table class="table table-light" style="color:
#fff;
background-color:
#212529;
width: 100%;
margin-left: 8rem;
width: 56.5rem;
align-self:center;
"> -->
   
  </thead>
  <tbody>
    
<tr>
<th scop=col>SUBJECT</th>

        <th scop=col>MARK</th>
      <th scop=col>GRADE</th>
</tr>
<?php
// get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
view_marks_first_exam($_SESSION['email'],$_SESSION['password']);

?>  
  </tbody>
</td>
</table>



<table class="table table-light" style="width: 39rem;background-color:
#212529;color:
#fff;margin-right: 1rem;">
 
      <caption style="background-color: #212529;">SECOND EXAM</caption>
<div class="dis" style="display: flex;
justify-content: center;height: 22rem;"  > 
<!-- <table class="table table-light" style="color:
#fff;
background-color:
#212529;
width: 100%;
margin-left: 8rem;
width: 56.5rem;
align-self:center;
"> -->
   
  </thead>
  <tbody>
    
<tr>
<th scop=col>SUBJECT</th>

        <th scop=col>MARK</th>
      <th scop=col>GRADE</th>
</tr>
<?php
// get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
view_marks_second_exam($_SESSION['email'],$_SESSION['password']);

?>  
  </tbody>
</td>
</table>




<table class="table table-light" style="width: 39rem;background-color:
#212529;color:
#fff;margin-right: 1rem;">
 
      <caption style="background-color: #212529;">FINAL EXAM</caption>
<div class="dis" style="display: flex;
justify-content: center;height: 22rem;




"  > 
<!-- <table class="table table-light" style="color:
#fff;
background-color:
#212529;
width: 100%;
margin-left: 8rem;
width: 56.5rem;
align-self:center;
"> -->
   
  </thead>
  <tbody>
    
<tr>
<th scop=col>SUBJECT</th>

        <th scop=col>MARK</th>
      <th scop=col>GRADE</th>
</tr>
<?php
// get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
view_marks_final_exam($_SESSION['email'],$_SESSION['password']);

?>  
  </tbody>
</td>
</table>















</div></div>
        <div class="tab-pane" id="tab3">
          
          <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" style="text-transform: uppercase;font-weight: bold;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          First Year
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      
      <div class="dis" style="display: flex;
justify-content: center;height: 22rem;margin-left: 28rem;"  >
      <table class="table table-light" style="width: 39rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">FIRST EXAM</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;
      
      
      
      
      "  > 
      <!-- <table class="table table-light" style="color:
      #fff;
      background-color:
      #212529;
      width: 100%;
      margin-left: 8rem;
      width: 56.5rem;
      align-self:center;
      "> -->
         
        </thead>
        <tbody>
          
      <tr>
      <th scop=col>SUBJECT</th>
      
              <th scop=col>MARK</th>
            <th scop=col>GRADE</th>
      </tr>
      <?php
      // get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
      // view_marks_final_exam($_SESSION['email'],$_SESSION['password']);
            // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
            Get_marks_first_exam($_SESSION['email'],$_SESSION['password'],1);
      ?>  
        </tbody>
      </td>
      </table>
      <table class="table table-light" style="width: 39rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">SECOND EXAM</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;
      
      
      
      
      "  > 
      <!-- <table class="table table-light" style="color:
      #fff;
      background-color:
      #212529;
      width: 100%;
      margin-left: 8rem;
      width: 56.5rem;
      align-self:center;
      "> -->
         
        </thead>
        <tbody>
          
      <tr>
      <th scop=col>SUBJECT</th>
      
              <th scop=col>MARK</th>
            <th scop=col>GRADE</th>
      </tr>
      <?php
      // get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
      // view_marks_final_exam($_SESSION['email'],$_SESSION['password']);
            // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
            Get_marks_second_exam($_SESSION['email'],$_SESSION['password'],1);
      ?>  
        </tbody>
      </td>
      </table>
      <table class="table table-light" style="width: 39rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">FINAL</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;
      
      
      
      
      "  > 
      <!-- <table class="table table-light" style="color:
      #fff;
      background-color:
      #212529;
      width: 100%;
      margin-left: 8rem;
      width: 56.5rem;
      align-self:center;
      "> -->
         
        </thead>
        <tbody>
          
      <tr>
      <th scop=col>SUBJECT</th>
      
              <th scop=col>MARK</th>
            <th scop=col>GRADE</th>
      </tr>
      <?php
      // get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
      // view_marks_final_exam($_SESSION['email'],$_SESSION['password']);
            // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
            Get_marks_final($_SESSION['email'],$_SESSION['password'],1);
      ?>  
        </tbody>
      </td>
      </table>
      </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" style="text-transform: uppercase;font-weight: bold;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Second Year
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <div class="dis" style="display: flex;
justify-content: center;height: 22rem;margin-left: 28rem;"  >
      <table class="table table-light" style="width: 39rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">FIRST EXAM</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;
      
      
      
      
      "  > 
      <!-- <table class="table table-light" style="color:
      #fff;
      background-color:
      #212529;
      width: 100%;
      margin-left: 8rem;
      width: 56.5rem;
      align-self:center;
      "> -->
         
        </thead>
        <tbody>
          
      <tr>
      <th scop=col>SUBJECT</th>
      
              <th scop=col>MARK</th>
            <th scop=col>GRADE</th>
      </tr>
      <?php
      // get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
      // view_marks_final_exam($_SESSION['email'],$_SESSION['password']);
            // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
            Get_marks_first_exam($_SESSION['email'],$_SESSION['password'],2);
      ?>  
        </tbody>
      </td>
      </table>
      <table class="table table-light" style="width: 39rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">SECOND EXAM</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;
      
      
      
      
      "  > 
      <!-- <table class="table table-light" style="color:
      #fff;
      background-color:
      #212529;
      width: 100%;
      margin-left: 8rem;
      width: 56.5rem;
      align-self:center;
      "> -->
         
        </thead>
        <tbody>
          
      <tr>
      <th scop=col>SUBJECT</th>
      
              <th scop=col>MARK</th>
            <th scop=col>GRADE</th>
      </tr>
      <?php
      // get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
      // view_marks_final_exam($_SESSION['email'],$_SESSION['password']);
            // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
            Get_marks_second_exam($_SESSION['email'],$_SESSION['password'],2);
      ?>  
        </tbody>
      </td>
      </table>
      <table class="table table-light" style="width: 39rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">FINAL</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;
      
      
      
      
      "  > 
      <!-- <table class="table table-light" style="color:
      #fff;
      background-color:
      #212529;
      width: 100%;
      margin-left: 8rem;
      width: 56.5rem;
      align-self:center;
      "> -->
         
        </thead>
        <tbody>
          
      <tr>
      <th scop=col>SUBJECT</th>
      
              <th scop=col>MARK</th>
            <th scop=col>GRADE</th>
      </tr>
      <?php
      // get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
      // view_marks_final_exam($_SESSION['email'],$_SESSION['password']);
            // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
            Get_marks_final($_SESSION['email'],$_SESSION['password'],2);
      ?>  
        </tbody>
      </td>
      </table>
      </div>
      </div>
      <?php
      //Get_marks($_SESSION['email'],$_SESSION['password'],1);
      // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],2); memo
      ?>

      </div>
    </div>
  
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" style="text-transform: uppercase;font-weight: bold;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Third Year
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      <div class="card-body">
      <div class="dis" style="display: flex;
justify-content: center;height: 22rem;margin-left: 28rem;"  >
      <table class="table table-light" style="width: 39rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">FIRST EXAM</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;
      
      
      
      
      "  > 
      <!-- <table class="table table-light" style="color:
      #fff;
      background-color:
      #212529;
      width: 100%;
      margin-left: 8rem;
      width: 56.5rem;
      align-self:center;
      "> -->
         
        </thead>
        <tbody>
          
      <tr>
      <th scop=col>SUBJECT</th>
      
              <th scop=col>MARK</th>
            <th scop=col>GRADE</th>
      </tr>
      <?php
      // get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
      // view_marks_final_exam($_SESSION['email'],$_SESSION['password']);
            // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
            Get_marks_first_exam($_SESSION['email'],$_SESSION['password'],3);
      ?>  
        </tbody>
      </td>
      </table>
      <table class="table table-light" style="width: 39rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">SECOND EXAM</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;
      
      
      
      
      "  > 
      <!-- <table class="table table-light" style="color:
      #fff;
      background-color:
      #212529;
      width: 100%;
      margin-left: 8rem;
      width: 56.5rem;
      align-self:center;
      "> -->
         
        </thead>
        <tbody>
          
      <tr>
      <th scop=col>SUBJECT</th>
      
              <th scop=col>MARK</th>
            <th scop=col>GRADE</th>
      </tr>
      <?php
      // get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
      // view_marks_final_exam($_SESSION['email'],$_SESSION['password']);
            // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
            Get_marks_second_exam($_SESSION['email'],$_SESSION['password'],3);
      ?>  
        </tbody>
      </td>
      </table>
      <table class="table table-light" style="width: 39rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">FINAL</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;
      
      
      
      
      "  > 
      <!-- <table class="table table-light" style="color:
      #fff;
      background-color:
      #212529;
      width: 100%;
      margin-left: 8rem;
      width: 56.5rem;
      align-self:center;
      "> -->
         
        </thead>
        <tbody>
          
      <tr>
      <th scop=col>SUBJECT</th>
      
              <th scop=col>MARK</th>
            <th scop=col>GRADE</th>
      </tr>
      <?php
      // get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
      // view_marks_final_exam($_SESSION['email'],$_SESSION['password']);
            // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
            Get_marks_final($_SESSION['email'],$_SESSION['password'],3);
      ?>  
        </tbody>
      </td>
      </table>
      </div>
      </div>      </div>
    </div>
    <div class="card">
    <div class="card-header" id="headingforth">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" style="text-transform: uppercase;font-weight: bold;" type="button" data-toggle="collapse" data-target="#collapseforth" aria-expanded="false" aria-controls="collapseforthree">
          forth Year
        </button>
      </h2>
    </div>
    <div id="collapseforth" class="collapse" aria-labelledby="headingforth" data-parent="#accordionExample">
      <div class="card-body">
      <div class="card-body">
      <div class="dis" style="display: flex;
justify-content: center;height: 22rem;margin-left: 28rem;"  >
      <table class="table table-light" style="width: 39rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">FIRST EXAM</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;
      
      
      
      
      "  > 
      <!-- <table class="table table-light" style="color:
      #fff;
      background-color:
      #212529;
      width: 100%;
      margin-left: 8rem;
      width: 56.5rem;
      align-self:center;
      "> -->
         
        </thead>
        <tbody>
          
      <tr>
      <th scop=col>SUBJECT</th>
      
              <th scop=col>MARK</th>
            <th scop=col>GRADE</th>
      </tr>
      <?php
      // get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
      // view_marks_final_exam($_SESSION['email'],$_SESSION['password']);
            // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
            Get_marks_first_exam($_SESSION['email'],$_SESSION['password'],4);
      ?>  
        </tbody>
      </td>
      </table>
      <table class="table table-light" style="width: 39rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">SECOND EXAM</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;
      
      
      
      
      "  > 
      <!-- <table class="table table-light" style="color:
      #fff;
      background-color:
      #212529;
      width: 100%;
      margin-left: 8rem;
      width: 56.5rem;
      align-self:center;
      "> -->
         
        </thead>
        <tbody>
          
      <tr>
      <th scop=col>SUBJECT</th>
      
              <th scop=col>MARK</th>
            <th scop=col>GRADE</th>
      </tr>
      <?php
      // get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
      // view_marks_final_exam($_SESSION['email'],$_SESSION['password']);
            // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
            Get_marks_second_exam($_SESSION['email'],$_SESSION['password'],4);
      ?>  
        </tbody>
      </td>
      </table>
      <table class="table table-light" style="width: 39rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">FINAL</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;
      
      
      
      
      "  > 
      <!-- <table class="table table-light" style="color:
      #fff;
      background-color:
      #212529;
      width: 100%;
      margin-left: 8rem;
      width: 56.5rem;
      align-self:center;
      "> -->
         
        </thead>
        <tbody>
          
      <tr>
      <th scop=col>SUBJECT</th>
      
              <th scop=col>MARK</th>
            <th scop=col>GRADE</th>
      </tr>
      <?php
      // get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
      // view_marks_final_exam($_SESSION['email'],$_SESSION['password']);
            // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
            Get_marks_final($_SESSION['email'],$_SESSION['password'],4);
      ?>  
        </tbody>
      </td>
      </table>
      </div>
      </div>      </div></div>
      <div class="card">
    <div class="card-header" id="headingfifth">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" style="text-transform: uppercase;font-weight: bold;" type="button" data-toggle="collapse" data-target="#collapsefifth" aria-expanded="false" aria-controls="collapseforthree">
          fifth Year
        </button>
      </h2>
    </div>
    <div id="collapsefifth" class="collapse" aria-labelledby="headingfifth" data-parent="#accordionExample">
      <div class="card-body">
      <div class="card-body">
      <div class="dis" style="display: flex;
justify-content: center;height: 22rem;margin-left: 28rem;"  >
      <table class="table table-light" style="width: 39rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">FIRST EXAM</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;
      
      
      
      
      "  > 
      <!-- <table class="table table-light" style="color:
      #fff;
      background-color:
      #212529;
      width: 100%;
      margin-left: 8rem;
      width: 56.5rem;
      align-self:center;
      "> -->
         
        </thead>
        <tbody>
          
      <tr>
      <th scop=col>SUBJECT</th>
      
              <th scop=col>MARK</th>
            <th scop=col>GRADE</th>
      </tr>
      <?php
      // get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
      // view_marks_final_exam($_SESSION['email'],$_SESSION['password']);
            // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
            Get_marks_first_exam($_SESSION['email'],$_SESSION['password'],5);
      ?>  
        </tbody>
      </td>
      </table>
      <table class="table table-light" style="width: 39rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">SECOND EXAM</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;
      
      
      
      
      "  > 
      <!-- <table class="table table-light" style="color:
      #fff;
      background-color:
      #212529;
      width: 100%;
      margin-left: 8rem;
      width: 56.5rem;
      align-self:center;
      "> -->
         
        </thead>
        <tbody>
          
      <tr>
      <th scop=col>SUBJECT</th>
      
              <th scop=col>MARK</th>
            <th scop=col>GRADE</th>
      </tr>
      <?php
      // get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
      // view_marks_final_exam($_SESSION['email'],$_SESSION['password']);
            // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
            Get_marks_second_exam($_SESSION['email'],$_SESSION['password'],5);
      ?>  
        </tbody>
      </td>
      </table>
      <table class="table table-light" style="width: 39rem;background-color:
      #212529;color:
      #fff;margin-right: 1rem;">
       
            <caption style="background-color: #212529;">FINAL</caption>
      <div class="dis" style="display: flex;
      justify-content: center;height: 22rem;
      
      
      
      
      "  > 
      <!-- <table class="table table-light" style="color:
      #fff;
      background-color:
      #212529;
      width: 100%;
      margin-left: 8rem;
      width: 56.5rem;
      align-self:center;
      "> -->
         
        </thead>
        <tbody>
          
      <tr>
      <th scop=col>SUBJECT</th>
      
              <th scop=col>MARK</th>
            <th scop=col>GRADE</th>
      </tr>
      <?php
      // get_uncommn_subject($_SESSION['email'],$_SESSION['password']);
      // view_marks_final_exam($_SESSION['email'],$_SESSION['password']);
            // get_all_marks_by_year($_SESSION['email'],$_SESSION['password'],1);
            Get_marks_final($_SESSION['email'],$_SESSION['password'],5);
      ?>  
        </tbody>
      </td>
      </table>
      </div>
      </div>      </div>
    </div>
  </div>
</div>
        </div>
        </div>
        
      </div>
    </div>
</body>
</html>