<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/userprofile.css">
    <title>Личная страница пользователя</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: green;" id="logo">CookBook</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse col 4" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php" id="about">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact</a>
                    </li>
                </ul>
                <div class="profile"><img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" class="logo-icon"></div>
            </div>
    </nav>
</header>
<hr>

<div class="container mt-4">
    <h1 class="text-center">Личная страница</h1>

    <section id="my-recipes" class="mt-5">
        <h2>Мои рецепты</h2>
        <div class="row">
            <!--карточки сюда  -->
        </div>
    </section>

    <section id="favorite-recipes" class="mt-5">
        <h2>Избранные рецепты</h2>
        <div class="row">
            <!-- избранные карточки рецептов сюда -->
        </div>
    </section>

    <section id="add-recipe" class="mt-5">
        <h2>Добавить рецепт</h2>
        <form>
            <div class="mb-3">
                <label for="recipe-title" class="form-label">Название рецепта</label>
                <input type="text" id="recipe-title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="recipe-description" class="form-label">Описание</label>
                <textarea id="recipe-description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Добавить</button>
        </form>
    </section>
</div>

<footer class="col 12" id="footer" style="margin-top: 20px;">
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
                <a class="nav-link active" aria-current="page" href="index.php" id="about">Home</a>
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
