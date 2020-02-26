<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    
    
    
    <title>administartor</title>
    <style>
    .bg-custom-1 {
  background-color: #85144b;
}

.bg-custom-2 {
background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
}
    
    
    </style>
</head>
<body>
    
<?php 
include ("sidebar.php");

include ("header.php");
include ("DATABASE_CONNECTION.php");
session_start();
echo __DIR__."memo";
?>

<div class="conts" style="display:grid;justify-content:center;">
        <div class="row" style="margin-left: 19.6rem;">

                <div class="col1">
                                <div class="card">
                
                                                <div class="card__side  front">
                                             
                                        <h4 style="font-size: 1.5rem;font-weight: bold;color:white;margin-top: 1.5rem; text-align:center;">STUDENTS</h4>
                                        <h1 style="text-align: center;margin-top: 24px;"><?php countq('student'); ?></h1>
                                                
                                                </div>
                                                <div class="card__side  back back1" style="color:white;text-align: center;">
                                                
                                                <a href="STUDENTS/view_students.php" style="color:white;text-decoration: none;"> VIEW</a>
                                                </div>
                                                </div>
                
                </div>
                

                        <div class="col1">
                                        <div class="card">
                        
                                                        <div class="card__side  front" style="background:#00aeef;">
                                                     
                                                        <h4 style="font-size: 1.5rem;font-weight: bold;color:white;margin-top: 1.5rem; text-align:center;">DOCTORS</h4>                                               
                                                        <h1 style="text-align: center;margin-top: 24px;"><?php countq('doctor'); ?></h1>
                                                        </div>
                                                        <div class="card__side  back back1"style="color:white;text-align: center;">
                                                        
                                                        <a href="DOCTORS/view_doctors.php" style="color:white;text-decoration: none;"> VIEW</a>
                                                        </div>
                                                        </div>
                        
                        </div>
                        

                                <div class="col1">
                                                <div class="card">
                                
                                                                <div class="card__side  front"style="background:#f33b3a;">
                                                             
                                                                <h1 style="font-size: 1.5rem;font-weight: bold;color:white;margin-top: 1.5rem; text-align:center;">SUBJECTS</h1>                                                       
                                                                <h1 style="text-align: center;margin-top: 24px;"><?php countq('subject'); ?></h1>
                                                                </div>
                                                                <div class="card__side  back back1"style="color:white;text-align:center;">
                                                                
                                                                <a href="SUBJECTS/view_subjects.php" style="color:white;text-decoration: none;"> VIEW</a>
                                                                </div>
                                                                </div>
                                
                                </div>
                </div>
                <div class="row1" style="margin-left: 20.2rem;">

                                <div class="col1">
                                                <div class="card">
                                
                                                                <div class="card__side  front" style="background:#fca43c;">
                                                             
                                                                <h1 style="font-size: 1.5rem;font-weight: bold;color:white;margin-top: 1.5rem; text-align:center;">POSTS</h1>                                                       
                                                                <h1 style="text-align: center;margin-top: 24px;"><?php countq('posts'); ?></h1>
                                                                </div>
                                                                <div class="card__side  back back1"style="color:white;text-align:center;">
                                                                
                                                                <a href="POSTS/view_posts.php" style="color:white;text-decoration: none;"> VIEW</a>
                                                                </div>
                                                                </div>
                                
                                </div>
                                
                                <div class="col1">
                                                        <div class="card">
                                        
                                                                        <div class="card__side  front" style="background:#11c2d8;">
                                                                     
                                                                        <h1 style="font-size: 1.5rem;font-weight: bold;color:white;margin-top: 1.5rem; text-align:center;">ABSENT</h1>                                                               
                                                                        
                                                                        </div>
                                                                        <div class="card__side  back back1"style="color:white;text-align:center;">
                                                                        
                                                                        VIEW
                                                                        </div>
                                                                        </div>
                                        
                                        </div> <div class="col1">
                                                        <div class="card">
                                        
                                                                        <div class="card__side  front" style="background:#f86c6b">
                                                                     
                                                                        <h1 style="font-size: 1.5rem;font-weight: bold;color:white;margin-top: 1.5rem; text-align:center;">  FAILED          </h1>                                                               
                                                                        
                                                                        </div>
                                                                        <div class="card__side  back back1">
                                                                        
                                                                        BACK
                                                                        </div>
                                                                        </div>
                                        
                                        </div></div>
                

      
</body>
</html>