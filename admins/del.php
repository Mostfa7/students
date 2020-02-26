<?php
 include ("DATABASE_CONNECTION.php");
$url =(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
@$parts = parse_url($url);
@parse_str($parts['query'], $query);
@Delete_student($query['delete']);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DELETE STUDENTS</title>
</head>
<body>
<?php include ("header.php");
// include ("DATABASE_CONNECTION.php");
include ("sidebar.php");

?>
<div class="dis" style="display: flex margin-top:12rem;justify-content: center;padding-top: 4rem;;margin-left: 2rem;"> 

<table class="table table-light table-sm" style="color:
#fff;
background-color:
#212529;
width: 100%;
margin-left: 18rem;
width: 56.5rem;
align-self:center;

">

<!-- <style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style> -->


  <thead>
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">YEAR OF STUDY</th>
      <th scope="col">DATE OF REG</th>
      <th scope="col">ACTION</th>


    </tr>
  </thead>
    <?php
   
    delete_view_student();?>
    </table>
</body>
</html>