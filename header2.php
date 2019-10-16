<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Meeting Space</title>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style2.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="home.php">
                <img src="images/001-budapest-metro-logo.png" alt="" style="max-height:40px;"/></a>
                <h3 class="text-uppercase"><small>Meeting Space</small></h3>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle" type="button"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Product
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="meeting_rooms.php">Meeting rooms</a>
                            <a class="dropdown-item" href="#">Conference rooms</a>
                            <a class="dropdown-item" href="#">Board rooms</a>
                            <a class="dropdown-item" href="#">Event Space</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle" type="button"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Our Company
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="how-it-works.php">How It Works</a>
                            <a class="dropdown-item" href="about-us.php">About us</a>
                            <a class="dropdown-item" href="#">Contact us</a>
                        </div>
                    </div>
                    
                </ul>
                <div class="col-auto">
                            <form class="form-inline my-2 my-lg-0 " action="login.inc.php" method="post">
                            <input class="form-control form-control-sm mr-sm-2" type="text" name="email" placeholder="Username/email">
                                    <input class="form-control form-control-sm mr-sm-2" type="password" name="pwd" placeholder="Password">
                                    <button class="btn btn-warning btn-sm" type="submit" name="login">Login</button>
                            </form>    
                       
            </div>
                            <a href="signup.php" class="float-right btn-sm btn btn-outline-warning" >Sign Up</a>
                        

            </div>
        </nav>
        </div>