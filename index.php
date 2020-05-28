<?php
$page = 'home';
 include("includes/header.php");?>

<div id="loading"></div>

  <!-- navigation area start  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="#">
  <img src="images/dot3studio_logo.png" alt="" width="100px" height="26px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php if($page=='home'){echo 'active';}?>">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dot3studio_profile.php">profile</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          cources
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">html</a>
          <a class="dropdown-item" href="#">js</a>
          <a class="dropdown-item" href="#">php</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">more</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">about us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact us</a>
      </li>
    </ul>
   
  </div>
</nav>


<!-- end navigation area  -->

<!-- start hero area  -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
 <h1 class="display-1 text-center text-light mt-5" data-aos="fade-zoom-in" data-aos-delay="700">Welcome</h1>
    <div class="text-center">
  <div class="display-1 text-warning" data-aos="fade-zoom-out" data-aos-delay="1100">DOT3STUDIO</div>
  <div class="h1 text-light">WE ARE <span class="type text-warning h1"></span></div>
  <a  href="portfolio.php" class="btn btn-outline-primary mt-5">DISCOVER ME</a>

</div>
  </div>
</div>
<!-- end hero area -->



<!-- start post area  -->
<div class="container-fluid">
<div class="row">
  <div class="col-md-9">
    <div class="h3">Recent Blog</div>
    <div class="row my-5">
      <div class="col-md-4">
        <div class="card cardd">
          <div class="card-body boxx">
            <img src="images/1.png" alt="" class="card-img-top image">
            <div class="middle">
              <div class="text">Blog title</div>
            </div>
          </div><!-- end card body -->
        </div>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
    </div>
  </div>
  <!-- end col-9  -->
  <div class="col-md-3">
    <div class="card">
      <div class="card-header bg-secondary text-light">Category</div>
      <div class="card-body">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="#" class="nav-link">Recent Blog</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Top Blog</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Blog By Cource</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Blog By date</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- end card  -->
    <div class="card">
      <div class="card-header bg-secondary text-light">Blog Archive</div>
      <div class="card-body">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="#" class="nav-link">May 2020</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">June 2020</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">July 2020</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Auguest 2020</a>
          </li>
        </ul>
      </div>
    </div>
</div>
<!-- end col-3  -->
</div>
</div>
<!-- end post area  -->

<!-- about us area start -->
<div class="container-fluid aboutus_section">
  <div class="h3 text-center text-uppercase my-5 text-light">what do we offer</div>
  <div class="row">
  <div class="col-md-6" >
     <div class="text-center" data-aos="fade-right" data-aos-delay="300">
       <div class="h1 my-5 text-light">about my skills</div>
       <div>
         <img src="images/Lantern.png" alt="" width="250px" height="250px" class="rounded-circle">
       </div>
     </div>
    </div>
    <!-- end col 6 for text  -->
    <div class="col-md-6">
      <div class="">
        <div class="card bg-transparent border-0">
          <div class="card-body">
          <div class="my-4" data-aos="fade-in" data-aos-delay="300">
                    <label for="" class="text-success">HTML</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success progress-bar-animated myhtml " role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">95%</div>
                    </div>
                </div>

                <div class="my-4" data-aos="fade-in" data-aos-delay="700">
                    <label for="" class="text-warning">CSS</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated mycss" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90                          %</div>
                    </div>
                </div>

                <div class="my-4" data-aos="fade-in" data-aos-delay="1100">
                    <label for="" class="text-info">JAVASCRIPT</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated myjs" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                </div>

                <div class="my-4" data-aos="fade-in" data-aos-delay="1500">
                    <label for="" class="text-danger">PHP</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated myphp" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
                    </div>
                </div>

                <div class="my-4" data-aos="fade-in" data-aos-delay="1900">
                    <label for="" class="text-primary">Adobe XD</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-primary progress-bar-animated myxd" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                </div>
               
                <div class="my-4" data-aos="fade-in" data-aos-delay="2100">
                    <label for="" class="text-danger">Adobe illustrator</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated myill" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end col-6 for image  -->
  
  </div>
</div>
<!-- end about us area  -->

<!-- start connect area  -->

<div class="container" id="find-us">
  <div class="row">
  <div class="col-md-6 pb-5">
     <div class="text-center" data-aos="">
       <div class="h1 text-dark text-uppercase" id="find-text"> Also Touch with us </div>
       <img src="images/1.png" alt="" width="200px" height="200px" class="rounded-circle">
       <div>
        
       </div>
     </div>
    </div>
    <!-- end col-6 text  -->
    <div class="col-md-6 bg- text-center">
      <div class="" id="social-iconss">
      <ul class="nav mx-auto my-5">
            <li class="nav-item">
    <a class="nav-link social-link1 ml-2" href="#" data-aos="zoom-in">
        <i class="fab fa-facebook-f fa-2x text-light" aria-hidden="true"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link social-link2 ml-2" href="#" data-aos="zoom-in" data-aos-delay="400">
        <i class="fab fa-twitter fa-2x text-light" aria-hidden="true"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link social-link3 ml-2" href="#" data-aos="zoom-in" data-aos-delay="800">
        <i class="fab fa-github fa-2x text-light" aria-hidden="true"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link social-link4 ml-2" href="#" data-aos="zoom-in" data-aos-delay="1200">
        <i class="fas fa-envelope fa-2x text-light" aria-hidden="true"></i>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link social-link5 ml-2" href="#" data-aos="zoom-in" data-aos-delay="1600">
        <i class="fab fa-youtube fa-2x text-light" aria-hidden="true"></i>
    </a>
  </li>
 
</ul>
      </div>
    </div>
    <!-- end col-6 map  -->
  </div>
</div>
<!-- end connect area  -->

<!-- start footer area  -->

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12 text-center">
      <div class="h6">
        copyright &copy; 2020. All Right Reserved Dot3studio.
      </div>
    </div>
  </div>
</div>



<!-- end footer area  -->






<script>
var preloader = document.getElementById('loading');
function myfunction(){
    preloader.style.display ='none';
} 
</script>
<script>
var typed = new Typed('.type', {
    strings: ['DEVELOPER', 'DESIGNER'],
    typeSpeed: 80,
    backSpeed: 80,
    loop: true
  });

</script>
<script>
$(document).ready(function(){
$('.myhtml').animate({width: '95%'}, 200);
$('.mycss').animate({width: '90%'}, 200);
$('.myjs').animate({width: '75%'}, 200);
$('.myphp').animate({width: '65%'}, 200);
$('.myxd').animate({width: '65%'}, 200);
$('.myill').animate({width: '65%'}, 200);

});

</script>

<script>
  AOS.init();
</script>

</body>
</html>