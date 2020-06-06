<?php $page='home'; 
include("includes/header.php");?>
<?php include("includes/navigation.php");?>
<!-- hero section start  -->
<div class="hero-section border-0">
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
<div class="container my-5">
  <h1 class="h1 text-center text-dark my-5">Top Hindi Video courses</h1>
  <div class="row">
    <div class="col-md-3 col-sm-3">
      <a href="#">
      <div class="card blog-card">
        <img src="images/1.png" alt="" class="blog-img">
        <div class="card-footer bg-transparent text-dark text-center">Blog 1</div>
      </div>
      </a>
    </div> <!-- end column 1 -->
    <div class="col-md-3 col-sm-3">
    <a href="#">
      <div class="card blog-card">
        <img src="images/1.png" alt="" class="blog-img">
        <div class="card-footer bg-transparent text-dark text-center">Blog 1</div>
      </div>
      </a>
    </div> <!-- end column 2 -->
    <div class="col-md-3 col-sm-3">
    <a href="#">
      <div class="card blog-card">
        <img src="images/1.png" alt="" class="blog-img">
        <div class="card-footer bg-transparent text-dark text-center">Blog 1</div>
      </div>
      </a>
    </div> <!-- end column 3 -->
    <div class="col-md-3 col-sm-3">
    <a href="#">
      <div class="card blog-card">
        <img src="images/1.png" alt="" class="blog-img">
        <div class="card-footer bg-transparent text-dark text-center">Blog 1</div>
      </div>
      </a>
    </div> <!-- end column 4 -->
  </div><!-- end row -->
</div><!-- end container-fluid -->

<!-- end blog section  -->
<div class="text-center my-5">
<a href="#" class="btn btn-outline-success">View all courses</a>
</div>

<!-- blog section start  -->
<div class="container-fluid my-5">
<h1 class="h1 text-center text-dark my-5">Recently  added</h1>
  <div class="row">
    <div class="col-md-9 col-sm-9">
    <div class="row">
    <div class="col-md-12">
      <div class="card card-body postt-card">
        <div class="row">
          <div class="col-md-6">
            <div class="text-center">
            <img src="images/web design.png" alt="" class=" card-img-top title-img">
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-center mt-5">
              <h1>title</h1>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, vitae 
                dignissimos sed reprehenderit totam cumque, praesentium ducimus 
                tempora suscipit necessitatibus iure odit animi magnam non at ab porro vero error....</p>
                <a href="" class="btn btn-outline-dark">read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div><!-- end col-9 row-->
    </div>
    <div class="col-md-3 col-sm-3">
      <div class="text-center">
        <div class="card">
          <div class="card-header bg-dark text-light">Support by donation</div>
          <div class="card-body">
            <img src="images/1.png" alt="" class="donation-img">
          </div>
        </div>
      </div><!-- end text-center -->
      <div class="text-center my-3">
        <div class="card">
          <div class="card-header bg-dark text-light">Like us our facebook page</div>
          <div class="card-body">
            <img src="images/1.png" alt="" class="donation-img">
          </div>
        </div>
      </div><!-- end text-center -->
      <div class="text-center my-3">
        <div class="card">
          <div class="card-header bg-dark text-light">Popular</div>
          <div class="card-body">
            <img src="images/1.png" alt="" class="donation-img">
          </div>
        </div>
      </div><!-- end text-center -->
    </div><!-- end sidebar -->
  </div><!-- end row -->
</div><!-- end container-fluid -->

<!-- end blog section  -->



<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

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




<?php include("includes/footer.php");?>