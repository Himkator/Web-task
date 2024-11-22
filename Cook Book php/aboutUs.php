<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title = "About Us"; ?>
    <title><?php echo $title; ?></title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="col 12">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <?php $logo = "CookBook"; ?>
                <a class="navbar-brand col 3" style="color: green;" id="logo"><?php echo $logo; ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col 4" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" id="about" >About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex search" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <!-- buttons for sign up and sing in -->
                    <div class="login" id="loginRegisterBtns">
                        <button class="btn btn-primary" id="login">Sign In</button>
                        <button class="btn btn-secondary" id="register">Sign Up</button>
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
            </div>
        </nav>
    </header>
    <hr>

    <main class="container my-5">
        <h1 class="text-center mb-5" style="color: green;">About CookBook</h1>
        
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>Our Mission</h2>
                <p>At CookBook, our mission is to inspire creativity in the kitchen, promote healthy eating habits, and bring people together through the joy of cooking. We believe that good food has the power to nourish both body and soul.</p>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row mt-4">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <h3>What We Offer</h3>
                <ul class="list-unstyled">
                    <li>✓ Diverse recipe collection</li>
                    <li>✓ Cooking tips and techniques</li>
                    <li>✓ Meal planning tools</li>
                    <li>✓ Community forums</li>
                </ul>
            </div>
            <div class="col-md-4 ">
                <h3>Our Values</h3>
                <ul class="list-unstyled">
                    <li>✓ Quality ingredients</li>
                    <li>✓ Sustainable practices</li>
                    <li>✓ Cultural diversity</li>
                    <li>✓ Continuous learning</li>
                </ul>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-4 mt-4">
                <h3>Join Our Community</h3>
                <p>Become a part of our growing family of food enthusiasts. Share recipes, learn new techniques, and connect with like-minded individuals who share your passion for cooking.</p>
                <a href="#" class="btn btn-success">Join Now</a>
            </div>
        </div>
    </main>
    <footer class="col-12" id="footer">
        <div>
            <h1><b>CookBook</b></h1>
            <p>Discover delicious recipes and culinary<br> 
                inspiration for every occasion.</p>
        </div>
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
    <script src="aboutUs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="main.js" type="module"></script>
</body>
</html>
