<?php include('inc/db.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="login.php">
                        <?php include('inc/errors.php'); ?>
                        <h2 class="form-title">Login</h2>                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="Your Username"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>                        
                        <div class="form-group">
                            <input style= "cursor:pointer" type="submit" name="login_user" id="submit" class="form-submit" value="Login"/>
                        </div>
                        <p class="loginhere">
                        Do not have an account ? <a href="registration.php" class="loginhere-link">Register here</a>
                        </p>
                    </form>
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>