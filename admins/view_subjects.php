<?php
 include ("DATABASE_CONNECTION.php");
$url =(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(isset($parts)){
$parts = parse_url($url);
parse_str($parts['query'], $query);}
if(isset($query))
Delete_subject($query['delete']);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SUBJECTS</title>
</head>
<body>
<?php include ("header.php");
// include ("DATABASE_CONNECTION.php");
include ("sidebar.php");

?>
<div class="dis" style="display: flex margin-top:12rem;justify-content: center;padding-top: 1rem;height: 22rem;"> 

<table class="table table-light table-sm" style="color:
#fff;
background-color:
#212529;
width: 100%;
margin-left: 28rem;
width: 56.5rem;
align-self:center;
margin-top: 5rem;
">

<!-- <style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style> -->


  <thead>
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">CODE</th>
      <th scope="col">HOURS</th>
      <th scope="col">YEAR</th>

      <th scope="col">DOCTOR</th>


    </tr>
  </thead>
    <?php
   
    view_subject();?>
</body>
</html>