//import exports
import { recipes } from '/recipe.js'
import { favorites } from '/recipe.js'

//get part where all recipes
const div_recipe=document.getElementById('recipes')


//append all recipe
for(let i=0; i<recipes.length; i++){
    //create group for 3 reciepes
    const groupDiv = document.createElement('div');
    groupDiv.classList.add(`groupRecipes${i}`, 'col-md-4', 'recipes-cards-part', 'mb-4')

    //take recipe by id
    const recipe = recipes[i];

    //create div card for filling with data
    const recipeDiv = document.createElement('div');
    recipeDiv.classList.add('card', 'recipe-card');

    //add image
    const img = document.createElement('img');
    img.src = 'grey.jpg';
    img.alt = recipe.title;
    img.classList.add('card-img-top')
    recipeDiv.appendChild(img);
        
    //add div for card body
    const recipeBody = document.createElement('div');
    recipeBody.classList.add('card-body');
    recipeDiv.appendChild(recipeBody)

    //container for title and favorite
    const titleContainer = document.createElement('div');
    titleContainer.classList.add('title-container');


    //fill card body
    const title = document.createElement('h2');
    title.textContent = recipe.title;
    title.classList.add('card-title')

    //star for favorite
    const star = document.createElement('span');
    star.classList.add('favorite-star');
    star.innerHTML = '★'; 
    star.title = "Click to favorite";

    star.addEventListener('click', (e) => {
        star.classList.toggle('favorited');
        addFavoriteRecipe(recipe, star);
    });

    titleContainer.appendChild(title);
    titleContainer.appendChild(star);

    recipeBody.appendChild(titleContainer);
    

    const description = document.createElement('p');
    description.textContent = recipe.description;
    description.classList.add('card-text')
    recipeBody.appendChild(description);

    //add button
    const linkToRecipe=document.createElement('a');
    //add eventlistener that will be use when click on button
    linkToRecipe.addEventListener('click', ()=>toRecipePage(i));
    linkToRecipe.text="Let's cook"
    linkToRecipe.classList.add('btn', 'btn-primary', 'card-button')
    recipeBody.appendChild(linkToRecipe)

    groupDiv.appendChild(recipeDiv);
    //append child
    div_recipe.appendChild(groupDiv)
}
//for click button
//TODO Improve this function
function toRecipePage(indexOfRecipe){
    console.log(indexOfRecipe)
}

//function for click recipe
function addFavoriteRecipe(recipe, star) {
    console.log(`You clicked on: ${recipe.title}`);
    if (favorites.includes(recipe)) {
        favorites.splice(favorites.indexOf(recipe), 1); // Remove if already in favorites
        star.classList.remove('favorited');
    } else {
        favorites.push(recipe); // Add if not in favorites
        star.classList.add('favorited');
    }
    console.log(favorites)
}

