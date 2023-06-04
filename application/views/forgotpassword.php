<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/forget.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form method="POST">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <div class="form-group">
                        <input class="form-control" type="email" name="passemail" placeholder="Enter email address">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="forgotpassword" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>