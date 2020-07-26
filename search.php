<!DOCTYPE html>
<html>

<head>
  <title>Search | EyeRadar</title>
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
<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color:maroon;">
  <a class="navbar-brand" href="index.php"><img src="logo.png" class="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FAQ.php">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ContactUs.html">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About Us</a>
    </ul>
     <span style="font-size: 1.5em; color: white;">
          <a class="a-nav"href="https://www.instagram.com/eyeradar/"><i class=" fa fa-instagram" aria-hidden="true"></i></a>
        </span>
        <span style="font-size: 1.5em; color: white;">
          <a class="a-nav" href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
      </span>
      <span style="font-size: 1.5em; color: white;">
        <a class="a-nav" href="contactUs.html"><i class="fa fa-envelope" aria-hidden="true"></i></a>
      </span>
    <form class="form-inline my-2 my-lg-0" name="form1" method="get" action="search.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search" aria-label="Search">
      <input class="btn btn-outline-light my-2 my-sm-0" type="submit" value="Search" name="submit"></input>
    </form>
  </div>
</nav>

<br>
<br>





<?php
  $button = $_GET ['submit'];
  $search = $_GET ['search']; 


  if(strlen($search)<=1)
    echo "<h1>Search term too short</h1>";
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

    $sql ="SELECT * FROM vendors WHERE MATCH(NAME,BRAND,IMAGE_URL,URL,VENDOR) AGAINST ('%" . $search . "%')";

    $run = mysqli_query($con,$sql);
    $foundnum = mysqli_num_rows($run);

    if ($foundnum==0)
    {
      echo "<br><h4>We were unable to find a product with a search term of '<b>$search</b>'.</br></br></h4>
      1.Try more general words. for example: If you want to search 'how to create a website'
          then use general keyword like 'create' 'website'</br>
      2. Try different words with similar meaning</br>
      3. Please check your spelling";
    }
    else{
      echo "<h4 class='input-search-page'><strong>";
      echo "<br>$foundnum Results Found for \"" .$search."\" ";
      echo "</strong></h4>";

      // define num of results per page
      $per_page = 12;
      $start = isset($_GET['start']) ? $_GET['start']: '';
      $max_pages = ceil($foundnum / $per_page);

      if(!$start)
        $start=0;

      // get num of results stored in database
      $sql = "SELECT * FROM vendors WHERE MATCH(NAME,BRAND,IMAGE_URL,URL,VENDOR) AGAINST ('%" . $search . "%') ORDER BY -PRICE DESC LIMIT $start, $per_page";
      $getquery = mysqli_query($con,$sql);

      echo "<div class='row'>";
      echo "<div class='col-9 d-flex flex-wrap'>";
      while($runrows = mysqli_fetch_array($getquery))
      {
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

        echo "<div class='card' style='width:29%;display:inline-block;margin-left:2%;margin-top:2%;margin-bottom:2%'>
        <img src='$imageLink' class='img-searchboxes' alt='...'><hr>";
        echo"<div class='card-body'>";
        echo"<h5 class='card-title'>". $runrows["NAME"] ."</h5>";
        if ($runrows["PRICE"] == NULL){
          echo "<p class='card-text' style = 'font-size:20px'><em><strong> Price Not Available. Click link!" . "</strong></em></p>";
        }
        else{
          echo "<p class='card-text' style = 'font-size:25px'><strong>$".  $runrows["PRICE"] . "</strong></p>";
        }

        echo "<a href='$buyLink' target='_blank' class='btn btn-success' style='border-radius:40px;'>Click to Buy</a><a href='$buyLink' target='_blank'><img src='$imageVendor' class='image-vendor'></a>";
          echo "</div>";
          echo "</div>";
        }

        echo "</div>";
        echo "<div class='col-3'>";
        echo "hello";
        echo "</div>";
        echo "</div>";


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
                    echo " <a class='btn btn-outline-primary'
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
                        echo " <a class='btn btn-outline-primary'
                        href='search.php?search=$search&submit=Search&start=$i'>$counter</a> ";
                      }

                      $i = $i + $per_page;
                    }
                }

                //in middle; hide some front and some back
                elseif($max_pages - ($adjacents * 2) > ($start / $per_page) && ($start / $per_page) > ($adjacents * 2))
                  {
                    echo " <a class='btn btn-outline-primary'
                    href='search.php?search=$search&submit=Search&start=0'>1</a> ";
                    echo " <a class='btn btn-outline-primary'
                    href='search.php?search=$search&submit=Search&start=$per_page'>2</a> .... ";

                    $i = $start;

                    for ($counter = ($start/$per_page)+1; $counter < ($start / $per_page) + $adjacents + 2; $counter++)
                      {
                        if ($i == $start){
                          echo " <a class='btn btn-primary'
                          href='search.php?search=$search&submit=Search&start=$i'><b>$counter</b></a> ";
                        }
                        else {
                          echo " <a class='btn btn-outline-primary'
                          href='search.php?search=$search&submit=Search&start=$i'>$counter</a> ";
                        }

                        $i = $i + $per_page;
                      }
                  }

                  //close to end; only hide early pages
                  else{
                    echo " <a class='btn btn-outline-primary' href='search.php?search=$search&submit=Search&start=0'>1</a> ";
                    echo " <a class='btn btn-outline-primary' href='search.php?search=$search&submit=Search&start=$per_page'>2</a> .... ";

                    $i = $start;

                    for ($counter = ($start / $per_page) + 1; $counter <= $max_pages; $counter++)
                      {
                        if ($i == $start){
                          echo " <a class='btn btn-primary' href='search.php?search=$search&submit=Search&start=$i'><b>$counter</b></a> ";
                        }
                        else{
                          echo " <a class='btn btn-outline-primary' href='search.php?search=$search&submit=Search&start=$i'>$counter</a> ";
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