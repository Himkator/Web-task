//import recipes
import { recipes } from '/recipe.js'


//get part where all recipes
const div_recipe=document.getElementById('recipes')


//divide them by 3(the easiest way)
//TODO improve this part for more situation(for example if length cant be divided by 3)
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

    //fill card body
    const title = document.createElement('h2');
    title.textContent = recipe.title;
    title.classList.add('card-title')
    recipeBody.appendChild(title);

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

