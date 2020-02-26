<?php
 include ("DATABASE_CONNECTION.php");
$url =(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
@$parts = parse_url($url);
@parse_str($parts['query'], $query);
@Delete_doctor($query['delete']);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    .bg-custom-1 {
  background-color: #85144b;
}

.bg-custom-2 {
background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
}
    
    
    </style>

    <title>DELETE DOCTORS</title>
</head>
<body>
<?php include ("header.php");
// include ("DATABASE_CONNECTION.php");
include ("sidebar.php");

?>
<div class="dis" style="display: flex margin-top:12rem;justify-content: center;padding-top: 4rem;height: 22rem;margin-left: 2rem;"> 

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
      <th scope="col">EMAIL</th>
      <th scope="col">PASSOWRD</th>
      <th scope="col">SPECIAL</th>
      <th scope="col">ACTION</th>


    </tr>
  </thead>
    <?php
   
    delete_view_doctor();?>
</body>
  </div>
</html>