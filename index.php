<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Compare Eyewear Prices | EyeRadar</title>
  <link rel="shorcut icon" type="image/x-icon" href="logo.png">
  <!--first 4 are BOOTSTRAP-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/31e213ab78.js" crossorigin="anonymous"></script> <!--for icons-->
  <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'> <!--for google fonts-->
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
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FAQ.php">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ContactUs.html">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About Us</a></li>
    </ul>
     <span style="font-size: 1.5em; color: white;">
          <a class="a-nav"href="https://www.instagram.com/eyeradar/" target="_blank"><i class=" fa fa-instagram" aria-hidden="true"></i></a>
        </span>
        <span style="font-size: 1.5em; color: white;">
          <a class="a-nav" href="https://www.linkedin.com/company/eyeradar/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
      </span>
      <span style="font-size: 1.5em; color: white;">
        <a class="a-nav" href="ContactUs.html"><i class="fa fa-envelope" aria-hidden="true"></i></a>
      </span>
    <form class="form-inline my-2 my-lg-0" name="form1" method="get" action="search.php">
      <input class="form-control mr-sm-2" id='searchbar'type="text" name="search" aria-label="Search" maxlength="50" required/>
      <input class="btn btn-outline-light my-2 my-sm-0" id='submit' type="submit" value="Search" name="submit" />
    </form>
    <script>
      document.getElementById('searchbar').onkeypress = function() {
        document.getElementById('submit').disabled = !this.value.trim();
    }
    </script>

    
  </div>
</nav>


<div class="row">
    <div class="col-sm-12 col-md-8 content">
      <h1 style="margin-top:20%"><strong>Get Eyewear for Cheap!</strong></h1> 
      <h5 style="color:gray;text-align:center">Compare Prices. Save Money. Look Amazing.</h5>     
      <br>
      <p>


<form class="form-inline my-2 my-lg-0" name="form1" method="get" action="search.php" style="display: flex; justify-content: center; margin-left:0px;">
      <input class="form-control mr-sm-2" placeholder="Search away!" id='searchbar'type="text" name="search" aria-label="Search" maxlength="50" required/>
      <input class="btn btn-outline-dark my-2 my-sm-0" id='submit' type="submit" value="Search" name="submit" />
    </form>

    </p>
<br><br><br>
<div class="row">
  <div class="col-md-6">

<div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="margin-left:15.0%; margin-bottom:20px; width:70%;">
    Click to See Stores Available!
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li class="dropdown-item">Walmart</li>
    <li class="dropdown-item">Amazon</li>
    <div class="dropdown-divider"></div>
    <li class="dropdown-item">and Many More to Come!</li>
  </ul>
</div>
</div>

<div class="col-md-6">
<div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="margin-left:15.0%;margin-bottom:20%; width:70%;">
    How Can I Use the Searchbar?
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li style="margin-left:10px;">Search using your favorite brands! You can search by style, color, name, and price (with no "$")</li>
  </ul>
</div>
</div>

</div>


</div>
</strong>


    <div class="col-sm-12 col-md-4 content">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1532072433133-6c4bc8ccbef7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="Eyewear!" style="width:100%;">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1563170423-741125661ae8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80" class="d-block w-100" alt="Eyewear!">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1541670380987-8bbc8454d944?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" class="d-block w-100" alt="Eyewear!">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div>
 </div>


<div class="media jumbotron-secondary d-flex flex-wrap">
  <img class="img-jumbotron" src="https://images.unsplash.com/photo-1573617868564-673610c60d5b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=528&q=80" alt="...">
  <div class="media-body">
    <br><br>
    <h1>Eyewear is too expensive</h1>
    <br>
    <p style="margin-left:7%;margin-right:7%;">....but they don't have to be. 7 out of 10 adults in the United States need eye correction. Unfortunately, Americans are overpaying for glasses because eyewear is a health necessity and many businesses are taking advantage of that. </p>
    <p class="mb-0" style="margin-left:7%;margin-right:7%;margin-bottom:7%;">EyeRadar is here to level the playing field by providing product prices across multiple stores. Our search engine makes sure that you'll never get taken advantage of again.</p>
  </div>
</div>
<div class="media jumbotron-primary d-flex flex-wrap">
  <div class="media-body">
   <br><br>
    <h1>Eyewear Shopping Made Easy!</h1>
    <br>
    <p style="margin-left:7%;margin-right:7%;margin-bottom:10px;"> Set out to disrupt the traditional eyewear industry, EyeRadar is an eyewear price comparison website displaying a variety of both high-quality designer  and house brands with a wide-range of styles and lens types.  </p>
    <p class="mb-0" style="margin-left:7%;margin-right:7%;margin-bottom:10px;">By compiling prices on eyewear into a single convenient spot, EyeRadar provides consumers  with the cheapest prices available. </p>
  </div>
  <img class="img-jumbotron" src="https://images.unsplash.com/photo-1570053381569-78f606b5caab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="align-self-right mr-3" alt="...">
</div>
<div class="media jumbotron-secondary d-flex flex-wrap">
  <img class="img-jumbotron" src="https://images.unsplash.com/photo-1557215235-21d6064d6ff9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=449&q=80" class="align-self-right mr-3" alt="...">
  <div class="media-body">
    <br><br>
    <h1>Glasses are too cool to not wear them!</h1>
    <br>
    <p style="margin-left:7%;margin-right:7%;margin-bottom:10px;">Some of us have the luck to have 20/20 vision and others don't. But no matter if you need glasses or not, they don't have to be an item that have the sole purpose of correcting your sight, they can be used as a fashion device!</p>
    <p class="mb-0" style="margin-left:7%;margin-right:7%;margin-bottom:10px;">Stop overpaying for eyewear with EyeRadar and finally get that pair you always knew would look great on you!</p>
  </div>
</div>


<div class="row row-footer">
    <div class="col-sm-12 col-md-4 content">
      <div class="media-body">
        <br><br>
        <ul style="list-style:none;">
            <li><img class="logo" src="logo.png"></li>
            <br>
            <li><strong>© EyeRadar 2020</strong></li>
            <li>All Rights Reserved. EyeRadar is not affiliated with</li>
            <li>any retailer, store, or brand.</li>
          </ul>
    </div>
  </div>
      <div class="col-sm-12 col-md-4 content">
        <div class="media-body">
          <br><br>
          <h5 style="text-align:center">Eyewear Articles & Posts</h5>
          <br>
            <ul>
              <li><u><a href="https://www.latimes.com/business/lazarus/la-fi-lazarus-why-are-eyeglasses-so-expensive-20190122-story.html" class="links"  target="_blank">Column: Why are glasses so expensive? The eyewear industry prefers to keep that blurry</a></u></li>
              <li><u><a href="https://www.2020institute.com/why-are-eyeglasses-so-expensive/"class="links"  target="_blank">Why are eyeglasses so expensive?</a></u></li>
              <li><u><a href="https://www.mentalfloss.com/article/572142/reason-glasses-are-so-expensive" class="links"  target="_blank">Here’s the Real (No Good) Reason Glasses Are So Expensive</a></u></li>
              <li><u><a href="https://www.cbsnews.com/news/luxottica-eyewear-why-are-glasses-expensive/" class="links"  target="_blank">Sticker shock: Why are glasses so expensive?</a></u></li>
              <li><u><a href="https://www.huntervision.com/blog/eyeglasses-cost" class="links"  target="_blank">Why do some eyeglasses cost so much?</a></u></li>
            </ul>
        </div>
      </div>
     <div class="col-sm-12 col-md-4 content">
        <div class="media-body">
          <br><br>
          <h5 style="margin-left:20px;">Resources</h5>
          <br>
          <ul>
            <li><u><a href="about.html" class="links" >About Us</a></u></li>
            <li><u><a href="ContactUs.html" class="links" >Follow Us</a></u></li>
            <li><u><a href="FAQ.php" class="links" >FAQ</a></u></li>
            <li><u><a href="tou.html" class="links">Terms of Use</a></u></li>
            <li><u><a href="privacypolicy.html" class="links">Privacy Policy</a></u></li>
          </ul>
        </div>
      </div>
</div>



</body>
</html>