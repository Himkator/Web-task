<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="receip.css"
    <title>CookBook</title>
</head>
<body>
    <!-- header of site -->
    <header class="col 12">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- logg -->
                <a class="navbar-brand col 3" id="logo">CookBook</a>

                <!-- toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- navigation -->
                <div class="collapse navbar-collapse col 4" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutUs.php" id="about">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contact</a>
                        </li>
                    </ul>

                    <!-- search -->
                    <form class="d-flex search" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

                    <!-- login buttons -->
                    <div class="login" id="loginRegisterBtns">
                        <button class="btn btn-primary" id="login">Sign In</button>
                        <button class="btn btn-secondary" id="register">Sign Up</button>
                    </div>
                </div>

                <!-- profile icon -->
                <div class="profile" id="profile">
                    <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" alt="User Icon" class="logo-icon" />
                </div>
            </div>
        </nav>
    </header>
    <hr>

    <!-- main part -->
    <div class="recipe" id="recipe">
        <!-- recipe content -->
    </div>

    <br><br><br>

    <!-- footer part -->
    <footer class="col 12" id="footer">
        <!-- logo and description -->
        <div>
            <h1><b>CookBook</b></h1>
            <p>Discover delicious recipes and culinary<br>
                inspiration for every occasion.</p>
        </div>

        <!-- navigation part for footer -->
        <div class="links">
            <h1><b>Quick Links</b></h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
            </ul>
        </div>

        <!-- contacts -->
        <div style="text-align: right;">
            <h1><b>Contact Us</b></h1>
            <ul>
                <li><a class="nav-link active" aria-current="page" href="#">info@cookbook.com</a></li>
                <li><a href="#">Narxoz</a></li>
            </ul>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="receipPage.js" type="module"></script>
    <script src="main.js" type="module"></script>
</body>
</html>