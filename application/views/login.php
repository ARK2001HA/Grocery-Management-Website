<head>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/login.css">

</head>


<body>

<!-- 
<div class="container">
   <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal" 
    
  </button>  
</div>
 -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center">
          <h4>Login</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form method="post">
            <div class="form-group">
              <input type="email" name="email1" class="form-control" id="email1"placeholder="Your email address">
            </div>
            <div class="form-group">
              <input type="password" name="password1" class="form-control" id="password1" placeholder="Your password">
            </div>
            <input type="submit" name="submit" class="btn btn-info btn-block btn-round" value="Login">
          </form>
          
          <div class="text-center text-muted delimiter">or use a social network</div>
          <!-- <div class="d-flex justify-content-center social-buttons">
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
              <i class="fab fa-twitter"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
              <i class="fab fa-facebook"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
              <i class="fab fa-linkedin"></i>
            </button>
          </di>
        </div> -->
         <div class="d-flex justify-content-center social-buttons">
        <div class="social-links">
            <a href="#" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="instagram"><i class="fab fa-instagram" ></i></a>
            <a href="#"class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="linkdin" ><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Not a member yet? <a href="<?php echo base_url() ?>./index.php/Hellocontroller/registration" class="text-info"> Sign Up</a>
          <p align="center"><a href="forgotpassword">Forgot Password</a></p>
        </div>
      </div>
  </div>
</div>


 <script src="<?php echo base_url() ?>js/login.js"></script>
  
</script>
</div>