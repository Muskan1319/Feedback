<?php 
 session_start();
 $sid=$_SESSION['sid'];
 if(empty($sid)){
   header("location:login.php");
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard Page</title>
    <style>
      body{
        background:url(1.jpg);
        background-size:100% 100%;
      }
      .sidenav {
  height: 100%;
  width: 240px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
  margin-top:55px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}
.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #04AA6D;
  color: white;
  padding: 30px 28px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  margin:250px  150px;
}

.block:hover {
  background-color: #ddd;
  color: black;
}
</style>
  </head>
  <body>
    <main>
        <header>
            <?php include("nav.php");?>
        </header>
        <section class="row container">
        <aside class="col-sm-4">
        <div class="sidenav">
  <a href="#"><i class="fa fa-home">Dashboard</i></a>
  <a href="#"><i class="fa fa-bell">Notifications</i></a>
  <a href="#"><i class="fa fa-group">Work From Home</i></a>
  <a href="#"><i class="fa fa-group">Attendence</i></a>
  <a href="#"><i class="fa fa-wpforms">Assigned Work<i></a>
  <a href="#"><i class="fa fa-file-text-o">CV</i></a>
  <a href="#"><i class="fa fa-plane">Holiday List</i></a>
  <a href="#"><i class="fa fa-mail-forward">Leave Application<i></a>
  <a href="#"><i class="fa fa-mail-forward">PLI/Variable Payouts</i></a>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
  <a href="#"><i class="fa fa-mail-forward">Travelling Allowance</i></a>
  <a href="#"><i class="fa fa-group">Refer a Buddy</i></a>

</div>
</aside>
<aside class="col-sm-8">
<div class="main">
<button type="button" class="block"><a href="feedback.php">Click here to fill feeback form</a></button>
</div>
</aside>
  
</section>

</main>
</body>