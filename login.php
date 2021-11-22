<?php 
  if(isset($_POST['login'])){
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $pass1=$password;
    if(!empty($uname) && !empty($password)){
      if(is_dir("users/$uname")){
          $fo=fopen("users/$uname/details.txt","r");
          fgets($fo);
          $pass=trim(fgets($fo));
           if($pass==$password){
            session_start();
            $_SESSION['sid']=$uname;
            $_SESSION['pass']=$pass;
            if(!empty($_POST['remember'])){
              setcookie('uname',$uname,time()+3600*24);
              setcookie('password',$pass1,time()+3600*24);
            }
            header("location:dashboard.php");
          }
      else{
        $errMsg="Enter correct username or password";
      }
    }
    else {
      $errMsg=" REGISTER YOURSELF FIRST!!! ";
    }
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login Page</title>
    <script>
      function cook(){
          if("<?php echo $_COOKIE['uname'];?>"!=undefined){
            if(document.getElementById("uname").value=="<?php echo $_COOKIE['uname'];?>"){
              document.getElementById("password").value="<?php echo $_COOKIE['password'];?>" ;
            }
            else {
              document.getElementById("password").value="" ;
            }
          }
      }
    </script>
  </head>
  <body>
    <main>
        <header class="jumbotron">
            <h1 class="text-center">Admin Panel</h1>
        </header>
        <section class="container">
        <?php 
          if(!empty($errMsg)){
            ?>
      <div class="alert alert-danger"> <?php echo $errMsg;?></div>
            <?php
          }
          ?>
        <form method="post">
  <div class="form-group">
    <label for="username"><i class="fa fa-user-circle">&nbsp;Username</i></label>
    <input type="text" name="uname" class="form-control" id="uname"  placeholder="Enter Username" onchange="cook()">
    <small id="unameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password"><i class="fa fa-lock">&nbsp;Password</i></label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" name="login" class="btn btn-primary">Submit</button>
    <a href="register.php"> New User </a>
</form>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
