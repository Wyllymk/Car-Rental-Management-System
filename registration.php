<?php include('inc/db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="post" action="registration.php">
                        <h2 class="form-title">Create account</h2>
                        <?php include('inc/errors.php'); ?>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="Your Name" value="<?php echo $username; ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" value="<?php echo $email; ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password_1" id="password_1" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password_2" id="password_2" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="flexCheckDefault" class="form-check-input" />
                            <label for="flexCheckDefault" class="form-check-label"><span class="cb-icon"><span class="cb-icon"></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label> <br><br>
                        </div>
                        <div class="form-group">
                            <input style= "cursor:pointer" type="submit" name="reg_user" id="submit" class="form-submit" value="Sign Up"/>
                        </div>
                        <p class="loginhere">
                        Already a Member? <a href="login.php" class="loginhere-link">Login here</a>
                        </p>
                    </form>
                    
                    
                </div>
            </div>
        </section>

    </div>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    
</body>
</html>