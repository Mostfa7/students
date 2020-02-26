
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- style="background-image: url('11685.png');" -->
<?php

include ("student_nav.php");

?>
</nav>


<?php
include("sidebar/side_bar.php");
?>




   <?php

// include("../admins/DATABASE_CONNECTION.php");


// $url =(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// $parts = parse_url($url);
// parse_str($parts['query'], $query);
// READ_DB($query['my']);
?>
<?php
if(isset($_POST["submit1"])) {
$target_dir = "profile/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
    //    echo $_FILES["fileToUpload"]["tmp_name"];
        // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
        if(move_uploaded_file( $_FILES["fileToUpload"]["tmp_name"],$target_file)){

        }
        $uploadOk = 1;
    }} else {
//        echo "File is not an image.";
        $uploadOk = 0;
    }
   prof_update($_SESSION['email'],$_SESSION['password'],$target_file,'img');
}
if(isset($_POST['submit2'])){
if($_POST['pas1']==$_POST['pas2']){
    prof_update($_SESSION['email'],$_SESSION['password'],$_POST['pas1'],'password');
    // header('Location:login.php');


}
else echo "PASSWORD DOESN'T MATCH";



}



?>
<div class="prof-full">
<div class="prof-container">

<div class="sec-up" style="display: flex;flex-direction: column;align-items: center;margin-left: 27rem;">
<h3><?php nav_stu_item($_SESSION['email'],$_SESSION['password'],'studentName');?></h3>

<img src="../admins/<?php nav_stu_item($_SESSION['email'],$_SESSION['password'],'stu_profile_img');?>" alt="img here" style=" width: 29rem;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
height: 25rem;">

<form action="#" method="post"  enctype="multipart/form-data" style="display: flex;justify-content: space-between;width: 29rem;height: 6rem;align-items: center;">
<button type="submit" name='submit1' style="width: 7rem;">SAVE</button>

<input type="file" name="fileToUpload" id="fileToUpload" value="upload"  style="width: 7rem;">

</form>
</div>


<div class="sec-bottom" style="display: flex;justify-content: space-between;width: 94rem;">
<div class="pre-cont">
<div class="pre" style="background:
#24252e;

color:
white;

width: 36rem;

height: 6rem;

display: flex;

justify-content: center;

align-items: center;

align-self: center;">
<h3 style="height: 4.3rem; text-transform:upper-case;">personal informations</h3>

</div>
<?php 
// include("../admins/DATABASE_CONNECTION.php");


$url =(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($url);
parse_str($parts['query'], $query);
READ_DB($query['my']);

?>

</div>
<div class="password-cont" style="margin-right: -28rem;">
<div class="password"
style="background:
#24252e;

color:
white;

width: 36rem;

height: 6rem;

display: flex;

justify-content: center;

align-items: center;

align-self: center;"
>
<h3>change password</h3>
</div>
<form action="#" method="post">
<p style="margin-top: 1rem;">NEW PASSWORD</p><input type="password" name="pas1" required style="width: 26rem;height: 4rem;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<p style="margin-top: 1rem;">RE-TYPE PASSWORD</p><input type="password" required name="pas2" style="width: 26rem;height: 4rem;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><br>
<input type="submit" value="SAVE" name="submit2" id = "error-message" style="margin-top: 1rem;margin-top: 1rem;border: none;background:#1c1d24;color:white;width: 9rem;height: 3rem;">
</form>
</div>

</div>




</div>

</div>









</body>
</html>