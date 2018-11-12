
//var buttonSend = document.getElementById("startGame");
var contentWrapper = document.getElementById("wrapperID")

/*function startGameListener(){
    buttonSend.addEventListener("click", startGame, false);
}*/

function showAlert(){
    window.alert("look out you are drunk");
}

function startGame(){
    var beerCountString = window.prompt("After how many beers(500ml) you usualy get drunk?");
    var beerLimit = parseInt(beerCountString);
    var addBeers;
    for(var i=1; i <= drawCount(beerLimit); i++){
        addBeerImage();
    }

}

function drawCount(beers){
    var countBeersToDrink = Math.floor( 1 + Math.random() * ( 4 * beers ) );
    return countBeersToDrink;
}

function addBeerImage(){
    var imageBeer = document.createElement("img");
    imageBeer.setAttribute("src", "_img/piwo.png")
    contentWrapper.appendChild(imageBeer);
}



window.addEventListener("load", startGameListener, false);