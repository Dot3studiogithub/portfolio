<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dot3studio</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
    <script src="js/typed.js"></script>
    </head>
<body onload="myfunction()">

<div id="loading"></div>
<!-- navigation area start  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
  <img src="images/dot3studio_logo.png" alt="" width="100px" height="26px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">profile</a>
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
  <div class="row">
  <div class="col-md-6">
  <h1 class="display-4 text-center text-secondary">Welcome</h1>
    <div class="text-center">
  <div class="display-4 text-warning">DOT3STUDIO</div>
  <div class="h1 text-light">WE ARE <span class="type text-warning h1"></span></div>
  <a  href="portfolio.php" class="btn btn-outline-primary">DISCOVER ME</a>

  <ul class="nav justify-content-center my-5">
            <li class="nav-item">
    <a class="nav-link social-link1 ml-2" href="#">
        <i class="fab fa-facebook-f fa-2x text-light" aria-hidden="true"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link social-link2 ml-2" href="#">
        <i class="fab fa-twitter fa-2x text-light" aria-hidden="true"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link social-link3 ml-2" href="#">
        <i class="fab fa-github fa-2x text-light" aria-hidden="true"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link social-link4 ml-2" href="#">
        <i class="fas fa-envelope fa-2x text-light" aria-hidden="true"></i>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link social-link5 ml-2" href="#">
        <i class="fab fa-youtube fa-2x text-light" aria-hidden="true"></i>
    </a>
  </li>
 
</ul>

</div>
  </div>
  <div class="col-md-6 text-center mt-3">
  <img src="images/group.png" alt="" width="350px" height="350px">
  </div>
  </div>

  </div>
</div>
<!-- end hero area  -->


<!-- start post area  -->
<div class="container-fluid">
<div class="row">
  <div class="col-md-9">
    <div class="h3">Recent Post</div>
    <div class="row my-5">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body boxx">
            <img src="images/1.png" alt="" class="card-img-top image">
            <div class="middle">
              <div class="text">post title</div>
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
            <a href="#" class="nav-link">Recent Post</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Top Post</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Post By Cource</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Post By date</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- end card  -->
    <div class="card">
      <div class="card-header bg-secondary text-light">Post Archive</div>
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

</body>
</html>