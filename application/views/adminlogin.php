<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>CSS/logindata.css">
</head>
<body>
<form method="POST">
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h1 class="text-center">Admin Login</h1>
			<img src="<?php echo base_url().'images/team3.jpg'?>">
			<input type="Email" class="form-control" name="email" placeholder="Email">
			<input type="Password" class="form-control" name="password" placeholder="Password">
			<input type="submit" name="submit" value="Submit">
			<!-- <a href="<?php echo base_url().'index.php/Hello/registerdata'?>" style="white: #7f1a1a;font-size: 22px;margin-left: 17px;">New registration?</a> -->
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
</form>
</body>
</html>