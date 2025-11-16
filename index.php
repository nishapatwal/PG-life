<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGLife Welcome</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/index.css" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/property_list.css" rel="stylesheet" />
</head>
<body>
     <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="/">
                <img src="img/logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                            <i class="fas fa-user"></i>Signup
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                            <i class="fas fa-sign-in-alt"></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div id="loading">
    </div>
    <main class="hero">
    <h1> <b> Happiness per Square Foot</b> </h1>
    <div class="search-container">
        <input type="text" placeholder="Enter your city to search for PGs">
        <button type="submit">
            <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
            </svg>
        </button>
    </div>
</main>
     <div class="Major-cities">
        <h2>Major Cities</h2>
     </div>
        <div class="city-list">
            <div class="city-item">
                <a href="property_list.html?city=Delhi">
                    <div class="city-icon-container">
                        <img src="img/delhi.png" alt="Delhi Icon" class="city-icon">
                        </div>
                </a>
            </div>
            <div class="city-item">
                <a href="property_list.html?city=Mumbai">
                    <div class="city-icon-container">
                        <img src="img/mumbai.png" alt="Mumbai Icon" class="city-icon">
                        </div>
                </a>
            </div>
            <div class="city-item">
                <a href="property_list.html?city=Bangalore">
                    <div class="city-icon-container">
                        <img src="img/bangalore.png" alt="Bengaluru Icon" class="city-icon">
                        </div>
                </a>
            </div>
            <div class="city-item">
                <a href="property_list.html?city=Hyderabad">
                    <div class="city-icon-container">
                        <img src="img/hyderabad.png" alt="Hyderabad Icon" class="city-icon">
                        </div>
                </a>
            </div>
            <div class="city-item">
                <a href="property_list.html?city=Chennai">
                    <div class="city-icon-container">
                        <img src="img/chennai.png" alt="Chennai Icon" class="city-icon">
                        </div>
                </a>
            </div>
        </div>
            <div class="footer">
                <div class="page-container footer-container">
                    <div class="footer-cities">
                        <div class="footer-city">
                            <a href="property_list.html">PG in Delhi</a>
                        </div>
                        <div class="footer-city">
                            <a href="property_list.html">PG in Mumbai</a>
                        </div>
                        <div class="footer-city">
                            <a href="property_list.html">PG in Bangalore</a>
                        </div>
                        <div class="footer-city">
                            <a href="property_list.html">PG in Hyderabad</a>
                        </div>
                    </div>
                    <div class="footer-copyright">© 2020 Copyright PG Life </div>
                </div>
            </div>
            <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="signup-heading">Signup with PGLife</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
            
                        <div class="modal-body">
                            <form id="signup-form" class="form" role="form">
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
                                </div>
            
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-phone-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required>
                                </div>
            
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
            
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                                </div>
            
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-university"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="college_name" placeholder="College Name" maxlength="150" required>
                                </div>
            
                                <div class="form-group">
                                    <span>I'm a</span>
                                    <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> Male
                                    <label for="gender-male">
                                    </label>
                                    <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                                    <label for="gender-female">
                                        Female
                                    </label>
                                </div>
            
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-primary">Create Account</button>
                                </div>
                            </form>
                        </div>
            
                        <div class="modal-footer">
                            <span>Already have an account?
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="login-heading">Login with PGLife</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
            
                        <div class="modal-body">
                            <form id="login-form" class="form" role="form">
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
            
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                                </div>
            
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
            
                        <div class="modal-footer">
                            <span>
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click here</a>
                                to register a new account
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

