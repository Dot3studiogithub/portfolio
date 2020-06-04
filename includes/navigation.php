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
      <li class="nav-item <?php if($page=='profile'){echo 'active';}?>">
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