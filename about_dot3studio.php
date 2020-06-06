<?php $page='about us';
include("includes/header.php");
include("includes/navigation.php");

?>

<div class="jumbotron jumbotron-fluid jumbotron2">
  <div class="container">
    <h1 class="display-4 text-center text-light font-weight-bold">Who we are</h1>
    
  </div>
</div>

<div class="container my-5">
  <div class="row">
    <div class="col-md-6">
      <div class="text-center">
        <img src="images/Lantern.png" alt="" class="skill-img">
      </div>
    </div>
    <div class="col-md-6">
      <div class="my-3">
        <label for="html" class="text-primary">HTML</label>
      <div class="progress">
     <div class="progress-bar progress-bar-striped progress-bar-animated myhtml" role="progressbar" style="width: 0%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">90%</div>
     </div>
      </div>

      <div class="my-3">
        <label for="html" class="text-warning">CSS</label>
      <div class="progress">
     <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated mycss" role="progressbar" style="width: 0%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">90%</div>
     </div>
      </div>

      <div class="my-3">
        <label for="html" class="text-success">JS</label>
      <div class="progress">
     <div class="progress-bar progress-bar-striped bg-success progress-bar-animated myjs" role="progressbar" style="width: 0%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">80%</div>
     </div>
      </div>

      <div class="my-3">
        <label for="html" class="text-danger">PHP</label>
      <div class="progress">
     <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated myphp" role="progressbar" style="width: 0%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">60%</div>
     </div>
      </div>
      <div class="my-3">
        <label for="html" class="text-dark">ui/ux</label>
      <div class="progress">
     <div class="progress-bar progress-bar-striped bg-dark progress-bar-animated myxd" role="progressbar" style="width: 0%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">70%</div>
     </div>
      </div>
    </div>
  </div>
</div>



<script>
$(document).ready(function(){
$('.myhtml').animate({width: '90%'}, 200);
$('.mycss').animate({width: '90%'}, 200);
$('.myjs').animate({width: '80%'}, 200);
$('.myphp').animate({width: '60%'}, 200);
$('.myxd').animate({width: '70%'}, 200);


});

</script>
<?php include("includes/footer.php");?>