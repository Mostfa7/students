




<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/sty.css">
    
    <title>Home</title>
    <script> 


 function toggle(idx){
var element = document.getElementById(idx+1);
console.log(element);
if(element.style.display=="block")
element.style.display="none";
else 
element.style.display="block";



}






}

</script>
</head>
<body>
<nav>

<?php

include ("doctor_nav.php");

?>
</nav>

<?php

include ("sidebar/side_bar.php");

?>
<?php

// if(isset($_POST['comment_body'])){
    create_view_post($_SESSION['email'],$_SESSION['password']); 
    // echo $_POST['post_body'];
if(isset($_POST['post_body'])){
    if(strlen($_POST['post_body'])>0)
create_post($_POST['post_body'],$_SESSION['email'],$_SESSION['password']);    
    
}


// include("sidebar/side_bar.php");
if(isset($_GET['m']))
search_enginez($_SESSION['email'],$_SESSION['password'],$_GET['m']);
else posts_doc ($_SESSION['email'],$_SESSION['password']);




// include ("../admins/DATABASE_CONNECTION.php");
// include ("posts.php");

// posts (1,1,$_SESSION['email'],$_SESSION['password']);
posts_doc ($_SESSION['email'],$_SESSION['password']);
// echo "<br>";
// posts (2,2,"ama@gmail.com","987946");

// posts (2,2);
// posts (3,3);
// posts (4,4);
// posts (5,5);
// posts (6,6);
// posts (7,7);
// posts (8,8);
// posts ($like_id,$dislike_id,$img_prof,$name_doc,$post_body);
?>

</div>
</div>

</body>
</html>