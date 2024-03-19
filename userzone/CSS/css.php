
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CSS</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="">
</head>
<body style="background-color:#EEEEEE; ">
	 <div class="container-fluid" style="background-color:teal; margin-top:0px;">
			<div class="row" style="padding:10px;">
				<div class="col-sm-3"><img src="image/SMART%20PROGRAMING.png" alt="" style="height:50px; width:250px; margin:5px; color:white;"></div>
				<div class="col-sm-5">
					<marquee style="color:white; font-size:40px; font-weight:bold;">Welcome to smart  programing</marquee></div>
				<div class="col-sm-4 text-center text-white">
                
				<?php
				echo  date("Y/m/d"),date("l");
				
				?>
                </div>
		</div>
	</div>



<nav class="navbar navbar-expand-md navbar-light  sticky-top navbar-custom shadow p-3 mb-5 " style="background-color:#242C42;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style=""></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="nav nav-pills" id="myTab" role="tablist">
    <li class="nav-item">
    <a class="nav-link"  href="http://localhost/Tutorial%20Point/userzone/userdashboard.php#">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"href="http://localhost/Tutorial%20Point/userzone/HTML/html.php#">HTML</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">CSS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">JAVASCRIPT</a>
  </li>
<li class="nav-item">
    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">BOOTSRTAP</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">PHP</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">ANDROID</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Python</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">JAVA</a>
  </li>
   <li class="nav-item dropdown" style="">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       USER
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Change Password</a>
          <a class="dropdown-item" href="#">Edit Profile</a>
          <a class="dropdown-item" href="http://localhost/Tutorial%20Point/">Logout</a>
        </div>
      </li>
</ul>

  </div>
</nav>

<div class="container-fluid" style=" margin-top:-45px;">
	<div class="row">
		<div class="col-sm-3 ">
    <nav class ="navbar d-none d-lg-block">
<ul class ="nav navbar-nav">
     <P style="font-size:20px; font-weight:500; letter-spacing:2px;">CSS TUTORIALS</P>
<li class ="nav-item">
<a class ="nav-link" href="#">Introduction to  CSS </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#">CSS Getting Start </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#">CSS Syntex </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#">CSS Selecter </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#">CSS Color </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#">CSS Background </a>
</li>
 
</ul>
</nav>  
    </div>
		<div class="col-sm-7" style="background-color:white; padding-top:27px; ">
			<h3 class="" style="text-align:left; margin-top:20px; margin-left:12px;">Welcome to Smart Programing</h3>
      <p style="text-align:justify; font-size:20px; padding:12px;">
        At smartprograming.com you can learn the essentials of web development technologies from the basic to advanced topics, along with real life practice examples and useful references, so that you can create your own website or build career in web development. Here you will find:</p>
        <div class="row">
          <div class="col-sm-8">
            <h2 style="text-align:left; margin-top:20px; margin-left:12px;">Step by Step <span>Tutorial</span></h2>
                    <p style="text-align:justify; font-size:19px; padding:12px;">The tutorial section encloses an extensive collection of tutorials and examples that you can try and test yourself using online HTML editor. You will also find large numbers of demonstrations, tips and techniques covering everything you need to create web pages.
                    If you're a beginner, <a href="html-tutorial/">start learning from here &raquo;</a></p>
          </div>
           <div class="col-sm-4">
             <img src="image/home 1.png" width="220" height="220" alt="Step by Step Tutorial" />
           </div>
        </div>
 <div class="row">
          <div class="col-sm-4">
            <img src="image/home 2.png" width="220" height="220" alt="Step by Step Tutorial" />
          </div>
           <div class="col-sm-8">
             <h2 style="text-align:left; margin-top:20px; margin-left:12px;">Useful References</h2>
                    <p style="text-align:justify; font-size:19px; padding:12px;">
                      The references section outlines all the standard HTML tags and CSS properties along with other useful references such as color names and values, symbols and character entities, web safe fonts, language codes, HTTP messages and much more.<br>
                      Check out the complete<a href="html-tutorial/"> web references &raquo;</a></p>
           </div>
        </div>
 <div class="row">
          <div class="col-sm-8">
            <h2 style="text-align:left; margin-top:20px; margin-left:12px;">Interactive Tools</h2>
                    <p style="text-align:justify; font-size:19px; padding:12px;">Practice while learning is the best way to learn. At Tutorial Republic you will find a number of interactive tools like HTML Editor, SQL Playground, Color Picker, Bootstrap Button Generator and many other tools that you can play with to extend your learning.
                    Check out the<a href="html-tutorial/"> online HTML editor &raquo;</a></p>
          </div>
           <div class="col-sm-4">
             <img src="image/home 1.png" width="220" height="220" alt="Step by Step Tutorial" />
           </div>
        </div>
<hr>
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-2"><button type="button" class="btn btn-dark">Previous &raquo;</button></div>
  <div class="col-sm-6"></div>
  <div class="col-sm-2"><button type="button" class="btn btn-dark">Next &raquo;</button></div>
  <div class="col-sm-1"></div>
</div>
<hr>
       		</div>
		<div class="col-sm-2"></div>
	</div>

</div>




        <!-- Footer -->
<footer class="page-footer font-small text-white" style="background-color:#0D2235; padding-top:20px; padding-bottom:20px;">


  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
    <img src="image/SMART PROGRAMING.png" style="height:30px; width:200px;">
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p style="text-align: justify;">Here you can read any subject related to technical topics and also you can learn programming language and designing like HTML CSS bootstrap on this website in an easy way.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Home</a>
        </p>
        <p>
          <a href="#!">About us</a>
        </p>
        <p>
          <a href="#!">Register</a>
        </p>
        <p>
          <a href="#!">Login</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">HTML</a>
        </p>
        <p>
          <a href="#!">CSS</a>
        </p>
        <p>
          <a href="#!">Java Script</a>
        </p>
        <p>
          <a href="#!">Bootstrap</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fa fa-home mr-3"></i> Govt Polytechnic Aurai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bhadohi</p>
        <p>
          <i class="fa fa-envelope mr-3"></i> LearningPoint@gmail.com</p>
        <p>
          <i class="fa fa-phone-alt mr-3"></i>  8573064324</p>
        <p>
          <i class="fa fa-print mr-3"></i> 9064475874</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
      
         devoloped And Design by
   <a href=""><img src="image/SMART PROGRAMING.png" style="height:25px; width:150px; margin-left: 5px;"></a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>