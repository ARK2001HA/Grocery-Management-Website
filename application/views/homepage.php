<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Grocery</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- navbar -->
	<div class="main-wrapper">
        <div class="nav-background">
            <div class="mobile-logo">
                <img src="<?php echo base_url() ?>./icons/logo.svg" alt="">
            </div>
            <div class="mobile-nav">
                <div class="cart">
                    <div class="flex items-center">
                        <img src="<?php echo base_url() ?>./icons/cart-dark.svg" alt="">
                        <a href="#">0 Items - ($0.00)</a>
                    </div>
                </div>
                <div class="nav-top">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">Products</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Contact us</a>
                        </li>
                        <li>
                            <a href="#">Log in</a>
                        </li>
                        <li>
                            <a href="#">Register</a>
                        </li>
                    </ul>
                </div>
                <div class="contact flex items-center">
                    <img src="<?php echo base_url() ?>./icons/phone.svg" alt="">
                    <div>
                        <h5>Call us: (+84) 123 456 789</h5>
                        <h6>E-mail : support@freshmeal.com</h6>
                    </div>
                </div>
                <div class="time flex items-center">
                    <img src="<?php echo base_url() ?>./icons/clock.svg" alt="">
                    <div>
                        <h5>Working Hours:</h5>
                        <h6>Mon - Sat (8.00am - 12.00am)</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-content-wrapper">
            <div class="nav-trigger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bar-chart">
                    <line x1="12" y1="20" x2="12" y2="10" />
                    <line x1="18" y1="20" x2="18" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="16" /></svg>
            </div>
            <div class="site-content">
                <header class="topbar">
                    <div class="container flex justify-between items-center">
                        <div class="icons">
                            <a href="#"><img src="<?php echo base_url() ?>./icons/facebook.svg" alt=""></a>
                            <a href="#"><img src="<?php echo base_url() ?>./icons/twitter.svg" alt=""></a>
                            <a href="#"><img src="<?php echo base_url() ?>./icons/google.svg" alt=""></a>
                            <a href="#"><img src="<?php echo base_url() ?>./icons/instagram.svg" alt=""></a>

                            <a href="<?php echo base_url() ?>./index.php/Admin_Controller/adminlogin"><i style="color:white" class="fa fa-user"></i></a> 
   


                        </div>
                        <div class="auth flex items-center">
                            <div>
                                <img src="<?php echo base_url() ?>./icons/user-icon.svg" alt="">
                                <a href="<?php echo base_url() ?>./index.php/Hellocontroller/logindata">Log in</a>
                            </div>
                            <span class="divider">|</span>
                            <div>
                                <img src="<?php echo base_url() ?>./icons/edit.svg" alt="">
                                <a href="<?php echo base_url() ?>./index.php/Hellocontroller/registration">Register Now</a>
                            </div>
                            <span class="divider">|</span>
                            <div>
                              <i class="fa fa-sign-out"></i>
                              <a href="#">LogOut</a>
                            </div>
                        </div>
                    </div>
                </header>

                <nav>
                    <div class="top">
                        <div class="container flex justify-between">
                            <div class="contact flex items-center">
                                <img src="<?php echo base_url() ?>./icons/phone.svg" alt="">
                                <div>
                                     <h5>Call US: (+91) 9876543210 </h5>
                                    <h6>E-mail : supportpayel@freshmeal.com</h6>
                                </div>
                            </div>
                            <div class="branding">
                                <img src="<?php echo base_url() ?>./icons/logo.svg" alt="">
                            </div>
                            <div class="time flex items-center">
                                <img src="<?php echo base_url() ?>./icons/clock.svg" alt="">
                                <div>
                                    <h5>Working Hours:</h5>
                                    <h6>Mon - Sat (8.00am - 12.00am)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar magic-shadow">
                        <div class="container flex justify-center">
                            <a href="#" class="active">Home</a>
                            <a href="<?php echo base_url() ?>./index.php/Hellocontroller/about">About us</a>
                            <a href="<?php echo base_url() ?>./index.php/Admin_Controller/product">Products</a>
                          <!--   <a href="#">Blog</a>
                            <a href="#">Shop</a> -->
                            <a href="<?php echo base_url() ?>./index.php/Hellocontroller/service">Services</a>
                            <a href="<?php echo base_url() ?>./index.php/Hellocontroller/gallery">Gallery</a>
                            <a href="<?php echo base_url() ?>./index.php/Hellocontroller/contactdata">Contact us</a>
                        </div>
                    </div>
                </nav>

                <header class="hero flex items-center">
                    <div class="container">
                        <div class="welcome flex items-center">
                            <span>Welcome to</span>
                            <img src="<?php echo base_url() ?>./icons/logo-2.svg" alt="">
                        </div>
                         <h1>The World Best <span>Shopping</span> Website</h1>
                        <p>We offer you convenience of shopping everything that you need for your home - be it fresh fruits & vegetables, rice, dals, oil, packaged food, dairy item, frozen, pet food, household cleaning items & personal care products from a single virtual store.</p>
                        <div>
                            <a href="<?php echo base_url() ?>./index.php/Hellocontroller/readmore"class="btn btn-primary">Read More</a>
                            <button class="btn btn-secondary">Shop Now</button>
                        </div>
                        <div class="hero-image">
                            <img src="<?php echo base_url() ?>./images/straw.png" alt="">
                        </div>
                    </div>
                </header>
                <!-- carousel -->
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
               <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url() ?>./images/2.jpg" alt="First slide">
                    </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url() ?>./images/4.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url() ?>./images/3.jpg" alt="Third slide">
                
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
            </div>
            </div>

                <section class="about-meal">
                    <div class="container">
                        <h1 class="section-heading">About Fresh Meal</h1>
                        <div class="about-meal-wrap flex">
                            <div class="flex-1">
                                <img src="<?php echo base_url() ?>./images/mid.jpg" alt="">
                            </div>
                            <div class="flex-1">
                                <h2>Freshmeal is a long established fact that a reader will be distracted</h2>
                                <p>Freshmeal was founded in September 2021 by Anand Raj Keshari, Payel Goswami, Prajjwal Srivastava and Soumyo Pal, student of the Ejob India Kolkata. The company initially focused on online book sales with country-wide shipping. Freshmeal slowly grew in prominence and was receiving 100 orders per day by 2022.In 2022, Freshmeal acquired the Kolkata-based social book discovery service WeRead from Lulu.com.</p>
                                <button class="btn btn-secondary">Read More</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="our-services">
                    <div class="container">
                        <h1 class="section-heading">Our services</h1>
                        <div class="card-wrapper flex">
                            <div class="service-card magic-shadow-sm">
                                <img class="icon" src="<?php echo base_url() ?>./icons/transport.svg" alt="">
                                 <h2>Free Home delivery</h2>
                                <p>The delivery timings are different for different cities and localities.</p>
                                <button class="btn btn-secondary">Read More</button>
                            </div>
                            <div class="service-card magic-shadow-sm">
                                <img class="icon" src="<?php echo base_url() ?>./icons/bag.svg" alt="">
                                <h2 class="text-primary">7 Days ReturnServices</h2>
                                 <p>You can always return the products which you are dissatisfied with, at the time of delivery and we will get the refund initiated for you.</p>
                                <button class="btn btn-primary">Read More</button>
                            </div>
                            <div class="service-card magic-shadow-sm">
                                <img class="icon" src="<?php echo base_url() ?>./icons/usd.svg" alt="">
                                <h2>Money Back Guaranted</h2>
                                <p> Our customer support team will get in touch with you to help resolve this issue.</p>
                                <button class="btn btn-secondary">Read More</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="big-deal">
                    <div class="container">
                        <h1 class="section-heading text-pure">Big Deals of the Week</h1>
                        <div class="timer">
                            <div>
                                <span>02</span>
                                <span>Days</span>
                            </div>
                            <div>
                                <span>24</span>
                                <span>Hours</span>
                            </div>
                            <div>
                                <span>55</span>
                                <span>Minutes</span>
                            </div>
                            <div>
                                <span>58</span>
                                <span>Seconds</span>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="latest-news">
                    <div class="container">
                        <h1 class="section-heading">Lastest News from Blog</h1>
                        <div class="article-wrapper">
                            <article class="card magic-shadow-sm">
                                <div>
                                    <img src="<?php echo base_url() ?>./images/coffee.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <div class="post-meta flex items-center justify-between">
                                        <span>July 03, 2017</span>
                                        <div>
                                            <span>Posted by <strong>FreshMeal</strong></span>
                                            <span class="comment-count">12 Comments</span>
                                        </div>
                                    </div>

                                     <h2>Sourced straight from farms, everyday</h2>
                                    <p>Fresh indicates the amount of time since a vegetable was harvested, while ripeness refers to peak maturity. Many vegetables are grown and harvested in various areas of the India. Some veggies come from foreign countries, depending upon the time of the year and current growing season</p>
                                </div>
                            </article>
                            <article class="card magic-shadow-sm">
                                <div>
                                    <img src="<?php echo base_url() ?>./images/donut.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <div class="post-meta flex items-center justify-between">
                                        <span>July 03, 2017</span>
                                        <div>
                                            <span>Posted by <strong>FreshMeal</strong></span>
                                            <span class="comment-count">12 Comments</span>
                                        </div>
                                    </div>

                                    <h2>Lorem Ipsum is simply dummy text of the printing</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a
                                        page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                        more
                                        letters.</p>
                                </div>
                            </article>
                        </div>
                        <div class="text-center btn-wrapper">
                            <button class="btn btn-secondary">View All</button>
                        </div>
                    </div>
                </section>

                <section class="subscribe">
                    <div class="container flex items-center">
                        <div>
                            <img src="<?php echo base_url() ?>./images/new.jpg" alt="">
                        </div>
                        <div>
                            <h1>Subscribe to your newsletter</h1>
                            <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many
                                web sites
                                still in their infancy.</p>
                            <div class="input-wrap">
                                <input type="email" placeholder="email@freshmeal.com">
                                <button>Subscribe</button>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="contact-us flex">
                    <div class="contact-info-wrapper">
                        <h1 class="section-heading">Contact us</h1>
                        <div class="contact-info">
                            <div>
                                <div>
                                    <img src="<?php echo base_url() ?>./icons/phone-2.svg" alt="">
                                    <div>
                                        <span>Call us:</span>
                                        <span>(+84) 123 456 789</span>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo base_url() ?>./icons/bag-2.svg" alt="">
                                    <div>
                                        <span>E-mail ::</span>
                                        <span>support@freshmeal.com</span>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo base_url() ?>./icons/clock-2.svg" alt="">
                                    <div>
                                        <span>Working Hours:</span>
                                        <span>Mon - Sat (8.00am - 12.00am)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d206253.45012861438!2d-115.31508258571672!3d36.124918453865035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80beb782a4f57dd1%3A0x3accd5e6d5b379a3!2sLas%20Vegas%2C%20NV%2C%20USA!5e0!3m2!1sen!2sru!4v1580850940897!5m2!1sen!2sru"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </section>

                <footer>
                    <div class="container">
                        <div class="box">
                            <h3>About us</h3>
                            <p>It was popularised in the 2021 with the unorganised grocery landscape through cutting-edge technology and innovation.</p>
                          <a href="<?php echo base_url() ?>./index.php/Hellocontroller/about" class="btn btn-secondary">About us</a>
                        </div>
                        <div class="box">
                            <h3>Quik Links</h3>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>./index.php/Hellocontroller/about">About us</a>
                                </li>
                                <li>
                                    <a href="#">Products</a>
                                </li>
                                <!-- <li>
                                    <a href="#">Blog</a>
                                </li> -->
                                <li>
                                    <a href="<?php echo base_url() ?>./index.php/Hellocontroller/service">Services</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>./index.php/Hellocontroller/gallery">Gallery</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>./index.php/Hellocontroller/contactdata">Contact us</a>
                                </li>

                            </ul>
                        </div>
                        <div class="box">
                            <h3>Follow Us</h3>
                            <div>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/codersgyan">
                                            <img src="<?php echo base_url() ?>./icons/facebook.svg" alt="">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/CoderGyan">
                                            <img src="<?php echo base_url() ?>./icons/twitter.svg" alt="">
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="<?php echo base_url() ?>./icons/google.svg" alt="">
                                            <span>Google +</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/codersgyan/">
                                            <img src="<?php echo base_url() ?>./icons/instagram.svg" alt="">
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box instagram-api">
                            <h3>Instagram</h3>
                            <div class="post-wrap">
                                <div>
                                    <img src="<?php echo base_url() ?>./images/food-table.jpg" alt="">
                                </div>
                                <div>
                                    <img src="<?php echo base_url() ?>./images/food-table.jpg" alt="">
                                </div>
                                <div>
                                    <img src="<?php echo base_url() ?>./images/food-table.jpg" alt="">
                                </div>
                                <div>
                                    <img src="<?php echo base_url() ?>./images/food-table.jpg" alt="">
                                </div>
                                <div>
                                    <img src="<?php echo base_url() ?>./images/food-table.jpg" alt="">
                                </div>
                                <div>
                                    <img src="<?php echo base_url() ?>./images/food-table.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <footer class="copyright">
                    <div>
                        Copyright © 2020 .All rights reserved by <a href="https://www.instagram.com/codersgyan/">Coder's Gyan</a>.
                    </div>
                </footer>
               <!--  <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6">
                      abcd  
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6">
                       erfd 
                    </div> -->
                    
                </div>

            </div>
        </div>
    </div>





    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo base_url() ?>js/app.js"></script>

</body>
</html>