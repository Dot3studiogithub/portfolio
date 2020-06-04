<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dot3studio</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/hover.css">
    <link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/my_script.js"></script>
    <style>
    body{
        
        background: #000;
    }

    .logo-section{
        width: 100%;
        min-height: 100vh;
        background: #000;
        display: flex;
        justify-content: center;
        align-items: center;
    }
h1{
        width: 100%;
        font-size: 120px;
        font-weight: 900;
        z-index: 1;
        overflow: hidden;
        color: #333;
        text-align: center;
        font-family: 'Unica One', cursive;
        
                     
    }
    
h1 span{
    animation: animate 2.2s linear infinite;
}
h1 span:nth-child(1){
    animation-delay:0s;
}
h1 span:nth-child(2){
    animation-delay:0.2s;
}
h1 span:nth-child(3){
    animation-delay:0.4s;
}
h1 span:nth-child(4){
    animation-delay:0.6s;
}
h1 span:nth-child(5){
    animation-delay:0.8s;
}
h1 span:nth-child(6){
    animation-delay:1s;
}
h1 span:nth-child(7){
    animation-delay:1.2s;
}
h1 span:nth-child(8){
    animation-delay:1.4s;
}
h1 span:nth-child(9){
    animation-delay:1.6s;
}
h1 span:nth-child(10){
    animation-delay:1.8s;
}
@keyframes  animate{
    0%,80%
{
    color: #333;
    text-shadow: none;
}
100%{
    color:#fff;
    text-shadow: 0 0 10px #fff,
                 0 0 20px #fff;
                 
                 
}

}
@media(max-width: 868px){
    h1{
        font-size: 60px;
    }
}
 .desing-text{
    font-family: 'Unica One', cursive;
    margin-top: 150px;
}

.footer-section{
    background-color: #000;
    padding: 20px;
}

.my-icons{
    transition: .4s ease-in-out;
    text-align: center;
    margin-left: 20px;
}
.my-icons:hover{
    transform: scale(1.3);

}

    </style>
    </head>
<body>

  <!-- navigation area start  -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
  <a class="navbar-brand" href="#">
  <img src="images/dot3studio_logo.png" alt="" width="100px" height="26px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php if($page=='home'){echo 'active';}?>">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
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

<div class="logo-section">
<h1>
<span>D</span>
<span>o</span>
<span>t</span>
<span>3</span>
<span>s</span>
<span>t</span>
<span>u</span>
<span>d</span>
<span>i</span>
<span>o</span>
</h1>
</div>


<div class="container-fluid my-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="h1 text-center desing-text">UI/UX design</h2>
            <p class="lead text-light">
                we designed best resposive design for web application and mobile application like personal website, portfolio website, e-commerce website, mobile application etc
            </p>

        </div>
        <div class="col-md-6">
            <div class="text-center">
            <img src="images/web design.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="h1 text-center desing-text">Web developing</h2>
            <p class="lead text-light">
                we developed best resposive design for web application and mobile application like personal website, portfolio website, e-commerce website, mobile application in hhtml, css, php, js etc
            </p>

        </div>
        <div class="col-md-6">
           <div class="text-center">
           <img src="images/develope.png" alt="" class="img-fluid">
           </div>
        </div>
    </div>
</div>
<!-- footer-section start  -->
<div class="footer-section">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-md-4 offset-md-4 text-cenetr">
        <div class="text-center">
          <ul class="nav">
            <li class="nav-item">
              <a href="#" class="nav-link my-icons">
                  <i class="fab fa-facebook-f fa-2x text-light"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link my-icons">
                  <i class="fab fa-twitter fa-2x text-light"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link my-icons">
                  <i class="fab fa-github fa-2x text-light"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link my-icons">
                  <i class="fab fa-youtube fa-2x text-light"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- end footer-section  -->
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12 text-center">
      <div class="h6">
        copyright &copy; 2020. All Right Reserved Dot3studio.
      </div>
    </div>
  </div>
</div>

</body>
</html>