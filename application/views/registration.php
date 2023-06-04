<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/registrationstyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'index.php/Hellocontroller/registration' ?>">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" id="name" placeholder="Enter your name">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" id="email" placeholder="Enter your email">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" name="phone" id="phone" placeholder="Enter your number">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" id="password" placeholder="Enter your password">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="conpassword" id="conpassword" placeholder="Confirm your password">
          </div>
         
          <div class="input-box">
            
             <span class="details">Enter Address</span>
            <input type="text" name="address" id="add" placeholder="Enter your Address">

          </div>
           <div class="input-box">
            
             <span class="details">Enter Image</span>
            <input type="file" name="image" style="border:5px solid #ccc; border-radius: 15px;border-style: outset;">

          </div>

        </div>
        <div class="button">
          <input type="submit" name="submit" id="submit" value="Register">
          <center><p><b>Already Registered?</b></p><a href="<?php echo base_url() ?>./index.php/Hellocontroller/logindata">Login</a></center>
        </div>
      </form>
    </div>
  </div>
<script src="<?php echo base_url() ?>js/registration.js"></script>
</body>
</html>