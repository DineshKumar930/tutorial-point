<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Bootstrap Sign up Form with Icons</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/3fc2e56353.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link href="css/Home.css" rel="stylesheet" type="text/css">
<link href="css/registration.css" rel="stylesheet" type="text/css">
</head>
<body>

    </head>
    <body>
    <div class="container-fluid" style="background-color:#242C42; margin-top:0px;">
			<div class="row" style="padding:10px;">
				<div class="col-sm-4 text-center text-white"><h5>Welcome to smart programing</h5></div>
				<div class="col-sm-4 text-center"></div>
				<div class="col-sm-4 text-center text-white">
                <span class="fa fa-envelope" style="color:white;  font-size:15px;"></span>&nbsp;&nbsp; <span style="font-size:15px;">H Gpaurai@gmail.com</span>
				<span class="fa fa-phone-alt" style="color:limegreen;  font-size:15px; margin-left:8px;"></span>&nbsp; <span style="color:white; font-size:15px;">1800-5007-8887</span>
                </div>
		</div>
	</div>
    
    
    
	<nav class="navbar navbar-expand-md navbar-light bg-lignt sticky-top navbar-custom shadow p-3 mb-5 bg-white rounded">
  <a class="navbar-brand" href=""><img src="image/SMART PROGRAMING.png" alt="" style="height:50px; width:250px; margin:5px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-uppercase" href="file:///C:/Users/prince%20kumar/Desktop/Tutorials/Home%20page.html#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-uppercase" href="#">About us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link text-uppercase" href="http://localhost/Tutorial%20Point/register.php?">Join Us</a>
      </li>
      <!-- Megamenu-->
      <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle  text-uppercase">course</a>
        <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
          <div class="container">
            <div class="row shadow p-3 mb-5 bg-white w-100" style="margin-top:-20px;">
                    <div class="col-lg-4 mb-4">
                      <h6 class="font-weight-bold text-uppercase">Programing Language </h6>
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="" class="nav-link">Java Programing</a></li>
                        <li class="nav-item"><a href="" class="nav-link">PHP</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Python</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Android</a></li>
                      </ul>
                    </div>
                    <div class="col-lg-4 mb-4">
                      <h6 class="text-uppercase">Designing Tool</h6>
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="" class="nav-link">Html</a></li>
                        <li class="nav-item"><a href="" class="nav-link">CSS</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Javascript</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Bootstrap</a></li>
                      </ul>
                    </div>
                <div class="col-lg-4 mb-4">
                      <h6 class="text-uppercase">Designing Tool</h6>
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="" class="nav-link">Html</a></li>
                        <li class="nav-item"><a href="" class="nav-link">CSS</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Javascript</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Bootstrap</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>  
      </li>
      <li class="nav-item">
        <a class="nav-link text-uppercase" href="#">Contact us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link text-uppercase" href="http://localhost/Tutorial%20Point/login.php?">Login</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container-fluid" style="margin-top:-10px;">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<?php
            if(isset( $_SESSION['status']) && $_SESSION['status'] !='')
            {
               ?>
               <div class="alert alert-success alert-dismissible fade show" role="alert" style="font-size:17px; height:60px;">
               <?php echo $_SESSION['status']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
               <?php
               unset($_SESSION['status']);
            }

			?>
		</div>
		<div class="col-sm-3"></div>
</div>	
</div>

<div class="signup-form">
    <form action="PHP code/Registration.php" method="post" enctype="multipart/form-data">

		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
	
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-user" style="color:red;"></span>
					</span>                    
				</div>
				<input type="text" class="form-control" name="username" placeholder="Name" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-paper-plane" style="color:blue;"></i>
					</span>                    
				</div>
				<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-phone-alt" style="color:green;"></i>
					</span>                    
				</div>
				<input type="number" class="form-control" name="mob" placeholder="Enter Contact No" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-lock" style="color:red;"></i>
					</span>                    
				</div>
				<input type="password" class="form-control" name="pass" placeholder="Password" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-lock" style="color:green;"></i>
						<i class="fa fa-check" style="color:red;"></i>
					</span>                    
				</div>
				<input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
			</div>
        </div>
        
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
        <p class="text-center">Already have an account? <a href="http://localhost/Tutorial%20Point/login.php?">Login here</a></p>
    </form>
	
</div>
</body>
</html>