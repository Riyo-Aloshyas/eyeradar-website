<!DOCTYPE html>
<html>

<head>
  <title>EyeSpy</title>
  <!--first 4 are BOOTSTRAP-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/31e213ab78.js" crossorigin="anonymous"></script> <!--for icons-->
  <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'> <!--for google fonts-->
  <link href="main.css?v=<?php echo time(); ?>" rel="stylesheet" /> <!--LOOKS DIFFERENT ON PHP!-->
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:maroon;">
      <a class="navbar-brand" href="#">EyeSpy</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
       <li class="nav-item">
           <a class="nav-link" href="index.php">Home</a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="login.html">Login</a>
         </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About Us</a>
        </li>
      </ul>
      <span style="font-size: 1.5em; color: white;">
          <a class="a-nav"href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </span>
        <span style="font-size: 1.5em; color: white;">
          <a class="a-nav" href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
      </span>
      <span style="font-size: 1.5em; color: white;">
        <a class="a-nav" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
      </span>
  </nav>

<br>
<h4><strong>
<?php
	if (isset($_POST['searchbttn']))
	 {
    $input = $_POST['searchbar'];
      echo "Results for \"" .$input."\":";
     }
  ?>
</strong></h4>

<div class="row">
  <div class="col-6"> <!--WALMART GOES HERE-->
    <h2>Walmart</h2>
    <br>

   <?php

   $connection = mysqli_connect("localhost", "root", "password", "test");
   $qry = mysqli_query($connection,"SELECT * FROM table");

   while ($result = mysqli_fetch_array($qry))
   {
      echo $result["brand"] . " " . $result["name"] "<br/ ><br/>";
   }

   ?>

  </div>

  <div class="col-6"> <!--AMAZON GOES HERE-->
    <h2>Amazon</h2>
    <br>

  <?php

   $connection = mysqli_connect("localhost", "root", "password", "test");
   $qry = mysqli_query($connection,"SELECT * FROM table");

   while ($result = mysqli_fetch_array($qry))
   {
      echo $result["brand"] . " " . $result["name"] "<br/ ><br/>";
   }

   mysqli_close($connection);

  ?>

  </div>
</div>

</body>
</html>
