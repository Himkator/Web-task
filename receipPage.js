import { recipes } from '/recipe.js'

window.addEventListener('DOMContentLoaded', () => {
    const params = new URLSearchParams(window.location.search);
    takeIndex(params.get('receipId'))
});

function takeIndex(index){
    const recipe = recipes[index];

    // Create the main recipe container
    const recipeContainer = document.getElementById('recipe');

    // Recipe title
    const title = document.createElement('h2');
    title.textContent = recipe.title;
    recipeContainer.appendChild(title);

    // Recipe image
    const image = document.createElement('img');
    image.src = "grey.jpg";
    image.alt = "Picture Of Recipe";
    recipeContainer.appendChild(image);

    // Author and date
    const author = document.createElement('p');
    author.innerHTML = "<strong>Author:</strong> "+recipe.author;
    recipeContainer.appendChild(author);


    // Recipe description
    const description = document.createElement('p');
    description.textContent = recipe.description;
    recipeContainer.appendChild(description);

    // Ingredients title
    const ingredientsTitle = document.createElement('h3');
    ingredientsTitle.textContent = "Ingredients";
    recipeContainer.appendChild(ingredientsTitle);

    // Ingredients list
    const ingredientsList = document.createElement('p');
    ingredientsList.textContent = recipe.ingredients;
    recipeContainer.appendChild(ingredientsList);

    // Ingredients title
    const stepTitle = document.createElement('h3');
    stepTitle.textContent = "Шаги приготовление";
    recipeContainer.appendChild(stepTitle);

    // Ingredients list
    const stepText = document.createElement('p');
    stepText.textContent = recipe.steps;
    recipeContainer.appendChild(stepText);
}
