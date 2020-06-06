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
      
      <li class="nav-item <?php if($page=='courses'){echo 'active';}?>">
        <a class="nav-link" href="cource_dot3studio.php">courses</a>
      </li>
      <li class="nav-item <?php if($page=='about us'){echo 'active';}?>">
        <a class="nav-link" href="about_dot3studio.php">about us</a>
      </li>
      <li class="nav-item <?php if($page=='services'){echo 'active';}?>">
        <a class="nav-link" href="services_dot3studio.php">Services</a>
      </li>
      <li class="nav-item <?php if($page=='contact us'){echo 'active';}?>">
        <a class="nav-link" href="contact_dot3studio.php">contact us</a>
      </li>
    </ul>
   
  </div>
</nav>


<!-- end navigation area  -->