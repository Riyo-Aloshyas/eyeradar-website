<!DOCTYPE html>
<html lang="en">

<head>
  <title>EyeRadar</title>
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
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:maroon; height:72px;">
      <a class="navbar-brand" href="#"><img class="logo" src="logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
       <li class="nav-item active">
           <a class="nav-link"  style="font-size:17px;"href="#">Home<span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
          <a class="nav-link" style="font-size:17px;" href="FAQ.php">FAQ</a>
         </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size:17px;"href="ContactUs.html">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  style="font-size:17px;"href="about.html">About Us</a>
        </li>
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
  </nav>

<div class="row">
    <div class="col-8">
      <h1><strong>Get Eyewear for Cheap!</strong></h1> 
      <h5 style="color:gray;text-align:center">Compare Prices. Save Money. Look Amazing.</h5>     
      <br>
      <p>
  <form name ="form1" method ="get" action ="search.php">
    <div class="input-group mb-3">
      <input type="text" name="search" class="form-control" placeholder="Search using the product name or Brand!" aria-label="Example text with button addon" aria-describedby="button-addon1">
    <div class="input-group-prepend">
  <input type="submit" value="Search" class="btn btn-outline-secondary" type="button" name="submit"></input>
   </div>
</div>
  </Form>
    </p>
<br><br><br>
<div class="row">
  <div class="col-6">
<div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="margin-left:30%; max-width:80%;">
    Click to See Stores Available!
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li> <img class ="image-vendor-index" src="https://i5.walmartimages.com/dfw/63fd9f59-49cb/655d1fa6-2244-4690-be27-cc1a70a30112/v1/walmart_logo_1x1.png"><img class="image-vendor-index-following" src="http://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c518.png"> And Many More to Come!</li>
  </ul>
</div>
</div>

<div class="col-6">
<div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="margin-left:10%; max-width:80%;">
    How Does EyeRadar Work?
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


    <div class="col-4">
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

<div class="media jumbotron-secondary">
  <img class="img-jumbotron" src="https://images.unsplash.com/photo-1573617868564-673610c60d5b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=528&q=80" alt="...">
  <div class="media-body">
    <br><br>
    <h1>Eyewear is too expensive</h1>
    <br>
    <p>....but they don't have to be. 7 out of 10 adults in the United States need eye correction. Unfortunately, Americans are overpaying for glasses because eyewear is a health necessity and many businesses are taking advantage of that. </p>
    <p class="mb-0">EyeRadar is here to level the playing field by providing product prices across multiple stores. Our search engine makes sure that you'll never get taken advantage of again.</p>
  </div>
</div>
<div class="media jumbotron-primary">
  <div class="media-body">
   <br><br>
    <h1>Eyewear Shopping Made Easy!</h1>
    <br>
    <p> Set out to disrupt the traditional eyewear industry, EyeRadar, LLC is an eyewear price comparison website displaying a variety of both high-quality designer  and house brands with a wide-range of styles and lens types.  </p> <br>
    <p class="mb-0">By compiling prices on eyewear into a single convenient spot, EyeRadar, LLC provides consumers  with the cheapest prices available. </p>
  </div>
  <img class="img-jumbotron" src="https://images.unsplash.com/photo-1570053381569-78f606b5caab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="align-self-right mr-3" alt="...">
</div>
<div class="media jumbotron-secondary">
  <img class="img-jumbotron" src="https://images.unsplash.com/photo-1557215235-21d6064d6ff9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=449&q=80" class="align-self-right mr-3" alt="...">
  <div class="media-body">
    <br><br>
    <h1>Glasses are too cool to not wear them!</h1>
    <br>
    <p>Some of us have the luck to have 20/20 vision and others don't. But no matter if you need glasses or not, they don't have to be an item that have the sole purpose of correcting your sight, they can be used as a fashion device!</p>
    <p class="mb-0">Stop overpaying for eyewear with EyeRadar, LLC, and finally get that pair you always knew would look great on you!</p>
  </div>
</div>


<div class="row row-footer">
    <div class="col-4">
      <div class="media-body">
        <br><br>
        <ul style="list-style:none;">
            <li><h5>EyeRadar</h5></li>
            <br>
            <li>© EyeRadar.com 2020-</li>
            <li>All Rights Reserved. EyeRadar is not affiliated with</li>
            <li>any retailer, store, or brand.</li>
          </ul>
    </div>
  </div>
      <div class="col-4">
        <div class="media-body">
          <br><br>
          <h5 style="text-align:center">Eyewear Article Section</h5>
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
    <div class="col-4">
        <div class="media-body" style="text-align:center;">
          <br><br>
          <ul style="list-style:none;">
            <li><h5>Resources</h5></li>
            <br>
            <li><u><a href="about.html" class="links"  target="_blank">About Us</a></u></li>
            <li><u><a href="ContactUs.html"class="links"  target="_blank">Follow Us</a></u></li>
            <li><u><a href="FAQ.php" class="links"  target="_blank">FAQ</a></u></li>
            <li><u><a href="tou.html" class="links">Terms of Use</a></u></li>
            <li><u><a href="privacypolicy.html" class="links">Privacy Policy</a></u></li>
          </ul>
        </div>
      </div>
</div>


</body>
</html>