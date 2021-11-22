<html>
    <head>
        <style>
    nav{
        background:black;
        }
        .nav-link{
            color:white;
        }
        </style>
   </head>

<nav class="navbar navbar-expand-lg text-light">
  <a class="navbar-brand text-warning" href="#"><i class="fa fa-university">&nbsp;</i>NEOSOFT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php"><i class="fa fa-home">&nbsp;Home</i> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="register.php"><i class="fa fa-registered">&nbsp;Register</i></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="login.php"><i class="fa fa-sign-in">&nbsp;Login</i></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa fa-hand-o-right">&nbsp;Welcome :<?php echo $sid;?></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa fa-power-off">&nbsp;Logout</i></a>
      </li>
    </ul>
  </div>
</nav>