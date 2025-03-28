<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
 
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
            @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
        .view,body,html{height:100%}.navbar{background-color:rgba(0,0,0,.2)}.page-footer,.top-nav-collapse{background-color:#1C2331}@media only screen and (max-width:768px){.navbar{background-color:#1C2331}}
    </style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <!-- <a class="navbar-brand" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank"> -->
        <!-- <strong>MDB</strong> -->
      <!-- </a> -->
      <a class="navbar-brand" href="temp1.php"><img src="image/favicon.jpg" width="30" height="30" class="rounded-circle">Blood Bank Management System</a>
      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
            
            

        </ul>
    

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://www.facebook.com/yashpatil204" class="nav-link" target="blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link" target="blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About US
              <span class="sr-only">(current)</span>
            </a>
            <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact US
              <span class="sr-only">(current)</span>
            </a>
          <li class="nav-item">
            <a href="login.php" class="nav-link border border-light rounded"
              target="_self">
              Login 
              <i class="bi bi-box-arrow-in-right"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="register.php" class="nav-link border border-light rounded"
              target="_self">
              Register
              <i class="bi bi-signpost-fill"></i>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <script>
              new WOW().init();
  </script>
  </body>
</html>