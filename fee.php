<?php
session_start();
require 'conn.php';
@$uname=$_SESSION['name']; 
@$pwd=$_SESSION['pwd'];

?>
<html>
<head>
<link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
.divider{
    border-left: 2px solid #6dd5ed;
;
  height: 500px;
}
.btn{
    background-color: #6dd5ed;
    border :0px;
}
.hea{
    background-image: url("img/user_head.gif");
    background-size: 100% 100%;
    background-repeat: no-repeat;
    height : 50%;
}
    </style>
</head>
<body>
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link text-dark" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="acc.php">Quiz</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Score</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Certificate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="fee.php">Feedback</a>
          </li>
        </ul>
        <?php echo "$uname"; ?> &nbsp;
        <a href="logout.php"><img src="img/power.svg"></a>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

<div class="bg1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background-image:url(image/bg1.jpg); min-height:430px;">
<h2 align="center" style="font-family:'typo'; color:#000066">FEEDBACK/REPORT A PROBLEM</h2>
<div style="font-size:14px">
<?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo' 
<br><br>
<form role="form"  method="post" action="feed.php?q=fee.php">
<div class="row">
<div class="col-md-3"><b>Name:</b><br /><br /><br /><b>Subject:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text"><br />    
   <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text">   <br> 

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3"><b>E-Mail address:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">  <br>  
 </div>
</div>
</div><!--End of row-->

<div class="form-group"> 
<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here..."></textarea><br>
</div>
<div class="form-group" align="center">
<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
</div>
</form>';}?>
</div><!--col-md-6 end-->
<div class="col-md-3"></div></div>
</div></div>
</div><!--container end-->


<br>

<!-- Footer start -->
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="containe my-0">

  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #24314b"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4"
             style=" background-image: linear-gradient(to right, #2193b0 0%, #6dd5ed   51%, #F4F5FF 100%);"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <img src="img/facebook.svg" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <img src="img/twitter.svg"  class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <img src="img/google.svg"  class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <img src="img/instagram.svg"  class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <img src="img/linkedin.svg"  class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <img src="img/github.svg"  class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">BRAIN TUNE</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #2193b0; height: 2px"
                />
            <p>
              Brain Tune is one of the best site used to develop our knowledge.<br>
              Use the best to build your brain.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #2193b0; height: 2px"
                />
            <p>Web Development
              <!-- <a href="#!" class="text-white">Web Development</a> -->
            </p>
            <p>IT
              <!-- <a href="#!" class="text-white">IT</a> -->
            </p>
            <p>Digital Markting
              <!-- <a href="#!" class="text-white">Digital Markting</a> -->
            </p>
            <!-- <p>
              <a href="#!" class="text-white">Bootstrap Angular</a>
            </p> -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #2193b0; height: 2px"
                />
            <p>
              Gmail
              <!-- <a href="#!" class="text-white">Your Account</a> -->
            </p>
            <p>Linkedin
              <!-- <a href="#!" class="text-white">Become an Affiliate</a> -->
            </p>
            <p>Twitter
              <!-- <a href="#!" class="text-white">Shipping Rates</a> -->
            </p>
            <p>Instagram
              <!-- <a href="#!" class="text-white">Help</a> -->
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #2193b0; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> Tirunelveli, 627001, Tamilnadu</p>
            <p><i class="fas fa-envelope mr-3"></i> braintune@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> +91 99999 00000</p>
            <p><i class="fas fa-print mr-3"></i> +0462 345 5675</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2021 Copyright:
      <a class="text-white" href=""
         >braintune.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

</div>
<!-- End of .container -->
<!-- Footer end  -->


</body>
</html>