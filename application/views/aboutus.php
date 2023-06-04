<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>abotus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/about.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!-- Navbar (Sits on top) -->
<!-- <div class="w3-top w3-bar w3-white w3-wide w3-padding w3-card">
<a href="#home" class="w3-bar-item w3-button"><b>FOOD</b> FESTIVE</a>


<div class="w3-right w3-hide-small">
<a href="#projects" class="w3-bar-item w3-button">Projects</a>
<a href="#about" class="w3-bar-item w3-button">About</a>
<a href="#contact" class="w3-bar-item w3-button">Contact</a>
</div>

</div> -->
<?php
include('navbar.php');

?>


<!-- Page Start -->
<div id="home" class="w3-content" style="max-width:1564px">

<!-- Image in Display Container -->
<div class="w3-display-container w3-content" style="max-width:1500px;" >
<img class="w3-image" src="<?php echo base_url() ?>images/all.jpg" alt="Architecture" width="100%">
<div class="w3-display-middle w3-margin-top w3-center">
<h1 class="w3-xxlarge w3-text-white w3-wide">
<span class="w3-padding w3-black w3-opacity-min"><b>FREASH</b></span>
<span class="w3-hide-small w3-text-light-grey">MEAL</span>
</h1>
</div>
</div>

<!-- Page End -->
</div>
<!-- two slide -->

<!-- About -->
<div id="about" class="w3-padding-top-64">
<div class="w3-row">

<div class="w3-half w3-padding-large w3-hide-small">
<img src="<?php echo base_url() ?>images/shop.jpg" class="w3-round w3-image w3-opacity-min" alt="Table" style="width:100%">
</div>

<div class="w3-half w3-padding-large">
<h1 class="w3-center">About Grocery</h1><br>
<h5 class="w3-center">Tradition since 2021</h5>
<p class="w3-large">
Anand Raj Keshari, Payel Goswami, Prajjwal Srhivastava and Soumyo Pal founded Freshmeal in 2021.Having met each other while studying for Backend PHP development in the year 2021, they teamed up to enter the grocery delivery space. Their goal was to solve the problems associated with the unorganized nature of the sector.Freshmeal piloted in Kolkata before reaching other cities in India. In the early days, Freshmeal focused primarily on delivering groceries, fresh fruits and vegetables and kitchenware,bakery items, pet care, baby care and personal care products, etc. The company has now become a platform that brings together the consumers looking for everyday essentials, partners that are serving their needs and manufacturers looking for a conduit to the consumers. All of this happens through their proprietary technology stack.</p>

</div>

</div>
</div>

<!-- End Content -->
</div>

<!-- javascript -->

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong>Ab har wish hogi poori!</h4><br>
      <p><strong>VISION:</strong> Freahmeal current vision is ‘To become Amazon of India’ and their mission revolves round ‘Providing delightful customer experience’.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>24 x 7</h4>
      <p>Delivery</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>Friendship</h4>
      <p>We employers are like friends.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>We work on time.</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>10% Discount</h4>
      <p>On Debit/Credit Cards</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>Secure Payment</h4>
      <p>We keep all data secure</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">Return Policy</h4>
      <p>7 days return policy</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url()?>images/delivery.png" alt="Paris" width="400" height="300">
        <p><strong>Free Home Delivery</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url() ?>images/basket.jpg" alt="New York" width="400" height="300">
        <p><strong>Shoping Experenince</strong></p>
        <p>We care for our customer</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url()?>images/covid2.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>Please wear mask</strong></p>
        <p>Dont go out unnecessary!</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Freshmeal is the best. I am so happy with the result!"<br><span>Anand Raj Keshari, Student, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>Payel Goswami, Student, Customer</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this grocery?"<br><span>Soumyo Pal, Student, Customer</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Smart Bachat Plan</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Lorem</p>
          <p><strong>15</strong> Ipsum</p>
          <p><strong>5</strong> Dolor</p>
          <p><strong>2</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>Rs.2000/-</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Lorem</p>
          <p><strong>25</strong> Ipsum</p>
          <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>Rs.4000/-</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Lorem</p>
          <p><strong>50</strong> Ipsum</p>
          <p><strong>25</strong> Dolor</p>
          <p><strong>10</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>Rs.6000/-</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div>



<!-- Image of location/map -->
<img src="<?php echo base_url()?>images/Grocery.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>We are Available <a href="home" title="Visit w3schools">www.freshmeal.com</a></p>
</footer>
<?php
include('footer.php');
?>
 <script src="<?php echo base_url() ?>js/about.js"></script>
</body>
</html>