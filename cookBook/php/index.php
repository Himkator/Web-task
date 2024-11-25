<?php
//session_start();

$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
// Database connection settings
$host = "localhost";
$port = "5432";
$dbname = "web";
$user = "postgres";
$password = "root";

// Connect to the PostgreSQL database
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "Error: Unable to connect to the database.";
    exit();
}


$pageTitle = "CookBook";
//
// Define the navigation menu items
$navItems = [
    ["label" => "Home", "href" => "index.php", "id" => "home", "aria-current" => "page"],
    ["label" => "About us", "href" => "aboutUs.php", "id" => "about", "aria-current" => ""],
    ["label" => "Contact", "href" => "#footer", "id" => "contact", "aria-current" => ""],
];

// Query to fetch all recipes
$query = "SELECT * FROM recipes";
$recipes = pg_query($conn, $query);
$recipes = pg_fetch_all($recipes);

$query = "SELECT * FROM recipes WHERE featured=1 LIMIT 1";
$featuredResult = pg_query($conn, $query);
$featured = pg_fetch_assoc($featuredResult);

pg_close($conn);
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
<header class="col-12">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand col-3" style="color: green;" id="logo"><?php echo $pageTitle; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse col-4" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php foreach ($navItems as $item): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $item['aria-current'] ? 'active' : ''; ?>" href="<?php echo $item['href']; ?>" id="<?php echo $item['id']; ?>" <?php echo $item['aria-current'] ? 'aria-current="page"' : ''; ?>>
                                <?php echo $item['label']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="d-flex search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search_input">
                    <button class="btn btn-outline-success" type="submit" id="search">Search</button>
                </div>

                <?php if (isset($_SESSION['user_id'])): ?>
                    <div class="profile" id="profile">
                        <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png"
                             alt="User Icon"
                             class="logo-icon"
                            width="50px"/>
                    </div>
                <?php else: ?>
                    <div class="login" id="loginRegisterBtns">
                        <button class="btn btn-primary" id="login">Sign In</button>
                        <button class="btn btn-secondary" id="register">Sign Up</button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>
<hr>

<div class="container-fluid main">
    <!-- Featured Recipe Section -->
    <div class="col-12 feature">
        <h1>Featured Recipe</h1>
        <div class="card">
            <div class="card-body card-feature">
                <img src="<?= $featured['image_url']; ?>" class="img" alt="Featured Recipe" width="150px" height="100%">
                <div class="info">
                    <h5 class="card-title"><?php echo $featured['recipe_title']; ?></h5>
                    <p class="card-text"><?php echo $featured['description']; ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Recipes Section -->
    <div class="col-12 recipe row" id="recipes">
        <h1>Latest Recipes</h1>
        <div class="row">
            <?php foreach ($recipes as $recipe): ?>
                <div class="col-md-4 mb-4">
                    <div class="card recipe-card">
                        <img src="<?= $recipe['image_url'] ?>" alt="<?= $recipe['recipe_title'] ?>" class="card-img-top">
                        <div class="card-body">
                            <div class="title-container">
                                <h2 class="card-title"><?= $recipe['recipe_title'] ?></h2>
                                <span class="favorite-star" title="Click to favorite" data-recipe-id="<?= $recipe['recipe_id'] ?>" onclick="toggleFavorite(<?= $recipe['recipe_id'] ?>, <?= $userId ?>)">
                                    ★
                                </span>
                            </div>
                            <p class="card-text"><?= $recipe['description'] ?></p>
                            <a href="recipe.php?recipeId=<?= $recipe['recipe_id'] ?>" class="btn btn-primary card-button">Let's cook</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer class="col-12" id="footer">
    <div>
        <h1><b>CookBook</b></h1>
        <p>Discover delicious recipes and culinary inspiration for every occasion.</p>
    </div>
    <div class="links">
        <h1><b>Quick Links</b></h1>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
            </li>
        </ul>
    </div>
    <div style="text-align: right;">
        <h1><b>Contact Us</b></h1>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="#">Instagram</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Facebook</a>
            </li>
        </ul>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/main.js"></script>

</body>
</html>