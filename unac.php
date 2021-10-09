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

  <!-- Jumbotron -->
  <div class="p-5 text-center hea bg-light">
    <h1 class="mb-3">BRAIN TUNE</h1>
    <h4 class="mb-3">DIGITAL MARKETING</h4>
    <a class="btn btn-primary" href="" role="button">Call to action</a>
  </div>
  <!-- Jumbotron -->
</header>
<br>

<!-- tab start -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" style="font-weight: bold;" aria-current="page" href="#">Digital Markting</a>
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li> -->

  <!-- tabs end -->
  </ul>

  <div class="h-divider">
  <div class="shado"></div>
  </div>
<br>
<div class="row">
    <div class="col-2">
  <!-- side nav start -->
 
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active text-dark" aria-current="page" href="#add">Advertising</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#content" >Content marketing</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#mail" >Email marketing</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#paid" tabindex="-1" aria-disabled="true">Paid search</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active text-dark" aria-current="page" href="#prog">Programmatic Advertising</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#rep">Reputation marketing</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#search">Search engine optimization</a>
  </li>
</ul>
</div>
  <!-- side nav end -->
  <form method="POST" action="admin/readvideos.php">
<div class="col-1">
<div class="divider"></div>
</div>
  <!-- section starts-->
  
  <div class="col-9">
<section  id="add">
    <h3> Advertising </h3>
    <p> Online advertising involves bidding and buying relevant ad units on third-party sites, such as display ads on blogs, forums, and other relevant websites. Types of ads include images, text, pop-ups, banners, and video. Retargeting is an important aspect of online advertising. Retargeting requires code that adds an anonymous browser cookie to track new visitors to your site. Then, as that visitor goes to other sites, you can serve them ads for your product or service. This focuses your advertising efforts on people who have already shown interest in your company. </p>
    <button type="submit" name="sub" value="ADD101" class="btn btn-primary">View Course</button>
</section>
<br>
  <!-- section ends -->
  <!-- section starts-->
<section id="content">
   <h3>  Content Marketing </h3>
   <p> Content marketing is an important strategy for attracting potential customers. Publishing a regular cadence of high-quality, relevant content online will help establish thought leadership. It can educate target customers about the problems your product can help them resolve, as well as boost SEO rankings. Content can include blog posts, case studies, whitepapers, and other materials that provide value to your target audience. These digital content assets can then be used to acquire customers through organic and paid efforts. </p>
   <button type="submit" name="sub" value="CONTENT201"  class="btn btn-primary">View Course</button>
</section>
<br>
  <!-- section ends -->

  <!-- section starts-->
<section id="mail">
  <h3> Email Marketing </h3>
  <p> Email is a direct marketing method that involves sending promotional messages to a segmented group of prospects or customers. Email marketing continues to be an effective approach for sending personalized messages that target customers’ needs and interests. It is most popular for e-commerce business as a way of staying top of mind for consumers. </p>
  <button type="submit" name="sub" value="EMAIL301"  class="btn btn-primary">View Course</button>
</section>
<br>
  <!-- section ends -->

  <!-- section starts-->
<section  id="paid">
   <h3> Paid Search </h3>
<p> Paid search increases search engine visibility by allowing companies to bid for certain keywords and purchase advertising space in the search engine results. Ads are only shown to users who are actively searching for the keywords you have selected. There are two main types of paid search advertising — pay per click (PPC) and cost per mille (CPM). With PPC, you only pay when someone clicks on your ad. With CPM, you pay based on the number of impressions. Google Adwords is the most widely used paid search advertising platform; however, other search engines like Bing also have paid programs. </p>
<button type="submit" name="sub" value="PAID401" class="btn btn-primary">View Course</button>
</section>
<br>
  <!-- section ends -->


  <!-- section starts-->
<section  id="prog">
    <h3> Programmatic advertising </h3>
   <p>  Programmatic advertising is an automated way of bidding for digital advertising. Each time someone visits a web page, profile data is used to auction the ad impression to competing advertisers. Programmatic advertising provides greater control over what sites your advertisements are displayed on and who is seeing them so you can better target your campaigns. </p>
   <button type="submit" name="sub" value="PROG501" class="btn btn-primary">View Course</button>
   </section>
   <br>
  <!-- section ends -->


  <!-- section starts-->
<section  id="rep">
     <h3> Reputation marketing </h3>
    <p>  Reputation marketing focuses on gathering and promoting positive online reviews. Reading online reviews can influence customer buying decisions and is an important component of your overall brand and product reputation. An online reputation marketing strategy encourages customers to leave positive reviews on sites where potential customers search for reviews. Many of these review sites also offer native advertising that allows companies to place ads on competitor profiles. </p>
    <button type="submit" name="sub" value="REP601" class="btn btn-primary">View Course</button>
   </section>
   <br>
  <!-- section ends -->

  <!-- section starts-->
<section  id="search">
    <h3>  Search engine optimization </h3>
    <p> Sea rch engine optimization (SEO) focuses on improving organic traffic to your website. SEO activities encompass technical and creative tactics to improve rankings and increase awareness in search engines. The most widely used search engines include Google, Bing, and Yahoo. Digital marketing managers focus on optimizing levers — such as keywords, crosslinks, backlinks, and original content — to maintain a strong ranking. </p>
    <button type="submit" name="sub" value="SEARCH701" class="btn btn-primary">View Course</button>   
</section>
</div>
</div>
  <!-- section ends -->
</form>
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