<!DOCTYPE html>
<html lang="en">

<html>
<head>

    <meta charset="UTF-8">
    <title>FAQ | EyeRadar</title>

    <!--first 4 are BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/31e213ab78.js" crossorigin="anonymous"></script> <!--for icons-->
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'> <!--for google fonts-->
    <link href="main.css?v=<?php echo time(); ?>" rel="stylesheet" /> <!--LOOKS DIFFERENT ON PHP!-->

</head>

<body style="background-color:#1d0033">

 <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color:maroon;">
  <a class="navbar-brand" href="index.php"><img src="logo.png"class="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
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

  <br>
  <br>

     <div class="jumbotron jumbotron-fluid jumbotron-faq">
      <div class="container">

        <p class="lead">
          <h3>Frequently Asked Questions</h3>
        </p>

        <br>

        <p class="lead">
          <h5>"Why is using EyeRadar a smart move?"</h5>
        </p>
        <p>
EyeRadar has one crystal clear goal: make your life easier and have you save money. We have in our databases the biggest retailers and the most well known brand of eyewear, all in one place! No need to go to different tabs to see where your favorite pair or sunglasses is the most cheap at: EyeRadar does it all for you, all in one page!
        </p>

        <br>

        <p class="lead">
          <h5>"How much money will it cost to use EyeRadar?"</h5>
It will cost you a whooping total of: $0.00. 
        </p>

        <br>

        <p class="lead">
          <h5>"I'd love to give the website some Feedback! How do I do so?"</h5>
        </p>
        <p>
We love a good feedback from our costumers! All you have to do is click on Contact Us and do so via e-mail. Or, better yet, just click <a href="ContactUs.html" style="color:white;"><u>here</u></a> 
        </p>
</div>
</div>
<br><br>

<div class=" row row-footer-faq">
    <div class="col-4">
      <div class="media-body">
        <br><br>
        <ul style="list-style:none;">
            <li><img class="logo" src="logo.png"></li>
            <br>
            <li><strong>© EyeRadar.com 2020</strong></li>
            <li>All Rights Reserved. EyeRadar is not affiliated with</li>
            <li>any retailer, store, or brand.</li>
          </ul>
    </div>
  </div>
      <div class="col-4">
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
    <div class="col-4">
        <div class="media-body" style="text-align:center;">
          <br><br>
          <ul style="list-style:none;">
            <li><h5>Resources</h5></li>
            <br>
            <li><u><a href="about.html" class="links" >About Us</a></u></li>
            <li><u><a href="ContactUs.html"class="links" >Follow Us</a></u></li>
            <li><a >FAQ</a></li>
            <li><u><a href="tou.html" class="links">Terms of Use</a></u></li>
            <li><u><a href="privacypolicy.html" class="links">Privacy Policy</a></u></li>
          </ul>
        </div>
      </div>
</div>

</body>
</html>