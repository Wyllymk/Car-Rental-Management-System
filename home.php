<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/styles.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.css" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
   
    

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    
    <!--Header-->
    <?php include('inc/header.php');?>
    <!-- /Header --> 

  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-2">
                <?php include('inc/slider.php');?>
            </div>
        </div>
    </div>

    <section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>Car For You</span></h2>
      <p>Find the best rental prices on luxury, economy, and family rental cars with FREE amendments near you, reserve online today!</p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Car</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehical-details.php?vhid=1"><img src="admin/img/vehicleimages/rear-3-4-left-589823254_930x620.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>2019 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehical-details.php?vhid=1"> Maruti Suzuki Wagon R</a></h6>
<span class="price">$500 /Day</span> 
</div>
<div class="inventory_info_m">
<p>Maruti Wagon R Latest Updates

Maruti Suzuki has launched the BS6 Wa</p>
</div>
</div>
</div>
  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehical-details.php?vhid=2"><img src="admin/img/vehicleimages/BMW-5-Series-Exterior-102005.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>2018 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehical-details.php?vhid=2"> BMW 5 Series</a></h6>
<span class="price">$1000 /Day</span> 
</div>
<div class="inventory_info_m">
<p>BMW 5 Series price starts at ? 55.4 Lakh and goes upto ? 68.39 Lakh. T</p>
</div>
</div>
</div>
  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehical-details.php?vhid=3"><img src="admin/img/vehicleimages/audi-q8-front-view4.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>2017 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehical-details.php?vhid=3"> Audi Q8</a></h6>
<span class="price">$3000 /Day</span> 
</div>
<div class="inventory_info_m">
<p>As per ARAI, the mileage of Q8 is 0 kmpl. Real mileage of the vehicle </p>
</div>
</div>
</div>
  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehical-details.php?vhid=4"><img src="admin/img/vehicleimages/front-left-side-47.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>2020 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehical-details.php?vhid=4"> Nissan Kicks</a></h6>
<span class="price">$800 /Day</span> 
</div>
<div class="inventory_info_m">
<p>Latest Update: Nissan has launched the Kicks 2020 with a new turbochar</p>
</div>
</div>
</div>
  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehical-details.php?vhid=5"><img src="admin/img/vehicleimages/Nissan-GTR-Right-Front-Three-Quarter-84895.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>2019 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehical-details.php?vhid=5"> Nissan GT-R</a></h6>
<span class="price">$2000 /Day</span> 
</div>
<div class="inventory_info_m">
<p> The GT-R packs a 3.8-litre V6 twin-turbocharged petrol, which puts ou</p>
</div>
</div>
</div>
  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehical-details.php?vhid=6"><img src="admin/img/vehicleimages/Nissan-Sunny-Right-Front-Three-Quarter-48975_ol.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>CNG</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>2018 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehical-details.php?vhid=6"> Nissan Sunny 2020</a></h6>
<span class="price">$400 /Day</span> 
</div>
<div class="inventory_info_m">
<p>Value for money product and it was so good It is more spacious than ot</p>
</div>
</div>
</div>
  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehical-details.php?vhid=7"><img src="admin/img/vehicleimages/2015_Toyota_Fortuner_(New_Zealand).jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>2020 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehical-details.php?vhid=7"> Toyota Fortuner</a></h6>
<span class="price">$3000 /Day</span> 
</div>
<div class="inventory_info_m">
<p>Toyota Fortuner Features: It is a premium seven-seater SUV loaded with</p>
</div>
</div>
</div>
  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehical-details.php?vhid=8"><img src="admin/img/vehicleimages/marutisuzuki-vitara-brezza-right-front-three-quarter3.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>2018 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehical-details.php?vhid=8"> Maruti Suzuki Vitara Brezza</a></h6>
<span class="price">$600 /Day</span> 
</div>
<div class="inventory_info_m">
<p>The new Vitara Brezza is a well-rounded package that is feature-loaded</p>
</div>
</div>
</div>
       
      </div>
    </div>
  </div>
</div></section>

   <!--Footer-->
   <?php include('inc/footer.php');?>
   <!-- /Footer --> 

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src=js/jquery.js></script>
    <script src=js/script.js></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>