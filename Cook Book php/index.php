<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <?php $title = "Cook Book"; ?>
    <title><?php echo $title; ?></title>
</head>
<body>
<?php
$nameRegis = $_POST['register-name'];
echo "<h4>Thanks for registration, dear $nameRegis ! Welcome to CookBook</h4>";
?>
    <!-- header of site -->
    <header class="col 12">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <!-- logg -->
                <?php $logo = "CookBook"; ?>
              <a class="navbar-brand col 3" style="color: green;" id="logo"><?php echo $logo; ?></a>

              <!-- toggle(activates only in mobile version) -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <!-- navigation -->
              <div class="collapse navbar-collapse col 4" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html" id="about">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php">About us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#footer">Contact</a>
                  </li>
                </ul>
                <!-- form for search -->
                <form class="d-flex search" role="search" >
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <!-- buttons for sign up and sing in -->
                <div class="login" id="loginRegisterBtns">
                    <button class="btn btn-success" id="login">Sign In</button>
                    <button class="btn btn-primary" id="register">Sign Up</button>
                </div>
              </div>

              <!-- это иконка логина, если на которую нажать переходит на страницу Регистраций и Входа -->
              <div class="profile" id="profile">
                <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" 
                alt="User Icon" 
                class="logo-icon" />
            </div>
            <!--  -->
            </div>
          </nav>
    </header>
    <!-- line for a beaty) -->
    <hr>

    <!-- main part -->
    <div class="container-fluid main">

        <!-- special recipe -->
        <div class="col 12 feature">
            <h1>Featured Recipe</h1>
            <div class="card">
                <div class="card-body card-feature">
                    <img src="grey.jpg" class="img" alt="..." width="150px" height="100%">
                    <div class="info">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
              </div>
        </div>
        
        <!-- all recipes -->
        <div class="col 12 recipe row" id="recipes">
            <h1>Latest Recipes</h1>
            <!-- recipe part from js -->
        </div>
    </div>

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
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About us</a>
                </li>
            </ul>
        </div>

        <!-- contacts -->
        <div style="text-align: right;">
            <h1><b>Contact Us</b></h1>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">info@cookbook.com</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Narxoz</a>
                </li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="main.js" type="module"></script>
</body>
</html>
