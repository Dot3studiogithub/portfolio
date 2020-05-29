<?php
$page='profile';
include("includes/header.php");
include("includes/navigation.php");
?>

<div class="container">
    <div class="row">
        <div class="port-me">
            <div class="display-1">Dot3studio</div>
            <span class="h6 text-center">
        Web Designer &nbsp;&nbsp;|&nbsp;&nbsp;Web Developer&nbsp;&nbsp;|&nbsp;&nbsp;Youtuber&nbsp;&nbsp;|&nbsp;&nbsp;Freelancer
        </span>
        </div>
        
    </div>
    <div class="row mt-5">
        <div class="col-md-3">
            <a href="" data-toggle="collapse" data-target="#homecard">
            <div class="card bg-dark border-0 p-5 text-center text-light">
                <i class="fas fa-home fa-3x text-light d-block mx-auto"></i>
                Home
            </div>
            </a>
        </div>
        <div class="col-md-3"> 
            <a href="" data-toggle="collapse" data-target="#resumecard">
            <div class="card bg-warning border-0 p-5 text-center text-light">
                <i class="fas fa-graduation-cap fa-3x text-light d-block mx-auto"></i>
                Resume
            </div>
            </a>
        </div>
        <div class="col-md-3"> 
            <a href="" data-toggle="collapse" data-target="#projectcard">
            <div class="card bg-primary border-0 p-5 text-center text-light">
                <i class="fas fa-folder fa-3x text-light d-block mx-auto"></i>
                Project
            </div>
            </a>
        </div>
        <div class="col-md-3"> 
            <a href="" data-toggle="collapse" data-target="#contactcard">
            <div class="card bg-danger border-0 p-5 text-center text-light">
                <i class="fas fa-envelope fa-3x text-light d-block mx-auto"></i>
                Contact
            </div>
            </a>
        </div>
    </div>
    <div class="collapse" id="homecard">
        <div class="card bg-dark border-0">
            <div class="card-header h3 text-light">
               my skills
            </div>
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
        
    </div><!-- end home card -->
    <div class="collapse" id="resumecard">
    <div class="card bg-dark">
        <div class="card-header">
            <div class="h1 text-light">Resume</div>
        </div>
    </div>
</div><!-- end resume card -->
<div class="collapse" id="projectcard">
    <div class="card bg-dark">
        <div class="card-header">
            <div class="h1 text-light">Resume</div>
        </div>
    </div>
</div><!-- end project  card -->
<div class="collapse" id="contactcard">
    <div class="card bg-dark">
        <div class="card-header">
            <div class="h1 text-light">Resume</div>
        </div>
    </div>
</div><!-- end contact card -->
</div>




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

