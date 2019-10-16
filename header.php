<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
                <!--<link href="style.css" rel="stylesheet" type="text/css"/>-->
                 <!--Latest compiled and minified CSS--> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
         <!--Optional theme--> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
         <!--Latest compiled and minified JavaScript--> 
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
        
            <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">-->
          <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
          <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>-->
          <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>-->


        <title>Meeting Space</title>
        <meta charset="UTF-8">


        <!--        font swesome-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!--<link href="links/font-awesome.min.css" rel="stylesheet" type="text/css"/>-->
     
        <!--        Bootstrap-->
        <link href="links/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!--        Style sheet-->
        <link href="links/style.css" rel="stylesheet" type="text/css"/>

        <link href="links/bootstrap.min.css" rel="stylesheet" type="text/css"/>
       <script src="links/jquery.min.js" type="text/javascript"></script>
       <script src="links/popper.min.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--        <header>
                    <nav>
                        <div class="main-wrapper">
                            <ul class="float-left">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                            </ul>
                            <div class="navbar navbar-expand-lg navbar-light bg-light float-right">
                                <form class="form-inline my-2 my-lg-0 ">
                                    <input class="form-control mr-sm-2" type="text" name="uid" placeholder="Username/email">
                                    <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password">
                                    <button class="btn btn-warning" type="submit" name="submit">Login</button>
                                    <a href="signup.php" class="float-right" >Sign Up</a>
                                </form>
                                
                            </div>
                        </div>
                    </nav>
                </header>-->
        <header id="header" class="transparent-nav">
            <div class="container">
                <div class="navbar-header ">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a class="logo" href="index.php">
                            <img src="images/001-budapest-metro-logo.png" alt="logo"/>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <!-- Mobile toggle -->
                    <button class="navbar-toggle">
                        <span></span>
                    </button>
                    <!-- /Mobile toggle -->
                </div>
                <!-- Navigation -->
                <nav id="nav">
                    <ul class="main-menu nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown show">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownlink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Product</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownlink" id="dropdownlink">
                                <a class="dropdown-item" href="meeting_rooms.php">Meeting rooms</a>
                                <a class="dropdown-item" href="#">Conference rooms</a>
                                <a class="dropdown-item" href="#">Board rooms</a>
                                <a class="dropdown-item" href="#">Event Space</a>
                            </div>
                        </li>
                        <li class="dropdown show">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownlink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Our Company</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownlink" id="dropdownlink">
                                <a class="dropdown-item" href="how-it-works.php">How It Works</a>
                                <a class="dropdown-item" href="about-us.php">about us</a>
                                <a class="dropdown-item" href="#">contact us</a>
                            </div>
                        </li>
                        <li >
                            <form class="form-inline my-2 my-lg-0 " action="LoginProcessor.php" method="post">
                            <input class="form-control mr-sm-2" type="text" name="email" placeholder="Username/email">
                                    <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password">
                                    <button class="btn btn-warning" type="submit" name="login">Login</button>
                            </form>    
                        </li>
                        <li>
                            <a href="signup.php" class="float-right" >Sign Up</a>
                        </li>

                    </ul>
                </nav>
                <!-- /Navigation -->
            </div>
        </header>
        <br><br><br>
