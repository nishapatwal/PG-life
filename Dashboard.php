<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | PG Life</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/dashboard.css" rel="stylesheet" />
</head>
<body>
    <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="/">
                <img src="img/logo.png" alt="PG Life Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user"></i> Hi, Aditya Sood
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php"> <i class="fas fa-chart-line"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="main-content">
        <div class="page-container">
            <h1 class="page-heading">My Profile</h1>

            <div class="profile-card">
                <div class="profile-avatar-container">
                    <img src="img/profile_avatar.png" alt="User Avatar" class="profile-avatar">
                </div>
                <div class="profile-details">
                    <div class="profile-name">Aditya Sood</div>
                    <div class="profile-email">aditya@gmail.com</div>
                    <div class="profile-phone">+91-9876543210</div>
                    <div class="profile-college">Internshala</div>
                    <a href="#" class="edit-profile-link">Edit Profile</a>
                </div>
            </div>

            <h1 class="page-heading interested-properties-heading">My Interested Properties</h1>
            <div class="interested-properties-content">
                <p>You haven't expressed interest in any properties yet. Browse our listings to find your perfect PG!</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="page-container footer-container">
            <div class="footer-cities">
                <div class="footer-city">
                    <a href="property_list.html?city=Delhi">PG in Delhi</a>
                </div>
                <div class="footer-city">
                    <a href="property_list.html?city=Mumbai">PG in Mumbai</a>
                </div>
                <div class="footer-city">
                    <a href="property_list.html?city=Bangalore">PG in Bangalore</a>
                </div>
                <div class="footer-city">
                    <a href="property_list.html?city=Hyderabad">PG in Hyderabad</a>
                </div>
            </div>
            <div class="footer-copyright">© 2020 Copyright PG Life </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>