<?php
session_start();
include("../admins/DATABASE_CONNECTION.php");
successful_failed_checker();

if($_SESSION['email']==null||$_SESSION['password']==null)header('Location:login.php');

// // echo "kkkkkkkkkkkkkkk ".$student_nav_id;
// // $_SESSION["stu_id"]=$student_nav_id;
// echo "kkkkkkkkkkkkkkk".$_SESSION["stu_id"];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="css/sty.css">
    <link href="css/bootstrap.css" rel="stylesheet" />
    
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
	<link href="css/ct-navbar.css" rel="stylesheet" />  
  
    <!--     Font Awesome     -->
 
    
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	
	<script src="js/ct-navbar.js"></script>
    <style>
.hidden-xs:hover{
background:#f62459;


}</style>
</head>

<body>
 <div id="navbar-full">
    <div id="navbar">
       <!--    
        navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange  
        -->
        <nav class="navbar navbar-ct-white navbar-fixed-top " role="navigation"  style="background-color:#24252e;height: 9.7rem;">
          
          <!-- <div class="container" style =   "width: 153rem;"> -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="margin-left:1.5rem;margin-top: 12px;">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                    <div class="logo" >
                   
                    <img src="../admins/<?php nav_stu_item($_SESSION["email"],$_SESSION["password"],"stu_profile_img")?>" style="height: 5rem;
width: 6rem;
border-radius: 50%;">
                    </div>
                    <div class="brand">  </div>
                    <a class="navbar-brand navbar-brand-logo" style="margin-top: 6px;" href="profile.php?my=<?php nav_stu_item($_SESSION['email'],$_SESSION['password'],"id")?>"><?php nav_stu_item($_SESSION['email'],$_SESSION['password'],"studentName")?></a>

                     
              </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                    <!-- <li>
                        <a href="javascript:void(0);" data-toggle="search" class="hidden-xs">
                            <i class="pe-7s-search"></i>
                            <p style ="  margin: 5px 23px 0px;">Search</p>
                        </a>
                    </li>

                    <li>
                        <a href="messages.php">
                            <i class="pe-7s-mail" style ="margin: 5px 23px 0px;"> 
                                <span class="label">23</span>
                            </i>
                            <p > Messages</p>
                        </a>
                    </li>  -->
                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="pe-7s-user"></i>
                                <p>Account <b class="caret"></b></p>
                            </a>
                          <ul class="dropdown-menu">
                            <!-- <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something</a></li> -->
                            <li class="divider"></li>
                            <li><a href="end_session.php">logout</a></li>
                          </ul>
                    </li>
               </ul>
               <form class="navbar-form navbar-right navbar-search-form" role="search">                  
                 <div class="form-group">
                      <input type="text" value="" class="form-control" placeholder="Search...">
                 </div> 
              </form>
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
       <!--  end navbar -->

</div> <!-- end menu-dropdown -->

</body>
</html>