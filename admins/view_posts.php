
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POSTS</title>

<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
<?php include ("header.php");
include ("DATABASE_CONNECTION.php");
include ("sidebar.php");

?>
<div class="dis" style="display: flex;
justify-content: center;"  > 
<table class="table table-light" style="color:
#fff;
background-color:
#212529;
width: 100%;
margin-left: 18rem;
width: 56.5rem;
align-self:center;
margin-top: 6rem;
width: 77.5rem;
">
  <thead>
    <tr>
      <th scope="col">Doctor</th>
      <th scope="col">POST</th>
      <th scope="col">POST DATE</th>
     
    </tr>
  </thead>

     <?php view_posts();?>
    <!-- </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody> -->
</table>
</div>
</body>
</html>