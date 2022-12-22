<?php include('inc/db.php') ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" >
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css” />
    

   
  </head>
  <body>
      
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-4"> </div>
            <div class="col-md-4">
                <form method="POST" class="form-control" action="login.php">
                    <h2 class="text-danger">Login (ADMIN AREA)</h2> <hr>
                    <?php include('inc/errors.php'); ?>                       
                <div class="form-group">
                    <input type="text" class="form-input" name="username" placeholder="Your Username"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" id="password" data-toggle="password" name="password" placeholder="Password"/>
                </div>                        
                <div class="form-group">
                    <input type="submit" name="login_admin" id="submit" class="form-submit" value="Login"/>
                </div>
                </form>
            </div>
                
        </div>
    </div>










    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src=js/jquery.js></script>
    <script src=js/script.js></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
  </body>
</html>