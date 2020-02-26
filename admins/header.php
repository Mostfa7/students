
<div class="n">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"style="position:fixed;width:100%;">
  <a class="navbar-brand" href="#">ADMIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="view_students.php">STUDENTS </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view_doctors.php">DOCTORS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="view_subjects.php">SUBJECTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="view_posts.php">POSTS</a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form> -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-sm" style="height: 2.5rem;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-list-4">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="images/admin-settings-male.png" width="40" height="40" class="rounded-circle">
          <? 
// session_start();
// include ("DATABASE_CONNECTION.php");
// ?>

       <!-- </a> -->
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="left: -72px;">
        
          <a class="dropdown-item" href="end_session.php">Log out</a>
        </div>
      </li>   
    </ul>
  </div>
</nav>
  </div>
</nav></div>