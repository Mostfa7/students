<?php


function end_se(){
 session_start();
 session_unset(); 
header("Location: login.php");


}
end_se();


?>
