<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | About page"; ?>
<?php require 'head.php'; ?>
<head>
  <title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body{
    background: url(image/l4.jpg) no-repeat center;
    background-size: cover;
    min-height: 00;
    height: 0;
  }
  </style>
</head>
<body>
<?php require 'temp.php'; ?>
<div class="container" style="margin-top:70px">
  <h1 class="text-center" >Contact Us!</h1>
  <p class="text-center">We are always here to help you!</p>
  </div>
<div class="row">
  <div class="col-md-4">
<div class="card">
  <div class="card-header">
  Our Guide Teachers
  </div>
  <div class="card-body">
    <h5 class="card-title">Dr. M.N.Shelar (Head of Comp. Dept) </h5>
    <h5 class="card-title">Dr. R.A.Patil (Co-ordinator) </h5>
    <h5 class="card-title">Prof. D.R.Derle (Full Stack Developer)</h5>
    <h5 class="card-title">Smt. J.A.Mahatme (PHP and Web Development)</h5>
    <h5 class="card-title">Smt. B.N.Mahale (Project Management)</h5>
    <h5 class="card-title">Smt. P.S.Aher (IOT and Cloud)</h5>
  </div>
</div>
</div>

<div class="col-md-4">
<div class="card ">
  <div class="card-header">
    Handcrafted By-
  </div>
  <div class="card-body">
  
    <h5 class="card-title">Yash Jayant Patil</h5><p style="color: red;">Email: yashp0245@gmail.com</p>
    
  </div>
</div>
</div>
</div>
</div>
  <!-- <div>
  <p class="text-center bg-danger text-white">Yash Jayant Patil -9767129653 yashp0245@gmail.com 
  </p>
  <a href="contact.php"> </a>
</div> -->
</section>
<?php require 'footer.php'; ?>
</body>
</html>
