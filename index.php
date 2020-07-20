<!DOCTYPE html>
<html lang="en">

<head>
  <title>EyeSpy</title>
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
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:maroon;">
      <a class="navbar-brand" href="#">EyeSpy</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
       <li class="nav-item active">
           <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="FAQ.php">FAQ</a>
         </li>
        <li class="nav-item">
          <a class="nav-link" href="ContactUs.html">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About Us</a>
        </li>
      </ul>
      <span style="font-size: 1.5em; color: white;">
          <a class="a-nav"href="#"><i class=" fa fa-instagram" aria-hidden="true"></i></a>
        </span>
        <span style="font-size: 1.5em; color: white;">
          <a class="a-nav" href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
      </span>
      <span style="font-size: 1.5em; color: white;">
        <a class="a-nav" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
      </span>
  </nav>
<div class="row">
    <div class="col-8">
      <h1><strong>Get Eyewear for Cheap!</strong></h1>      
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

    <br><br>
    <h4 style="text-align:center;margin-bottom:2px"> Stores in our catalog</h4>
      <img class ="image-vendor-index" src="https://i5.walmartimages.com/dfw/63fd9f59-49cb/655d1fa6-2244-4690-be27-cc1a70a30112/v1/walmart_logo_1x1.png">
      <img class="image-vendor-index-following" src="data:image/png;base64,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">
  </nav>
  </div>

    <div class="col-4">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1585108844827-2024917987f3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1563170423-741125661ae8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1541670380987-8bbc8454d944?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" class="d-block w-100" alt="...">
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
    <h1>Eyewear is Too Expensive</h1>
    <br>
    <p>....but they don't have to be. 7 out of 10 adults in the United States need eye correction. Unfortunately, Americans are overpaying for glasses because eyewear is a health necessity and many businesses are taking advantage of that. </p>
    <p class="mb-0">Eyespy is here to level the playing field by providing product prices across multiple stores. Our search engine makes sure that you'll never get taken advantage of again.</p>
  </div>
</div>
<div class="media jumbotron-primary">
  <div class="media-body">
   <br><br>
    <h1>Eyewear Shopping Made Easy!</h1>
    <br>
    <p> Set out to disrupt the traditional eyewear industry, EyeSpy, LLC is an eyewear price comparison website displaying a variety of both high-quality designer  and house brands with a wide-range of styles and lens types.  </p> <br>
    <p class="mb-0">By compiling prices on eyewear into a single convenient spot, EyeSpy, LLC provides consumers  with the cheapest prices available. </p>
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
    <p class="mb-0">Stop overpaying for eyewear with EyeSpy, LLC, and finally get that pair you always knew would look great on you!</p>
  </div>
</div>


<div class="row row-footer">
    <div class="col-4">
      <div class="media-body">
        <br><br>
        <ul style="list-style:none;">
            <li><h5>Eyespy</h5></li>
            <br>
            <li>© EyeSpy.com 2020-</li>
            <li>All Rights Reserved. EyeSpy is not affiliated with</li>
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
            <li><u><a href="FAQ.html" class="links"  target="_blank">FAQ</a></u></li>
            <li><u>Terms of Use</u></li>
            <li><u>Privacy Policy</u></li>
          </ul>
        </div>
      </div>
</div>


</body>
</html>