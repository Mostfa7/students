

   <?php


include("../admins/DATABASE_CONNECTION.php");
session_start();
?>



<?php
$url =(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($url);
parse_str($parts['query'], $query);
if(isset($query['my']))
READ_Doc1($query['my']);


//-------------------------------
if(isset($_POST['submit'])){

    // Redirect("../students/messages.php");
    // send_messages($email,$password,$message,$conv_num,$doc_id);
}


?> 




 <?php
//  $url =(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//  $parts = parse_url($url);
//  parse_str($parts['query'], $query);
// $query['my'];
// $_SESSION['student'] =$query['my'];
// echo "ssssssss".$_SESSION['student'];
// if(isset($_POST['message']))

// {
//     $message = $_POST['message'];
    
    

// send_messages($_SESSION['email'],$_SESSION['password'],$message,$query['my']);
// echo "lll".$doc_id;


// send_messages($email,$password,$message,$conv_num,$doc_id)
// Redirect("../students/messages.php");
 
// }




?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    

<form action="#" method="POST">
<div class="view_messages" style="border:red;height: 12rem;width: 17.4rem;border-style: dashed;"></div>
<textarea name="message" id="" cols="30" rows="10" style="width: 272px;height: 48px;"></textarea>
<input type="submit" value="Send" name ="submit">






</form> -->






<!-- <form action="" method="post">

<input type="submit" value="Message" name="Message"> -->



<!-- </body>
</html> -->