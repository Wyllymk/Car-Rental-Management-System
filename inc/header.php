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
          <a class="nav-link text-white" aria-current="page" href="home.php"><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about-us.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="faqs.php"></i>FAQS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="contact-us.php"></i>Contact Us</a>
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
          <?php  if (isset($_SESSION['username'])) : ?>
          <p>Welcome <strong style="text-transform: uppercase;"><?php echo $_SESSION['username']; ?></strong></p>
          <?php endif ?>
        </li>
        <li class="nav-item">
          <?php  if (isset($_SESSION['username'])) : ?>          
          <div class="login_btn"> <a href="index.php?logout='1'" class="btn btn-outline-success">Logout</a> </div>
          <?php endif ?>
        </li>
            
      </ul>
      
    </div>
  </div>
</nav>
</header>
  