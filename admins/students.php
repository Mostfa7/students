<?php
include ("DATABASE_CONNECTION.php");
if(isset($_POST['name'])&&isset( $_POST['age'])&&isset($_POST['collage'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['date'])&&isset($_POST['year_of_study'])




){
$name = $_POST['name'];
$age = $_POST['age'];
$collage = $_POST['collage'];
$email = $_POST['email'];
$password = $_POST['password'];
$date = $_POST['date'];
$target_dir = "profile/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// @$img=$_FILES['img']['tmp_name'];
$yos =  $_POST['year_of_study'];

$target_dir = "profile/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
       // echo $_FILES["fileToUpload"]["name"];
        // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
        if(move_uploaded_file( $_FILES["fileToUpload"]["tmp_name"],$target_file)){

        }
        $uploadOk = 1;
    } else {
//        echo "File is not an image.";
        $uploadOk = 0;
    }

CERATE_USERS($name,$age,$collage,$email,$password,$date,$target_file,$yos);


}}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>ADD NEW STUDENT</title>
</head>
<body>
<?php include ("header.php");
include ("sidebar.php");

?>
<!-- <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Add New Students</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div> -->
<form  action = "students.php" style="float: right;width: 55rem;margin-top: 4rem;" method="post" enctype="multipart/form-data">

    <div class="col mb-3 ">
      <input type="text" class="form-control w-50" required name = "name" placeholder="Name" size="50">
    
    </div>
    <div class="col mb-3">
      <input type="date" class="form-control w-50" required name = "age"placeholder="Age">
    </div>
    <div class="col mb-3">
      <input type="text" class="form-control w-50" required name = "collage" placeholder="collage">
    </div>
    <div class="col mb-3">
      <input type="text" class="form-control w-50" required name = "email" placeholder="email">
    </div>
    <div class="col mb-3">
      <input type="text" class="form-control w-50" required name = "password" placeholder="Password">
    </div>
    <div class="col mb-3">
      <input type="text" class="form-control w-50" required name = "year_of_study" placeholder="year_of_study">
    </div>
    <div class="col mb-3">
      <input type="date" class="form-control w-50" required name = "date">
    </div>

    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">




    
    <!-- <label for="exampleFormControlFile1">UPLOAD PHOTO</label>
    <input type="file" name ="file" class="form-control-file" id="exampleFormControlFile1"> -->
  


  </div>
  <div class="col-sm-10 war">
      <input type="submit" name="submit" class="btn btn-primary">
   
  

</form>

<?php




?>
</body>
</html>

