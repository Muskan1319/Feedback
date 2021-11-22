<?php 
 if(isset($_POST['regis'])){
   $email=$_POST['email'];
   $uname=$_POST['uname'];
   $password=$_POST['password'];
   $gender=@$_POST['gender'];
   $age=$_POST['age'];
 
   if(!empty($email) && !empty($uname) && !empty($password) && !empty($gender) && !empty($age) )
   {
     if(is_dir("users/".$uname)){
      $errMsg="Username is alredy exists";
     }
      else {
          mkdir("users/$uname");
           file_put_contents("users/$uname/details.txt",$uname."\n".$password."\n".$gender."\n".$age);
          header("location:welcome.php?uid=$uname");
          }
         
   }
   else {
     $errMsg="Plz fill the fields";
   }
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

    <title>register Page</title>
    <style>form{
  background: url(BG3.jpg);
  /*background-size: 300px 100px;*/
  margin-top:50px;
}
h1{
  font-size:40px;
  color:red;
  border:2px groove ;
  padding:10px;
  box-shadow:5px 10px red;
  
  
}
    </style>
  </head>
  <body>
    <main>
        <header>
            <h1 class="text-center"><u>Registeration</u></h1>
        </header>
        <section class="container">
          <?php 
          if(!empty($errMsg)){
            ?>
      <div class="alert alert-danger"> <?php echo $errMsg;?></div>
            <?php
          }
          ?>
    <form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1"><i class="fa fa-envelope">&nbsp;Email address</i></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label ><i class="fa fa-user-circle">&nbsp;Username</i></label>
    <input type="text" name="uname"class="form-control"  placeholder="Username" >
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"><i class="fa fa-lock">&nbsp;Password</i></label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label >Gender</label>
    <input type="radio"  name="gender" value="male"><i class="fa fa-male">&nbsp; Male </i>
    <input type="radio"  name="gender" value="female"><i class="fa fa-female">&nbsp; Female</i>
  </div>

 <div class="form-group">
    <label ><i class="fa fa-sort">&nbsp;Age</i></label>
    <input type="number" class="form-control" name="age" placeholder="Age">
  </div>

  <div class="form-group">
    <label ><i class="fa fa-info-circle">&nbsp;Department</i></label>
    <select class="form-select" aria-label="Default select example">
     <option selected>Choose One</option> 
     <option value="IT">IT</option>
     <option value="FINANCE">FINANCE</option>
     <option value="SALES">SALES</option>
    </select>
    </div>

  <button type="submit" name="regis" class="btn btn-success">Submit</button>
   
</form>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
