<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background:url("BG.jpg");
                text:center;
                font-size:18px;
                color:white;
                padding-top:50px;
                padding-left:50px;
            }
 </style>
</head>
 <body>
        <h1>Welcome user you are successfully registered</h1>
        <h4>Your registered id is <?php echo $_GET['uid'];?></h4>
        <p> For go to login page <a href="login.php">click here</a> </p>
    </body>
</html>