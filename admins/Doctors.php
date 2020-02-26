<?php
include ("DATABASE_CONNECTION.php");
if(isset($_POST['name'])&&isset($_POST['age'])&&isset($_POST['specilization'])&&isset($_POST['email'])&&isset($_POST['password'])){
$name = $_POST['name'];
$age = $_POST['age'];
$specialization = $_POST['specilization'];
$email = $_POST['email'];
$password = $_POST['password'];

$target_dir = "doc_profile/";
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

CERATE_Doctor($name,$age,$specialization,$email,$password,$target_file);

}}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ADD NEW DOCTOR</title>
</head>
<body>
<?php 
include ("header.php");
include ("sidebar.php");

?>

<form method ="post" action = "Doctors.php" style="float: right;width: 55rem;margin-top: 4rem;"enctype="multipart/form-data">

    <div class="col mb-3 ">
      <input type="text" class="form-control w-50" required name = "name" placeholder="Name" size="50">
    
    </div>
    <div class="col mb-3">
      <input type="text" class="form-control w-50" required name = "age"placeholder="Age">
    </div>
    <div class="col mb-3">
      <input type="text" class="form-control w-50" required name = "specilization" placeholder="specialization">
    </div>
    <div class="col mb-3">
      <input type="text" class="form-control w-50" required name = "email" placeholder="email">
    </div>
    <div class="col mb-3">
      <input type="text" class="form-control w-50" required name = "password" placeholder="Password">
    </div>
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">

  </div>
  <div class="col-sm-10 war">
      <button type="submit" name="submit" class="btn btn-primary">Create</button>
    
</form>

<?php



?>
</body>
</html>


