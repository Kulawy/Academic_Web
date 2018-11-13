
//var buttonSend = document.getElementById("startGame");
var contentWrapper = document.getElementById("wrapperID")
var drawnedCount = 0;
/*function startGameListener(){
    buttonSend.addEventListener("click", startGame, false);
}*/

var buttonDring = document.getElementById("beerImg");

function drinkBeerListener(){
    buttonSend.addEventListener("click", drinkBeer, false);
}

function drinkBeer(){
    buttonSend.setAttribute("src", "_img/emptyGlass.png");
}

function showAlert(){
    window.alert("look out you are drunk");
}

function startGame(){
    clearPlain();
    var beerCountString = window.prompt("After how many beers(500ml) you usualy get drunk?");
    var beerLimit = parseInt(beerCountString);
    changeButtonSighn();
    drawnedCount = drawCount(beerLimit)
    for(var i=1; i <= drawnedCount; i++){
            addBeerImage();
    }

}

function drawCount(beers){
    var countBeersToDrink = Math.floor( 1 + Math.random() * ( 4 * beers ) );
    return countBeersToDrink;
}

function addBeerImage(){

    /*
    var divBeerImg = document.createElement("div");
    divBeerImg.setAttribute("class", "beerImg");
    var imageBeerEmpty = document.createElement("img");
    imageBeerEmpty.setAttribute("src", "_img/emptyGlass.png");
    imageBeerEmpty.setAttribute("id", "empty");
    var imageBeerFull = document.createElement("img");
    imageBeerFull.setAttribute("src", "_img/piwo.png");
    imageBeerFull.setAttribute("id", "full");
    divBeerImg.appendChild(imageBeerEmpty);
    divBeerImg.appendChild(imageBeerFull);
    contentWrapper.appendChild(divBeerImg);*/


    var imageBeer = document.createElement("img");
    imageBeer.setAttribute("src", "_img/piwo.png")
    imageBeer.setAttribute("class", "beerImg");
    contentWrapper.appendChild(imageBeer);


}

function clearPlain(){
    while (contentWrapper.hasChildNodes()) {   
        contentWrapper.removeChild(contentWrapper.firstChild);
    }
}

function changeButtonSighn(){
    var startButton = document.getElementById("startGame")
    startButton.innerHTML = "Reset"
}

window.addEventListener("load", drinkBeerListener, false);