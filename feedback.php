<?php 
error_reporting(0);
 if(isset($_POST['submit'])){
  $employee=$_POST['emp'];
  $status=$_POST['status'];
  $job=$_POST['job'];
  $review=$_POST['review'];
  $pros=$_POST['pros'];
  $cons=$_POST['cons'];
  $advice=$_POST['advice'];
  $target_path="e:/";
  $target_path=$target_path.basename($_FILE['att']['tmp_name']);
  if(!empty($emp) && !empty($status) && !empty($job) && !empty($review) && !empty($pros) && !empty($cons)  && !empty($advice) && !empty($tmp))
  {
    $ext=pathinfo($target_path,PATHINFO_EXTENSION);
    $fname="document-".time()."_".rand().".$ext";
    if($ext==".pdf" || $ext==".txt"){
       if(move_upload_file($_FILE['att']['tmp_name'],$target_path))
{
     $Msg="File uploaded successfully";
}  
else
{
  $MsgErr="Sorry File not uploaded,please try again!!";
}
 }
 else
 $MsgErr="Please!!Fill the details";
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

    <title>feedback Page</title>
    <script src="jquery-3.6.0.min.js"></script>
    <style>
      *{
        margin:0;
        padding:0;
        box-sizing: border-box;
      }
    main{
    
    }

      body{
        font-family:'Open Sans', sans-serif;
        font-size:16px;
        background-color: #f4f4f4;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        min height:120vh;
        margin:0;
        background:url(o.jpg);
      }
      
    .container{
     background-color:#fff;
     padding:1em;
     border-radius:5px;
     box-shadow:0 2px 5px rgba(0,0,0,0.3);
     width:450px;
      }
      form{
        padding:10px 20px;
      }
      form h1{
        font-size:2em;
        text-align:center;
        margin-bottom:10px;
        color:green;
      }
      .form-group{
        margin-bottom:5px;
      }
      .form-group label{
        display:bloack;
        color:#777;
        margin-bottom:5px;
      }
.form-group input,span,textarea{
   border: solid 2px #f0f0f0;
        border-radius:3px;
        padding:10px;
        margin-bottom:5px;
        font-size:20px;
        display:block;
       width:100%;

      }
      .form-group input,span,textarea:focus{
        outline:none;
      }
      .btn {
        width:100%;
        padding:3%;
        background:green;
        border-bottom: 2px solid white;
        border-top-style:none;
        border-right-style:none;
        border-left-style:none;
        color:black;
        text-transform:uppercase;
      }
      .btn:focus{
        outline:none;
      }


    </style>
</head>
<main>
<body>
<div class="container">
 


<form method="post"  enctype="multipart/form-data"> 
<h1><u>Feedback Page</u></h1>

 <div class="form-group">
 <label >Are you a current or former employee?</label>
    <input type="radio"  name="emp" value="current">Current 
    <input type="radio"  name="emp" value="former">Former
  </div>


  <div class="form-group">
                <label>Overall Rating</label><br>
                <div>
                    <i class="fa fa-star" aria-hidden="true" id="st1" title="poor"></i>
                    <i class="fa fa-star" aria-hidden="true" id="st2" title="average"></i>
                    <i class="fa fa-star" aria-hidden="true" id="st3" title="Good"></i>
                    <i class="fa fa-star" aria-hidden="true" id="st4"title="Very Good"></i>
                    <i class="fa fa-star" aria-hidden="true" id="st5" title="Excellent"></i>
                </div>
            </div>


  <div class="form-group">
    <label >Employment Status</label>
    <select class="form-select"  name=status aria-label="Default select example">
     <option selected>Choose One</option> 
     <option value="IT">FULL TIME</option>
     <option value="FINANCE">PART TIME</option>
     <option value="SALES">CONTRACT</option>
     <option value="SALES">INTERN</option>
    </select>
    </div>

    <div class="form-group">
    <label >Job Title</label>
    <input type="text" name="job" class="form-control"  placeholder="Job title" >
  </div>

  
  <div class="form-group">
    <label >Review Headline</label>
    <textarea col="5" row="3" name="review"></textarea>
  </div>


  <div class="form-group">
    <label >Pros</label>
    <textarea col="6" row="4" name="pros"></textarea>
  </div>


  <div class="form-group">
    <label >Cons</label>
    <textarea col="6" row="4"  name="cons"></textarea>
  </div>

  <div class="form-group">
    <label >Advice Management</label>
    <textarea col="5" row="3" name="advice"></textarea>
  </div>

  <div class="form-group">
    <label >Submit Proof</label>
    <input type="file" class="form-control" name="att" >
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" name="agree" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Agree terms and Conditions</label>
  </div>
  <button type="submit" name="submit" class="btn"><a href="thanku.php">Submit</a></button>
  </form>

  <script src="star.js"></script>
</body>
</main>
</html>