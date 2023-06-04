<!DOCTYPE html>
<html>
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>ReadMore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/readmore.css">
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
</div> -->
<?php
include('navbar.php');
?>

</div>
<!-- next -->
<div style="text-align:center;font-family: cursive;font-size: 25px;" >
  <div class="container">
  <h2>Freshmeal</h2>
</div>
  
  <!-- <p>Dedicated to creating products for today’s and tomorrow’s smart life, EClick is the world’s No. 1 motherboard and gaming brand as well as a top-three consumer notebook vendor.</p> -->

</div>

<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <!-- <h1 class="xlarge-font"><b>ECLICK</b></h1> -->
      <h1 class="large-font" style="color:#ff6666;"><b>INTRODUCTION</b></h1>
      <p>Freshmeal was set up in Kolkata in 2021.We are the India’s biggest committed online grocery retailer with more than 880,000 dynamic clients shopping with us today. Our goal is to give our clients the best shopping background as far as service, range and value, which assembles a solid business and conveys long haul an incentive for our investors.
      </p>
      <button class="button">Learn More</button>
    </div>
    <div class="column-33">
        <img src="<?php echo base_url() ?>images/read1.jpg" width="335" height="471">
    </div>
  </div>
</div>

<!-- Clarity Section -->
<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
      <img src="<?php echo base_url() ?>images/read2.jpg" width="335" height="471">
    </div>
    <div class="column-66">
     <!--  <h1 class="xlarge-font"><b>Clarity</b></h1> -->
      <!-- <h1 class="large-font" style="color:red;"><b>Pixels, who?</b></h1> -->
      <p><span style="font-size:24px">We have built up a novel start to finish working answer for online grocery retail dependent on restrictive innovation and IP, appropriate for working our very own business and those of our business accomplices.</p>
      <button class="button" style="background-color:red">Read More</button>
    </div>
  </div>
</div>

<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <!-- <h1 class="xlarge-font"><b>The App</b></h1> -->
      <!-- <h1 class="large-font" style="color:#ff6666;"><b>Why buy it?</b></h1> -->
      <p>The world is evolving quick, determined by various shopping propensities and always cutting edge innovation for the customer. Grocery is the biggest of all retail portions and is moving on the web. In addition, the quick development of shopping utilizing cell phones opens new chances. We are all around situated to exploit these long haul basic patterns to assist our clients, accomplices and investors.</p>
      <button class="button">Download Application</button>
    </div>
    <div class="column-33">
        <img src="<?php echo base_url() ?>images/read3.jpg" width="335" height="471" >
    </div>
  </div>
</div>
<!-- next -->
<div class="container text-center">
  <h3>Sponsor Brands</h3>
  <!-- <p><em>We love music!</em></p> -->
  <p>Our tile partners</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <!-- <p><strong>Name</strong></p><br> -->
      <img src="<?php echo base_url() ?>images/read4.jpg"  alt="Random Name" width="255" height="255">
    </div>
    <div class="col-sm-4">
      <!-- <p><strong>Name</strong></p><br> -->
      <img src="<?php echo base_url() ?>images/read5.jpg" alt="Random Name" width="255" height="255">
    </div>
    <div class="col-sm-4">
      <!-- <p><strong>Name</strong></p><br> -->
      <img src="<?php echo base_url() ?>images/read6.jpeg"  alt="Random Name" width="255" height="255">
    </div>
  </div>
</div>
<!-- image -->


<!-- End page content -->
</div>
</div>
<?php
include('footer.php');

?>
</html>