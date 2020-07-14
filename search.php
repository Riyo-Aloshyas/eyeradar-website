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

<?php

   $input = $_POST['searchbar'];

   $connection = mysqli_connect("localhost", "root", "brazil", "website");

   $sql = "SELECT * FROM amazon WHERE BRAND = '$input' OR NAME = '$input'"; #where match(NAME) against ()
   #echo 'searchbar';


   $qry = mysqli_query($connection, $sql);

   if (!$qry) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
	}

   while ($result = mysqli_fetch_array($qry))
   {
    
    echo "<div class='row'>";
    echo "<div class='col-8>";
    echo "<div class='jumbotron-searchpage'>";
   	echo "<div class='media'>";
    $imageLink = $result["IMAGE_URL"];
    echo "<img class ='align-self-center mr-3' src='$imageLink'>";

    echo "<div class='media-body'>";
   	$buyLink = $result["PRODUCT_URL"];

   	echo "<br><br><br><br><strong><h4 class='mt-0'>" . $result["NAME"] . "</h4></strong><strong>" . $result["BRAND"] . "</strong><br>" . "<h4>PRICE:" . $result["PRICE"] . "</h4>  Click <a href='$buyLink'>here</a> to buy at <strong>" . $result["VENDOR"] . "</strong>" ;
    echo "</div>";
   	echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

   }




   #while ($r = mysqli_fetch_array($result)) {
   	# code...

   #	echo $result["BRAND"] . " " . $result["NAME"] ;
   	#echo "<br><br>";
   #}

   #$qry = mysqli_query($connection,"SELECT * FROM amazon WHERE MATCH(NAME) AGAINST ('Ray-Ban')");

   #while ($result = mysqli_fetch_array($qry))
   #{echo $result["BRAND"] . " " . $result["NAME"] ;
   #echo "<br><br>";}

mysqli_close($connection);

   ?>


</body>
</html>
