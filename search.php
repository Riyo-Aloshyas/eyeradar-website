<!DOCTYPE html>
<html>

<head>
  <title>EyeRadar</title>
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

  <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color:maroon;height:72px;">
      <a class="navbar-brand" href="#"><img class="logo" src="logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
       <li class="nav-item">
           <a class="nav-link" style="font-size:17px;" href="index.php">Home</a>
         </li>
         <li class="nav-item">
          <a class="nav-link" style="font-size:17px;" href="FAQ.php">FAQ</a>
         </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size:17px;" href="#">Contact Us<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size:17px;" href="about.html">About Us</a>
        </li>
      </ul>
      <span style="font-size: 1.5em; color: white;">
          <a class="a-nav"href="https://www.instagram.com/eyeradar/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </span>
        <span style="font-size: 1.5em; color: white;">
          <a class="a-nav" href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
      </span>
      <span style="font-size: 1.5em; color: white;">
        <a class="a-nav" href="contactUs.html"><i class="fa fa-envelope" aria-hidden="true"></i></a>
      </span>
  </nav>

<br>
<br>



<form name ="form1" method ="get" action ="search.php">
    <div class="input-group mb-3">
      <input type="text" name="search" class="form-control" placeholder="Search using the product name or Brand!" aria-label="Example text with button addon" aria-describedby="button-addon1">
    <div class="input-group-prepend">
  <input type="submit" value="Search" class="btn btn-outline-secondary" type="button" name="submit"></input>
   </div>
</div>

</form>



<?php
  $button = $_GET ['submit'];
  $search = $_GET ['search']; 

  echo "<h4 class='input-search-page'><strong>";
  echo "Results for \"" .$search."\"";
  echo "</strong></h4>";

  if(strlen($search)<=1)
    echo "<h1>Oh No :( Search term too short! Try Searching again!</h1>";
  else{

    $search_exploded = explode (" ", $search);

    $x = "";
    $construct = "";

    foreach($search_exploded as $search_each)
      {
        $x++;
        if($x==1)
          $construct .="title LIKE '%$search_each%'";
        else
          $construct .="AND title LIKE '%$search_each%'";
      }

    // connect to database
    $con=mysqli_connect("localhost","root","brazil","website");

    $sql ="SELECT * FROM vendors WHERE BRAND = '$search' OR NAME = '$search'";

    $run = mysqli_query($con,$sql);
    $foundnum = mysqli_num_rows($run);

    if ($foundnum==0)
    {
      echo "<h1>Oh No :( No matching result for \"<b>$search</b>\"</h1>.</br></br>
          <h4>1. Try checking your spelling when it comes to Brand names and others. They can be very complicated!</br>
          2. Try another product or Brand, maybe we don't have the one you're looking for!</br>
          3. Just overall try again!</h4>";
    }
    else{
      echo "<h4><p class='input-search-page'>$foundnum results found!</p></h4>";

      // define num of results per page
      $per_page = 10;
      $start = isset($_GET['start']) ? $_GET['start']: '';
      $max_pages = ceil($foundnum / $per_page);

      if(!$start)
        $start=0;

      // get num of results stored in database
      $sql = "SELECT * FROM vendors WHERE BRAND = '$search' OR NAME = '$search' ORDER BY -PRICE DESC LIMIT $start, $per_page";
      $getquery = mysqli_query($con,$sql);

      echo "<div class='top-line'>";
      echo "</div>";

      while($runrows = mysqli_fetch_array($getquery))
      {
        echo "<div class='searchboxes col-8'>";
        echo "<div class='media'>";

        $buyLink = $runrows["URL"];
        $imageLink = $runrows["IMAGE_URL"];

        if ($runrows["VENDOR"] == 'Walmart')
        {
          $imageVendor = 'https://cdn.freebiesupply.com/logos/thumbs/2x/walmart-logo.png';
        }
        else if ($runrows["VENDOR"] == 'Amazon')
        {
          $imageVendor = 'https://mobilemarketingwatch.com/wp-content/uploads/2017/04/amazon.jpg';
        }

        echo "<img class='align-self-center mr-3 img-searchboxes' src='$imageLink'>";
        echo "<div class='media-body'>";
        echo "<br><br>";

        echo "<h5 class='mt-0'>" . $runrows["NAME"] . "</h5>";
        if ($runrows["PRICE"] == NULL){
          echo "<p style = 'font-size:20px'><em><strong> Price Not Available. Click link!" . "</strong></em></p>";
        }
        else{
          echo "<p style = 'font-size:20px'><em><strong>$".  $runrows["PRICE"] . "</strong></em></p>";
        }

        echo " <p><strong>" . " click <a href='$buyLink'>here</a> to buy at</strong>
                <a href = '$buyLink'><img src = '$imageVendor' class = 'image-vendor'></a></p>";
              echo "</div>";
          echo "</div>";
          echo "</div>";
        }


              // PAGINATION for search results

        echo "<center> <br><br>";

        $prev = $start - $per_page;
        $next = $start + $per_page;

        $adjacents = 3;
        $last = $max_pages - 1;

        if($max_pages > 1) {
        //previous button
          if (!($start<=0)) 
            echo " <a class='btn btn-primary' href='search.php?search=$search&submit=Search&start=$prev'>Prev</a> ";
            //pages 
            if ($max_pages < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
            {
              $i = 0;
              for ($counter = 1; $counter <= $max_pages; $counter++)
                {
                  if ($i == $start){
                    echo " <a class='btn btn-primary'
                    href='search.php?search=$search&submit=Search&start=$i'><b>$counter</b></a> ";
                  }
                  else {
                    echo " <a class='btn btn-primary'
                    href='search.php?search=$search&submit=Search&start=$i'>$counter</a> ";
                  }

                  $i = $i + $per_page;
                }
            }

            elseif($max_pages > 5 + ($adjacents * 2))    //enough pages to hide some
            {//close to beginning; only hide later pages
              if(($start/$per_page) < 1 + ($adjacents * 2))
                {
                  $i = 0;
                  for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                    {
                      if ($i == $start){
                        echo " <a class='btn btn-primary'
                        href='search.php?search=$search&submit=Search&start=$i'><b>$counter</b></a> ";
                      }
                      else {
                        echo " <a class='btn btn-primary'
                        href='search.php?search=$search&submit=Search&start=$i'>$counter</a> ";
                      }

                      $i = $i + $per_page;
                    }
                }

                //in middle; hide some front and some back
                elseif($max_pages - ($adjacents * 2) > ($start / $per_page) && ($start / $per_page) > ($adjacents * 2))
                  {
                    echo " <a class='btn btn-primary'
                    href='search.php?search=$search&submit=Search&start=0'>1</a> ";
                    echo " <a class='btn btn-primary'
                    href='search.php?search=$search&submit=Search&start=$per_page'>2</a> .... ";

                    $i = $start;

                    for ($counter = ($start/$per_page)+1; $counter < ($start / $per_page) + $adjacents + 2; $counter++)
                      {
                        if ($i == $start){
                          echo " <a class='btn btn-primary'
                          href='search.php?search=$search&submit=Search&start=$i'><b>$counter</b></a> ";
                        }
                        else {
                          echo " <a class='btn btn-primary'
                          href='search.php?search=$search&submit=Search&start=$i'>$counter</a> ";
                        }

                        $i = $i + $per_page;
                      }
                  }

                  //close to end; only hide early pages
                  else{
                    echo " <a class='btn btn-primary' href='search.php?search=$search&submit=Search&start=0'>1</a> ";
                    echo " <a class='btn btn-primary' href='search.php?search=$search&submit=Search&start=$per_page'>2</a> .... ";

                    $i = $start;

                    for ($counter = ($start / $per_page) + 1; $counter <= $max_pages; $counter++)
                      {
                        if ($i == $start){
                          echo " <a class='btn btn-primary' href='search.php?search=$search&submit=Search&start=$i'><b>$counter</b></a> ";
                        }
                        else{
                          echo " <a class='btn btn-primary' href='search.php?search=$search&submit=Search&start=$i'>$counter</a> ";
                        }

                        $i = $i + $per_page;
                      }
                    }
            }

            //next button

            if (!($start >=$foundnum-$per_page))
              echo " <a class='btn btn-primary' href='search.php?search=$search&submit=Search&start=$next'>Next</a> ";
        }

        echo "</center>";
      }
    }

    echo "<br><br>";

    mysqli_close($con);
    ?>

</body>
</html>