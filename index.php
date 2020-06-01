<?php include("includes/header.php");?>
<?php include("includes/navigation.php");?>
<!-- hero section start  -->
<div class="hero-section">
<div class="jumbotron bg-transparent border-0">
  <h1 class="display-3 text-center text-light mt-5 font-weight-bold">Welcome</h1>
  <h6 class="h6 text-center text-light font-weight-bold">To</h6>
  <h1 class="display-3 text-center text-light font-weight-bold">Dot3studio</h1>
  <h1 class="h1 text-center text-light">We are <span class="typed text-danger h1"></span></h1>
 <div class="text-center down-plz">
 <a class="btn btn-outline-danger btn-lg hvr-buzz" href="#" role="button">
 <i class="fas fa-angle-down fa-3x"></i>
 </a>
 </div>
</div>
</div>
<!-- end hero section  -->

<!-- blog section start  -->
<div class="container-fluid my-5">
  <h1 class="h1 text-center text-dark my-5">Recent Blog</h1>
  <div class="row">
    <div class="col-md-3">
      <a href="#">
      <div class="card blog-card">
        <img src="images/1.png" alt="" class="blog-img">
        <div class="card-footer bg-transparent text-dark text-center">Blob 1</div>
      </div>
      </a>
    </div> <!-- end column 1 -->
    <div class="col-md-3"></div> <!-- end column 2 -->
    <div class="col-md-3"></div> <!-- end column 3 -->
    <div class="col-md-3"></div> <!-- end column 4 -->
  </div><!-- end row -->
</div><!-- end container-fluid -->

<!-- end blog section  -->

<!-- my-skill section start  -->
<div class="container-fluid my-skill-section">
  <div class="row">

  <div class="col-md-6">
    <div class="text-center">
      <div class="my-skill-heading">
        <h1 class="h1 text-light my-5 font-weight-bold">my-skills</h1>
        <img src="https://media.giphy.com/media/l0MYymIHhTlPXacxi/giphy.gif" alt="" class="my-skill-img">
      </div>
    </div>
  </div><!-- end col-6-->

  <div class="col-md-6 my-5">
                  <div class="my-4">
                    <label for="" class="text-success">HTML</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success progress-bar-animated myhtml " role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">95%</div>
                    </div>
                </div>

                <div class="my-4">
                    <label for="" class="text-warning">CSS</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated mycss" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90                          %</div>
                    </div>
                </div>

                <div class="my-4">
                    <label for="" class="text-info">JAVASCRIPT</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated myjs" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                </div>

                <div class="my-4">
                    <label for="" class="text-danger">PHP</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated myphp" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
                    </div>
                </div>

                <div class="my-4">
                    <label for="" class="text-primary">Adobe XD</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-primary progress-bar-animated myxd" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                </div>
               
                <div class="my-4">
                    <label for="" class="text-danger">Adobe illustrator</label>

                    <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated myill" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                </div>
  </div><!-- end col-6-->

  </div><!-- end row-->
</div><!-- end container-->


<!-- emd my-skill section  -->

<!-- services section start  -->
<div class="my-services">
<div class="container">
<h1 class="h1 text-center text-dark my-5">Services</h1>
  <div class="row">
    <div class="col-md-4 my-2">
      <div class="card card-body">
        <div class="text-center mt-3">
          <i class="fas fa-desktop fa-5x text-danger"></i>
              <h6 class="h5 mt-3">Web developing</h6>
              <p class="text-justify text-dark">
                We developed all type resposive front-end backend web layout (personal website  portfolio website e-commerce website) etc. 
              </p>
        </div>
      </div>
    </div> <!-- end col-md-4 -->
    <div class="col-md-4 my-2">
      <div class="card card-body">
        <div class="text-center mt-3">
          <i class="fas fa-pencil-ruler fa-5x text-success"></i>
              <h6 class="h5 mt-3">ui/ux designing</h6>
              <p class="text-justify text-dark">
                We Disigned all type resposive front-end backend web layout for big (personal website  portfolio website e-commerce website) etc. 
              </p>
        </div>
      </div>
    </div> <!-- end col-md-4 -->
    <div class="col-md-4 my-2">
      <div class="card card-body">
        <div class="text-center mt-3">
          <i class="fas fa-desktop fa-5x text-danger"></i>
              <h6 class="h5 mt-3">Graphics Designing</h6>
              <p class="text-justify text-dark">
                We designed best graphics for all type uses(icons, vector-images portrait, mandal, banners product-card) etc.
              </p>
        </div>
      </div>
    </div> <!-- end col-md-4 -->
  </div>
</div>

</div>

<!-- end services section  -->


<script>
var typed = new Typed('.typed', {
    strings: ['Web Designer', 'Web Developre', 'Youtuber'],
    typeSpeed: 100,
    backSpeed: 0,
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


<?php include("includes/footer.php");?>