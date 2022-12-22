<header>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="images/mylogo.png" rel="icon" type="image/png">

    <title>Hello, world!</title>
  <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="index.php">Twilight</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link text-white" aria-current="page" href="index.php"><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about-us.php"><i class="fa fa-laptop"></i>About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="faqs.php"><i class="fa fa-question"></i>FAQS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="contact-us.php"><i class="fa fa-envelope"></i>Contact Us</a>
        </li>      
      </ul>
      <form action="" method="post" class="d-flex">
        <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
        <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search" 
        name="searchdata" class="form-control" required="true">
        <button class="btn btn-outline-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
      </form>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <div class="login_btn"> <a href="#loginform" class="btn btn-outline-success" data-toggle="modal" 
          data-dismiss="modal">Login / Register</a> </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" 
          data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Admin Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Customer Login</a></li>
          </ul>
        </li>      
      </ul>
    </div>
  </div>
</nav>
</header>
  