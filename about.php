<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<style>
    body{
    background: url(image/a1.jpg) no-repeat center;
    background-size: cover;
    min-height: 0;
    height: 800px;
  }
  </style>
<?php $title="Bloodbank | About page"; ?>
<?php require 'head.php'; ?>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
<?php require 'temp.php'; ?>
	<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Blood Bank</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Login/Register<span class="sr-only">(current)</span></a>
        
      </li>
     
    </ul>

  </div>
</nav> -->

<!-- <div class="jumbotron">
  <h1>Blood Bank</h1>
  <p>Blood Bank takes in blood donors and gives it out to recipients.</p>
</div> -->
  
<section class="my-5">
	<div class="py-5">
		<h1 class="text-center">About Us</h1>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="image/a3.jpg" class="img-fluid aboutimg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
			<h2>BLOOD - "I'm here to save you!"</h2>
			<p class="py-3">This project aims at maintaining all the information pertaining to blood donors, different blood groups available in each blood bank and help them manage in a better way.
     Aim is to provide transparency in this field, make the process of obtaining blood from
     blood bank hassle free and corruption free and make the system of blood bank management effective.<br>
      We believe Every life counts!, Every life matters. Time is the thing we have and don't. Our goal is to make blood available in less time and save your precious life!<br>
      We are a non-profitable organization which aims to provide a better and easier way to find the required blood needed at the time.</p>
			<a href="about.php"> </a> 
			</div>
		</div>
	</div>
</section>
<?php require 'footer.php'; ?>
</body>
</html>