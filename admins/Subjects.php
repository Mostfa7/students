
<?php

include ("DATABASE_CONNECTION.php");
if(isset($_POST["sub_name"])&&isset($_POST["sub_code"])&&isset($_POST["num_of_hours"])&&isset($_POST["selected"])&&isset($_POST["selected_year"])){

$sub_name = $_POST["sub_name"];
$sub_code = $_POST["sub_code"];
$num_of_hours = $_POST["num_of_hours"];
$doc_id = $_POST["selected"];
$year_of_study = $_POST["selected_year"];

CERATE_Sub($sub_name,$sub_code,$num_of_hours,$doc_id,$year_of_study);

}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <script type="text/javascript" src="js/bootstrap.js"></script>
  
    
    <title>ADD NEW SUBJECTS</title>
    
</head>
<body>
    <?php include ("header.php");
    include ("sidebar.php");
    ?>

    <div class="row" style="width: 100%;">
  
  <form method = "POST" action = "Subjects.php">
  <div class="form-row">
    <div class="col">
      <input type="text" name = "sub_name" class="form-control" placeholder="Subject Name">
      
    </div>
    <div class="col">
      <input type="text" name = "sub_code"  class="form-control" placeholder="Subject Code">
    </div>
    <div class="col">
      <input type="text" name = "num_of_hours"  class="form-control" placeholder="Number of hours">
    </div>
    <div class="form-group col-md-2 ">
     
      <select name = "selected_year" id="inputState" class="form-control"  style="width:auto;">
        <option selected >Year...</option>
        <option value = 1>first year</option>
        <option value = 2>second year</option>
        <option value = 3>third year</option>
        <option value = 4>forth year</option>
        <option value = 5>fifth year</option>
      </select>
    </div>
    <div class="form-group col-md-3">
     
      <select name = "selected" id="inputState" class="form-control" style="width:100%;">
        <option selected>Docotr...</option>
        <?php READ_Doc();?>
      </select>
    </div>
    
  </div>
  <button id = "btn-h "type="submit" class="btn btn-warning " style="width: 6rem;height: 41px;">Add</button>

</form>
  </div>
</div></div>
      
    </div>
  </div>
</div>
</body>
</html>