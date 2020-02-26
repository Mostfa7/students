<?php
session_start();
include("../admins/DATABASE_CONNECTION.php");
if(isset($_POST['email'])&&isset($_POST['password'])){


$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];

check($_SESSION['email'],$_SESSION['password']);
 
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>login</title>
</head>
<body>
    <div class="full-container">
<div class="container">



<form method = "POST" action="login.php" class = "form-login" >
<img src="images/school.png" alt="" height= "90px" width= "100px" class = "form-img">
<input type="email" name="email" class="text1" placeholder = "  Email">

<input type="password" name = "password" class="text2" placeholder = "  Password">

<input type="submit" class= "sub-mit" value = "login">


</form>




</div>
</div>







</body>
</html>