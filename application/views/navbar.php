<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dropdown Menu with Search Box | CodingNepal</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/navbar.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">FreshMeal</a></div>
        <ul class="links">
          <li><a href="<?php echo base_url() ?>./index.php/Hellocontroller/home">Home</a></li>
          <li><a href="<?php echo base_url() ?>./index.php/Hellocontroller/about">About</a></li>
          <li><a href="<?php echo base_url() ?>./index.php/Admin_Controller/product">Product</a></li>
          <li>
            <a href="gallery" class="desktop-link">Gallery</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Features</label>
            <!-- <ul>
              <li><a href="#">Drop Menu 1</a></li>
              <li><a href="#">Drop Menu 2</a></li>
              <li><a href="#">Drop Menu 3</a></li>
              <li><a href="#">Drop Menu 4</a></li>
            </ul> -->
          </li>
          <li>
            <a href="<?php echo base_url() ?>./index.php/Hellocontroller/service"class="desktop-link">Services</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Services</label>
            <!-- <ul>
              <li><a href="#">Drop Menu 1</a></li>
              <li><a href="#">Drop Menu 2</a></li>
              <li><a href="#">Drop Menu 3</a></li>
              <li>
                <a href="#" class="desktop-link">More Items</a>
                <input type="checkbox" id="show-items">
                <label for="show-items">More Items</label>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul> -->
             <!--  </li>
            </ul>
          </li>
          <li><a href="#" class="desktop-link">Feedback</a></li> -->
        </li>
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i>
       <a style="color:white" href="<?php echo base_url() ?>./index.php/Hellocontroller/logout"> <i class="fa fa-sign-out"></i></a>
        <a href="<?php echo base_url()?>./index.php/Admin_Controller/cartdetails"><i class="fa fa-shopping-cart" style="color:white"></i><a>
                               
      </label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>

      </form>
    </nav>
  </div>
</body>
</html>