const stars = document.querySelectorAll('.favorite-star');
const search=document.getElementById('search');

stars.forEach(star => {
    star.addEventListener('click', () => {
        star.classList.toggle('favorited');
    });
});

search.addEventListener('click', ()=>showRecipe());

// Handle login, register, profile navigation
const login_button = document.getElementById('login');
const register_button = document.getElementById('register');
const profile_button = document.getElementById('profile');
login_button.addEventListener('click', () => toLogin());
register_button.addEventListener('click', () => toRegister());
profile_button.addEventListener('click', () => redirectToPage());

const logo = document.getElementById('logo');
const about = document.getElementById('about');

logo.addEventListener('click', () => {
    window.location.href = "index.php";
});

about.addEventListener('click', () => {
    window.location.href = "aboutUs.php";
});
function toLogin(){
    window.location.href = "Login Register.php";
}

function toRegister(){
    window.location.href = "Login Register.php?isLogin=false";
}

function redirectToPage() {
    alert("At the moment profile page doesnt work😢")
}
function toggleFavorite(recipeId, userId) {
    const star = event.target;
    const isFavorited = star.classList.contains('favorited');
    if(!userId){
        alert("you need to be log in")
        toLogin();
        return;
    }
    // Send AJAX request to PHP
    $.ajax({
        url: 'toggle_favorite.php',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({ recipeId: recipeId, isFavorited: isFavorited, userId: userId }),
        success: function(response) {
            const data = JSON.parse(response);

            if (data.success) {
                // Toggle the 'favorited' class on the star
                star.classList.toggle('favorited');
                alert(data.message); // Show success message
            } else {
                // Redirect to login page if not logged in
                if (data.message.includes('must be logged in')) {
                    alert(data.message); // Show message
                    window.location.href = 'Login Register.php'; // Redirect to login page
                } else {
                    alert(data.message); // Show error message
                }
            }
        },
        error: function(xhr) {
            console.error('Server Error:', xhr.responseText); // Log server response
            alert('An error occurred while toggling the favorite.');
        }
    });
}

function showRecipe(){
    const value=document.getElementById("search_input").value;
    const url = value ? `search.php?query=${value}` : 'search.php';
    console.log(url)
    fetch(url)
        .then(response => response.json())
        .then(data => {
            const recipes = data.recipes;
            updateRecipe(recipes); // Update main content
        })
        .catch(error => {
            console.error('Error fetching recipes:', error);
        });
}

function updateRecipe(recipes) {
    // Select the container for recipes
    const recipesContainer = document.getElementById('recipes');
    // Clear previous content in the recipes container
    recipesContainer.innerHTML = '';

    // Update Latest Recipes
    let recipesHtml = '';
    recipes.forEach(recipe => {
        recipesHtml += `
            <div class="col-md-4 mb-4">
                <div class="card recipe-card">
                    <img src="${recipe.image_url}" alt="${recipe.recipe_title}" class="card-img-top">
                    <div class="card-body">
                        <div class="title-container">
                            <h2 class="card-title">${recipe.recipe_title}</h2>
                            <span class="favorite-star" title="Click to favorite" data-recipe-id="${recipe.recipe_id}" onclick="toggleFavorite(${recipe.recipe_id})">
                                ★
                            </span>
                        </div>
                        <p class="card-text">${recipe.description}</p>
                        <a href="recipe.php?recipeId=${recipe.recipe_id}" class="btn btn-primary card-button">Let's cook</a>
                    </div>
                </div>
            </div>
        `;
    });

    // Inject the HTML into the recipes container
    recipesContainer.innerHTML = recipesHtml;
}